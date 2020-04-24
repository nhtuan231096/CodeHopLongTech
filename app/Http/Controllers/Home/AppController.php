<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use App\Models\Customer;
use App\Models\Customer_type;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\RedBill;
use App\Models\Download_service;
use App\Models\Terms;
use App\User;
use App\Models\User_group;
use App\Models\CouponRule;
use App\Models\CouponCode;
use App\Models\News;
use App\Models\News_Category;
use App\Models\CommentNews;
use Auth;
use Mail;
use App\Models\AdminNotification;
use App\Models\FlashSale;
use App\Mail\OrderSendMail;
use App\Mail\OrderSendMailNotification;
use App\Mail\ForgotPassword;

/**
 * 
 */
class AppController extends Controller
{
	public function createAccountCustomer(Request $req) {
		$validation = Validator::make($req->all(),[ 
	        'email' => 'unique:customer,email'
	    ],[
	    	'email.unique' => 'Email already exists'
	    ]);

	    if($validation->fails()){
	    	$errors = $validation->errors();
	        throw new HttpResponseException(response()->json([
	            'errors' => $errors
	        ], Response::HTTP_UNPROCESSABLE_ENTITY));
	    } else{
	    	$password = bcrypt($req->password);
			$req->merge(['password'=>$password]);
			$newCustomer = Customer::create($req->all());
			return $newCustomer;
	    }	
	}
	public function getCustomerType() {
		$customer_type = Customer_type::where('status',1)->get();
		return response()->json($customer_type);
	}
	// public function getCustomerByEmail(){
	// 	$userid = Auth::guard('customer')->user();
	// 	// $token_key = makeRandomTokenKey();

