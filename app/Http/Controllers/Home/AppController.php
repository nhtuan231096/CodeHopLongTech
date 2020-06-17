<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CatWork;
use App\Models\NewsWork;
use App\Models\Rate;
use App\Models\Slider;
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
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 *
 */
class AppController extends Controller
{
    public function createAccountCustomer(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'email' => 'unique:customer,email'
        ], [
            'email.unique' => 'Email already exists'
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors();
            throw new HttpResponseException(response()->json([
                'errors' => $errors
            ], Response::HTTP_UNPROCESSABLE_ENTITY));
        } else {
            $password = bcrypt($req->password);
            $req->merge(['password' => $password]);
            $newCustomer = Customer::create($req->all());
            return $newCustomer;
        }
    }

    public function getCustomerType()
    {
        $customer_type = Customer_type::where('status', 1)->get();
        return response()->json($customer_type);
    }
    // public function getCustomerByEmail(){
    //  $userid = Auth::guard('customer')->user();
    //  // $token_key = makeRandomTokenKey();

    //      return $userid;
    // }
    public function getCategories()
    {
        $categories = Category::where(['priority' => 1, 'parent_id' => 0, 'status' => 'enable'])->orderBy('sorder', 'ASC')->limit(16)->get();
        return response()->json($categories);
    }

    public function getCategoryByParentId($parent_id)
    {
        $categories = Category::where(['parent_id' => $parent_id, 'status' => 'enable'])->orderBy('sorder', 'ASC')->limit(16)->get();
        if ($categories) {
            return response()->json($categories, Response::HTTP_OK);
        }
        else {
            return json_encode(['errors' => 'Category not found']);
        }
    }

    public function getProductByCategoryId($category_id)
    {
        $products = Product::select('id', 'price', 'price_when_login', 'title', 'slug', 'cover_image', 'cover_image_2', 'time_discount', 'discount','pdp')->where('status', 'enable')->where('category_id', $category_id)->paginate(16);
        foreach ($products as $itemProduct) {
            $rate = $this->caculateRate($itemProduct);
            $itemProduct->rate = $rate;
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        return $products;
        return response()->json($products, Response::HTTP_OK);
    }

    public function caculateRate($product)
    {
        $countRate1 = Rate::where('status', 1)->where('product_id', $product->id)->where('rate', 1)->count();
        $countRate2 = Rate::where('status', 1)->where('product_id', $product->id)->where('rate', 2)->count();
        $countRate3 = Rate::where('status', 1)->where('product_id', $product->id)->where('rate', 3)->count();
        $countRate4 = Rate::where('status', 1)->where('product_id', $product->id)->where('rate', 4)->count();
        $countRate5 = Rate::where('status', 1)->where('product_id', $product->id)->where('rate', 5)->count();
        $average = $countRate5 + $countRate4 + $countRate3 + $countRate2 + $countRate1;
        $average = $average == 0 ? 1 : $average;
        $percentRated = (($countRate5 * 5) + ($countRate4 * 4) + ($countRate3 * 3) + ($countRate2 * 2) + ($countRate1 * 1)) / $average;
        return $percentRated;
    }

    public function getProductByTitle ($title) {
        $products = Product::select('id','price','price_when_login','title','slug','cover_image','cover_image_2','time_discount','discount','pdp')->where('status','enable')->where('title','like','%'.$title.'%')->paginate(8);
        foreach ($products as $itemProduct) {
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        return response()->json($products);
    }

    public function getProductByKeyword () {
        if(request()->title || request()->category_id) {
            $products = Product::where('title','like','%'.request()->title.'%')->orWhere('category_id',request()->category_id)->paginate(8);
            if($products) {
                return response()->json($products);
            }
            else {
                return json_encode(['errors' => 'Product not found']);
            }
        }
    }

    public function getProductById($product_id)
    {
        $product = Product::where('id', $product_id)->where('status', 'enable')->first();
        if(!$product) {
            return json_encode(['errors' => 'Product not found']);
        }
        $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
        $product->cover_image = $urlImage.'/'.$product->cover_image;

        $related = Product::where('category_id', $product->category_id)->paginate(12);
        foreach ($related as $itemProduct) {
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        $rate = $this->caculateRate($product);
        $link = request()->root() . '/product/' . $product->slug;
        $comments = Comment::where('product_id', $product_id)->where('status', 1)->paginate(8);

        $content = $product->content;
        $weight = json_decode($content, true);
        if(isset($weight['Trọng lượng'])) {
            $weight = $weight['Trọng lượng'];
            $unit = preg_replace("/[^a-zA-Z]+/", "", $weight);
            $weight = preg_replace("/[^0-9.]+/", "", $weight);
            
            $data_weight = [
                'weight' => $weight,
                'unit' => $unit,
            ];
        }

        $data = [
            'product' => $product,
            'related' => $related,
            'link' => $link,
            'rate' => $rate,
            'comments' => $comments,
            'data_weight' => isset($data_weight) ? $data_weight : ''
        ];
        return response()->json($data, Response::HTTP_OK);
    }

    public function commentProduct(Request $req)
    {
        $comment = Comment::create($req->all());
        return response()->json($comment);
    }

    public function getCommentByIdProduct($product_id)
    {
        $comments = Comment::where('product_id', $product_id)->where('status', 1)->paginate(8);
        if (($comments->count() > 0)) {
            return response()->json($comments);
        } else {
            return json_encode(['errors' => 'Comment not found']);
        }
    }

    public function createOrder(Request $req)
    {
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
                    'content' => "Đơn hàng mới, order_id: #" . $order->id
                ]);
            } else {
                $order->delete();
                return json_encode(['errors' => 'Something when wrong!']);
            }
        }
        return $order;
    }

    public function getCatalog()
    {
        $catalog = Download_service::limit(8)->where('type', '2')->get();
        return response()->json($catalog);
    }

    public function getManual()
    {
        $manuals = Download_service::limit(8)->where('type', '4')->get();
        return response()->json($manuals);
    }

    public function getPricelist()
    {
        $pricelist = Download_service::limit(8)->where('type', '3')->get();
        return response()->json($pricelist);
    }

    public function getDocumentById($download_id)
    {
        $document = Download_service::find($download_id)->where('status', 'enable')->get();
        return response()->json($document);
    }

    public function getDocumentByTitle($title)
    {
        $document = Download_service::where('title', 'like', '%' . $title . '%')->where('status', 'enable')->get();
        return response()->json($document);
    }

    public function getPolicyRetunExchange()
    {
        $policy = Terms::where('type_terms', 'doi_tra')->get();
        return response()->json($policy);
    }

    public function getWarrantyPolicy()
    {
        $policy = Terms::where('type_terms', 'bao_hanh')->get();
        return response()->json($policy);
    }

    public function getPaymentPolicy()
    {
        $policy = Terms::where('type_terms', 'thanh_toan')->get();
        return response()->json($policy);
    }

    public function getShippingPolicy()
    {
        $policy = Terms::where('type_terms', 'van_chuyen')->get();
        return response()->json($policy);
    }

    public function getAllUsers()
    {
        $users = User::where('status', 'enable')->get();
        return response()->json($users);
    }

    public function getAllUsersGroup()
    {
        $userGroup = User_group::where('status', 'enable')->get();
        return response()->json($userGroup);
    }

    public function addCouponRule(Request $req)
    {
        return CouponRule::create($req->all());
    }

    public function addCouponCode(Request $req)
    {
        return CouponCode::create($req->all());
    }

    public function editCouponCode(Request $req, $id)
    {
        $coupon = CouponCode::find($id);
        $coupon->update($req->all());
        return $coupon;
    }

    public function deleteCouponCode(Request $req)
    {
        $delete = CouponCode::destroy($req->id);
        return $delete == true ? ["success" => "Xóa mã giảm giá thành công"] : ["error" => "Có lỗi vui lòng thử lại"];
    }

    public function getAllNews()
    {
        $news = News::where('status', 'enable')->paginate(10);
        return response()->json($news);
    }

    public function getNewsCategory()
    {
        $news_category = News_Category::where('status', 'enable')->paginate(10);
        return response()->json($news_category);
    }

    public function addCommentNews(Request $req)
    {
        $comment = CommentNews::create($req->all());
        return $comment;
    }

    public function useCouponCode(Request $req)
    {
        $data = [];
        $couponcode = $req->couponcode;
        $getCoupon = CouponCode::where('coupon_code', $couponcode)->first();
        if(empty($getCoupon)) {
            return response()->json(["error" => "Coupon code does not exist"]);
        }
        $data = [
            "data_coupon_code" => $getCoupon,
            "data_rule" => $getCoupon->rule,
        ];
        return $getCoupon;
    }

    public function forgotPassword(Request $req)
    {
        $check = Customer::where('email', $req->email);
        if ($check->count() > 0) {
            $data =
                [
                    'email' => $req->email,
                    'password' => ($check->first()->password)
                ];
            Mail::to($req->email)->send(new ForgotPassword($data));

            return response()->json(true, Response::HTTP_OK);
        } else {
            return response()->json('error', 'Email not found in the system');
        }
    }

    public function flashSale()
    {
        $current_date = date('Y-m-d');
        $flash_sales = FlashSale::where('status', 1)->orderBy('id', 'desc')->where('end_time', '>', $current_date)->first();
        $dataProduct = FlashSale::where('status', 1)->orderBy('id', 'desc')->where('end_time', '>', $current_date)->first()->products;
        foreach ($dataProduct as $itemProduct) {
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        if ($flash_sales) {
            $data = [
                "flash_sales" => $flash_sales,
                "products" => $dataProduct
            ];
            return response()->json($data, Response::HTTP_OK);
        } else {
            return response()->json(["error" => "Flash sale not found"]);
        }
    }

    public function getFilterProductByPrice(Request $req)
    {
        try {
            $products = Product::select('*');
            if ($req->price['from'] != '' && $req->price['to'] != '') {
                $price_from = $req->price['from'];
                $price_to = $req->price['to'];
                $products->where('price', '>=', (int)$price_from)
                    ->where('price', '<=', (int)$price_to);
            }
            if ($req->category_id != ''){
                $products->where('category_id', $req->category_id);
            }
            if ($req->catalog != ''){
                $products->where('catalog', $req->catalog);
            }
            $dataProduct = $products->paginate(10);
            foreach ($dataProduct as $itemProduct) {
                $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
                $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
            }
            return response()->json($dataProduct, Response::HTTP_OK);
        } //catch exception
        catch (ModelNotFoundException $exception) {
            return 'Message: ' . $e->getMessage();
        }
    }

    public function getSlider()
    {
        $slider = Slider::orderBy('sorder', 'DESC')->where(['status' => 'enable', 'type' => 1])->get();
        $urlImage = request()->root() . "/uploads/slider/";
        foreach ($slider as $itemSlider) {
            $itemSlider->cover_image = $urlImage . $itemSlider->cover_image;
        }
        return response()->json($slider, Response::HTTP_OK);
    }

//    public function getProductRelated($idProduct) {
//      $product = Product::find($idProduct);
//      if ($product) {
//          $related = Product::where('category_id',$product->category_id)->paginate(12);
//            return response()->json($related, Response::HTTP_OK);
//        }
//    }
    public function getLinkProductById($product_id)
    {
        $product = Product::find($product_id);
        return request()->root() . '/product/' . $product->slug;
    }

    public function view($slug, Request $req)
    {
        $product = Product::where('slug', $slug)->first();

        $view = $product->view + 1;
        $product->update(['view'=>$view]);
        // $new_product = Cache::remember('new_product',1*60,function() use($pro2){
        //  return $pro2->where('is_new_product','enable')->limit(16)->get();
        // });
        $comment=Comment::orderBy('id','DESC')->where('status',1)->where('product_id',$product->id)->where('id_comment_reply',null)->paginate(5);
        $sames=Product::where('category_id',$product->category_id)->where('id','<>','$product->id')->where('status','enable')->paginate(8);
        $rates=Rate::where('status',1)->where('product_id',$product->id)->paginate(4);
        $countRates=Rate::where('status',1)->where('product_id',$product->id)->count();
        $countRate1=Rate::where('status',1)->where('product_id',$product->id)->where('rate',1)->count();
        $countRate2=Rate::where('status',1)->where('product_id',$product->id)->where('rate',2)->count();
        $countRate3=Rate::where('status',1)->where('product_id',$product->id)->where('rate',3)->count();
        $countRate4=Rate::where('status',1)->where('product_id',$product->id)->where('rate',4)->count();
        $countRate5=Rate::where('status',1)->where('product_id',$product->id)->where('rate',5)->count();
        $average = $countRate5 + $countRate4 + $countRate3 + $countRate2 + $countRate1;
        $average = $average == 0 ? 1 : $average;
        $percentRated = (($countRate5*5)+($countRate4*4)+($countRate3*3)+($countRate2*2)+($countRate1*1))/$average;

        $cate=Category::where('id',$product->category_id)->first();

        if ($product) {
            $categorys = Category::where(['priority' => 1, 'parent_id' => 0, 'status' => 'enable'])->orderBy('sorder', 'ASC')->paginate(18);
            // dd($cate->parent_id);
            return view('home.v2.only_detail_product', [
                'product' => $product,
                'categorys' => $categorys,
                // 'new_products'=>$new_product,
                'comments'=>$comment,
                'rates'=>$rates,
                'countRates'=>$countRates,
                'countRate1'=>$countRate1,
                'countRate2'=>$countRate2,
                'countRate3'=>$countRate3,
                'countRate4'=>$countRate4,
                'countRate5'=>$countRate5,
                'percentRated'=>$percentRated,
            ]);
        } else {
            return view('errors.404');
        }
    }

    public function bestSellers(){
        $products = Product::where('is_best_seller','enable')->paginate(16);
        foreach ($products as $itemProduct) {
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        return response()->json($products, Response::HTTP_OK);
    }

    public function newProducts(){
        $products = Product::where('is_new_product','enable')->where('status','enable')->paginate(16);
        foreach ($products as $itemProduct) {
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        return response()->json($products, Response::HTTP_OK);
    }

    public function promotionProducts(){
        $products = Product::where('is_promotion','enable')->where('status','enable')->paginate(16);
        foreach ($products as $itemProduct) {
            $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product';
            $itemProduct->cover_image = $urlImage.'/'.$itemProduct->cover_image;
        }
        return response()->json($products, Response::HTTP_OK);
    }

    public function getCategoryRecruitment(){
        $cat_work= CatWork::where('status','enable')->paginate(15);
        return response()->json($cat_work, Response::HTTP_OK);
    }

    public function getRecruitment(){
        $news=NewsWork::search()->orderBy('id','DESC')->where('status','enable')->paginate(10);
        if(!$news) return response()->json(["error" => "Job not found"]);
        return response()->json($news, Response::HTTP_OK);
    }

    public function getRecruitmentByCategoryId($categoryId){
        $newsworks = NewsWork::Where('cat_work_id',$categoryId)->where('status','enable')->paginate(10);
        if(!$newsworks) return response()->json(["error" => "Job not found"]);
        return response()->json($newsworks, Response::HTTP_OK);
    }

    public function getRecruitmentById($id){
        $newswork = NewsWork::find($id);
        if(!$newswork) return response()->json(["error" => "Job not found"]);
        return response()->json($newswork, Response::HTTP_OK);
    }


    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function loginCustomer(Request $request)
    {
        $credentials = request(['email', 'password']);
        $token = Str::random(60);
        if(Auth::guard('customer')->attempt($credentials)){
            Auth::guard('customer')->user()->forceFill([
                'api_token' => $token,
            ])->save();
            return ['token' => $token];
        }
        else {
            return response()->json([
                'message' => 'Login unsuccessful'
            ], 401);
        }
    }
    
    public function getProductWeight($id){
        $product = Product::find($id);
        $content = $product->content;
        $weight = json_decode($content, true);
        if(isset($weight['Trọng lượng'])) {
            $weight = $weight['Trọng lượng'];
            $unit = preg_replace("/[^a-zA-Z]+/", "", $weight);
            $weight = preg_replace("/[^0-9.]+/", "", $weight);
            
            $data = [
                'weight' => $weight,
                'unit' => $unit,
            ];
            return response()->json($data, Response::HTTP_OK);
        }
        else {
            return response()->json([
                'error' => 'Data not found!'
            ], 401);
        }  
    }
}