 // 		return $userid;
	// }
	public function getCategories () {
		$categories=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->limit(16)->get();
		return response()->json($categories);
	}
	public function getCategoryByParentId ($parent_id){
		$categories=Category::where(['parent_id'=>$parent_id,'status'=>'enable'])->orderBy('sorder','ASC')->limit(16)->get();
		return response()->json($categories);
	}
	public function getProductByCategoryId ($category_id) {
		$products = Product::select('id','price','price_when_login','title','slug','cover_image','cover_image_2','time_discount','discount')->where('status','enable')->where('category_id',$category_id)->paginate(16);
		return response()->json($products);
	}
	public function getProductByTitle ($title) {
		$products = Product::select('id','price','price_when_login','title','slug','cover_image','cover_image_2','time_discount','discount')->where('status','enable')->where('title','like','%'.$title.'%')->paginate(8);
		return response()->json($products);
	}
	public function getProductById ($product_id) {
		$product = Product::where('id',$product_id)->where('status','enable')->first();
		return response()->json($product);
	}
	public function commentProduct (Request $req) {
		$comment = Comment::create($req->all());
		return response()->json($comment);
	}
	public function getCommentByIdProduct($product_id) {
		$comments = Comment::where('product_id',$product_id)->where('status',1)->paginate(8);
		if (($comments->count()>0)) {
			return response()->json($comments);
		}
		else {
			return json_encode(['errors'=>'Comment not found']);
		}
	}
	public function createOrder (Request $req) {
		$dataOrder = $req->order;
		$dataOrderDetail = $req->order_detail;
		$dataVat = $req->vat;
		$order = Order::create($dataOrder);
		if ($order) {
			$datas = [];
			foreach ($dataOrderDetail as $key => $item) {
				$datas[] = [
					'product_id' => $item['product_id'],
					'price' => $item['price'],
					'quantity' => $item['quantity'],
					'order_id' => $order->id,
					'product_name' => $item['product_name']
				];
			}
			if (isset($dataVat['company'])) {
				RedBill::create([
					'company' => $dataVat['company'],
					'tax_code' => $dataVat['tax_code'],
					'address' => $dataVat['address'],
					'order_id' => $order->id
				]);
			}
			if (OrderDetail::insert($datas)) {
				Mail::to($dataOrder['email'])->send(new OrderSendMail($order));
				Mail::to('info.hoplongtech@gmail.com')->send(new OrderSendMailNotification($order));
				AdminNotification::create([
					'order_id' => $order->id,
					'content' => "Đơn hàng mới, order_id: #".$order->id
				]);
			} else {
				$order->delete();
				return json_encode(['errors'=>'Something when wrong!']);
			}
		}
		return $order;
	}
	public function getCatalog(){
		$catalog=Download_service::limit(8)->where('type','2')->get();
		return response()->json($catalog);
	}
	public function getManual(){
		$manuals=Download_service::limit(8)->where('type','4')->get();
		return response()->json($manuals);
	}
	public function getPricelist(){
		$pricelist=Download_service::limit(8)->where('type','3')->get();
		return response()->json($pricelist);
	}
	public function getDocumentById($download_id) {
		$document = Download_service::find($download_id)->where('status','enable')->get();
		return response()->json($document);
	}
	public function getDocumentByTitle($title) {
		$document = Download_service::where('title','like','%'.$title.'%')->where('status','enable')->get();
		return response()->json($document);
	}
	public function getPolicyRetunExchange(){
		$policy = Terms::where('type_terms','doi_tra')->get();
		return response()->json($policy);
	}
	public function getWarrantyPolicy(){
		$policy = Terms::where('type_terms','bao_hanh')->get();
		return response()->json($policy);
	}
	public function getPaymentPolicy(){
		$policy = Terms::where('type_terms','thanh_toan')->get();
		return response()->json($policy);
	}
	public function getShippingPolicy(){
		$policy = Terms::where('type_terms','van_chuyen')->get();
		return response()->json($policy);
	}
	public function getAllUsers(){
		$users = User::where('status','enable')->get();
		return response()->json($users);
	}
	public function getAllUsersGroup(){
		$userGroup = User_group::where('status','enable')->get();
		return response()->json($userGroup);
	}
	public function addCouponRule(Request $req){
		return CouponRule::create($req->all());
	}
	public function addCouponCode(Request $req){
		return CouponCode::create($req->all());
	}
	public function editCouponCode(Request $req,$id){
		$coupon = CouponCode::find($id);
		$coupon->update($req->all());
		return $coupon;
	}
	public function deleteCouponCode(Request $req){
		$delete = CouponCode::destroy($req->id);
		return $delete == true ? ["success" => "Xóa mã giảm giá thành công"] : ["error" => "Có lỗi vui lòng thử lại"];
	}
	public function getAllNews(){
		$news = News::where('status','enable')->paginate(10);
		return response()->json($news);
	}
	public function getNewsCategory(){
		$news_category = News_Category::where('status','enable')->paginate(10);
		return response()->json($news_category);
	}
	public function addCommentNews (Request $req) {
		$comment = CommentNews::create($req->all());
		return $comment;
	}
	public function useCouponCode(Request $req){
		$data = [];
		$couponcode = $req->couponcode;
		$getCoupon = CouponCode::where('coupon_code',$couponcode)->first();
		$data = [
			"data_coupon_code" => $getCoupon,
			"data_rule" => $getCoupon->rule,
		];
		return $data;
	}
	public function forgotPassword(Request $req){
		$check = Customer::where('email',$req->email);
		if($check->count() > 0){
			$data = 
			[
	        	'email'=>$req->email,
	        	'password'=>($check->first()->password)
			];
		    Mail::to($req->email)->send(new ForgotPassword($data));

			return response()->json(true, Response::HTTP_OK);
		}
		else{
			return redirect()->json('error','Email not found in the system');
		}
	}
	public function flashSale(){
		$current_date = date('Y-m-d');
		$flash_sale = FlashSale::where('status',1)->orderBy('id','desc')->where('end_time','>',$current_date)->first();
		if ($flash_sale) {
			return response()->json($flash_sale->products, Response::HTTP_OK);
		} else {
			return response()->json(["error"=>"Flash sale not found"]);
		}
	}
	public function getFilterProductByPrice(Request $req){
		try {
		  	$price_from = $req->price['from'];
			$price_to = $req->price['to'];
			$products = Product::select('id','price','price_when_login','title','slug','cover_image','cover_image_2','time_discount','discount')
						->where('price','>=',(int)$price_from)
						->where('price','<=',(int)$price_to)->paginate(16);
			return response()->json($products, Response::HTTP_OK);
		}

		//catch exception
		catch(ModelNotFoundException $exception) {
		  return 'Message: ' .$e->getMessage();
		}
	}
}