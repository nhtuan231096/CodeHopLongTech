<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Helper\Data;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\AdminNotification;
use App\Models\RedBill;
use App\Models\Customer;
use App\Models\Reward_points;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\OrderSendMail;
use App\Mail\OrderSendMailNotification;
use App\Models\Customer_type;
use App\Models\CouponCode;
use App\Models\CouponRule;
use App\Models\CouponLog;

/**
 * 
 */
class OrderController extends Controller
{
	public function __construct(){
		$this->middleware(function ($request, $next){
			$custome_type = Customer_type::where('status',1)->get();
			view()->share([
            'cart' => new Data(),
            'custome_type' => $custome_type
        	]);
        	return $next($request); 
		});
	}
	public function order(){
		$data_red_bill = '';
		if (request()->red_bill_company) {
			$data_red_bill=request()->all();
		}
		// dd(request()->all());
		if (request()->status) {
			$data_red_bill=request()->status;
		}
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
		return view('home.v2.cart.order',[
			'categorys' => $categorys,
			'data_red_bill' => $data_red_bill
		]);
	}
	public function post_order(Request $req, Data $cart){
			$req->merge(['user_id'=>Auth::guard('customer')->id()]);
		// if($req->reward_point){
			// $req->merge(['total_price'=>$req->reward_point]);
			$reduced_price = $req->reduced_price > 0 ? str_replace(',','',$req->reduced_price) : 0;
			$req->merge(['reduced_price'=>$reduced_price]);

			$req->shipping_fee > 0 ? $req->merge(['shipping_fee'=>$req->shipping_fee]) : 0;
			$req->ship_cod > 0 ? $req->merge(['ship_cod'=>$req->ship_cod]) : 0;
			$req->use_coupon_code > 0 ? $req->merge(['use_coupon_code'=>$req->use_coupon_code]) : 0;
			$toTalFormat = str_replace(',','',$req->total_order_price); 
			// $toTalFormat > 0 ? $req->merge(['total_order_price'=>$toTalFormat]) : 0;
			// $totalVat = $req->vat > 0 ? ($req->total_price - $req->reduced_price - $req->use_coupon_code)/10 : 0;
			$totalVat = $req->total_vat > 0 ? $req->total_vat : 0;
			// dd($toTalFormat);
			$TotalPrice = $toTalFormat + $req->ship_cod + $req->shipping_fee - $req->reduced_price;

			$req->merge(['total_order_price'=>$TotalPrice]);
			// dd($req->all());

		// }
		if ($order = Order::create($req->all())) {
			$datas = [];
			foreach ($cart->items as $key => $item) {
				$datas[] = [
					'product_id' => $item['id'],
					'price' => $item['price'],
					'quantity' => $item['quantity'],
					'order_id' => $order->id,
					'product_name' => $item['title'],
					'product_image' => $item['image'],
				];
			}
			if ($datas) {
				if($req->red_bill_company){
					RedBill::create([
						'company' => $req->red_bill_company,
						'tax_code' => $req->red_bill_tax_code,
						'address' => $req->red_bill_address,
						'order_id' => $order->id
					]);
				}
				if($req->data_uses_coupon){
					$couponCode = $req->data_uses_coupon;
					$DataCouponCode = CouponCode::where('coupon_code',$couponCode)->first();
					$couponCodeId=$DataCouponCode->id;
					$couponCodeRuleId=$DataCouponCode->rule_id;
					$data = [
						'coupon_code_id'=>$couponCodeId,
						'rule_id'=>$couponCodeRuleId,
						'coupon_code'=>$couponCode,
						'customer'=>$req->name,
					];
					CouponLog::create($data);
					$coupon_code = CouponCode::where('coupon_code',$req->data_uses_coupon)->first();
					$times_used = $coupon_code->times_used;
					$coupon_code->update([
						'times_used' => $times_used + 1
					]);
				}
				if(OrderDetail::insert($datas)){
					if(Auth::guard('customer')->check()){

						$id = Auth::guard('customer')->user()->id;
						$customer = Customer::find($id);
						$currentPoints = $customer->reward_points;						
						$customer->update([
							'reward_points' => $currentPoints - $req->redeem_money
						]);

					}
					
					Mail::to($req->email)->send(new OrderSendMail($order));
					Mail::to('info.hoplongtech@gmail.com')->send(new OrderSendMailNotification($order));
					$cart->clear();
					AdminNotification::create([
						'order_id' => $order->id,
						'content' => "Đơn hàng mới, order_id: #".$order->id
					]);
					// return redirect()->route('order_success')->with('success','Đặt hàng thành công');
					
					// $dataOrder = Order::where('order_id',$order->id)->first();
					// $categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
					// return view('home.v2.order_history',[
					// 	'categorys' => $categorys,
					// 	'order' => $dataOrder
					// ]);
					$dataOrder = Order::where('order_id',$order->id)->first();
					$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
					return view('home.v2.order_information',[
						'categorys' => $categorys,
						'order' => $dataOrder
					]);
				} else {
					$order->delete();
					return redirect()->route('error')->with('error','Có lỗi vui lòng thử lại');

				}
			}
			// dd($cart->items);
		} else {
			return view('erors.404');
		}
	}


	public function order_success(){
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
		return view('home.cart.order_success',[
			'categorys'=>$categorys
		]);
	}
	public function order_history(){
		// dd(request()->getClientIp());
		if (Auth::guard('customer')->check) {
			$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
			$order = Order::where('user_id',Auth::guard('customer')->id())->paginate(10);
			// dd($order);
			return view('home.cart.order_history',[
				'orders' => $order,
				'categorys' => $categorys
			]);
		} else{
			return view('erors.404');
		}
	}
	public function orderDetail($order_id){
		if($order_detail = OrderDetail::Where('order_id',$order_id)->get()){
			return json_encode($order_detail);
		}
		else{
			return false;
		}
	}
	public function getOrder($order_id){
		if($getOrder = Order::where('order_id',$order_id)->first()){
			return json_encode($getOrder);
		}
		else{
			return false;
		}
	}
	public function my_account(){
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
		$points = Reward_points::first()->vip_guests;
		$current_total_point = Auth::guard('customer')->user()->total_points > 0 ? Auth::guard('customer')->user()->total_points : 0;
		$vip_guests = $current_total_point < $points ? ($points - $current_total_point) : 0;
		return view('home.cart.myaccount',[
			'categorys' => $categorys,
			'vip_guests' => $vip_guests,
			'current_total_point' => $current_total_point,
		]);
	}

	public function usesCoupon(Request $req, Data $cart){
		if(isset($req->update_cart)){
			$cart->updateQuantity($req->id,$req->quantity);
			return redirect()->route('view_cart')->with('success','Cập nhật giỏ hàng thành công');
		}
		// get coupon code
		$coupon = CouponCode::where('coupon_code',$req->coupon_code)->first();
		if($coupon){
			// get rule
			$rule = CouponRule::find($coupon->rule_id);
			// get current time
			$currentTime = date('Y-m-d');
			// Check usage time
			if($rule->from_date <= $currentTime && $currentTime <=$rule->to_date){
				// check uses per coupon
				if($coupon->times_used < $rule->uses_per_coupon) {
					// check confitions
					$conditions = $rule->conditions;
					$condition_for = $rule->condition_for;
		

					$price_reduced = $rule->price_reduced;
					if($conditions == '<='){
						// if($condition_for <= $cart->total_amount){
						if($cart->total_amount <= $condition_for){
							$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();

							// check price reduced
							if (stripos($price_reduced, "%") !== false) {
								$price_reduced = str_replace('%','',$price_reduced);
								$price_reduced = $price_reduced < 100 ? ($cart->total_amount/100) * $price_reduced : 0;
								// dd($price_reduced);		    
							}
							$total_amount = $cart->total_amount - $price_reduced;

							$data_uses_coupon = [
								'total_amount' => $total_amount,
								'price_reduced' => $price_reduced,
								'coupon_code' => $coupon->coupon_code
							];
							// add total to session
							$cart->add_coupon($data_uses_coupon);
							// dd($data_uses_coupon);
							return view('home.v2.view_cart',[
								'categorys' => $categorys,
								'cart' => $cart,
								'data_uses_coupon' => $data_uses_coupon,
								'usecoupon' => 1
							]);
						}
						else {
						return redirect()->route('view_cart')->with('error','Chưa đủ điều kiện sử dụng mã!');
						}
					}
					if($conditions == '>='){
						// if($condition_for >= $cart->total_amount){
						if($cart->total_amount >= $condition_for){
							$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
							// check price reduced
							if (stripos($price_reduced, "%") !== false) {
								$price_reduced = str_replace('%','',$price_reduced);
								$price_reduced = $price_reduced < 100 ? ($cart->total_amount/100) * $price_reduced : 0;
								// dd($price_reduced);		    
							}

							$total_amount = $cart->total_amount - $price_reduced;

							$data_uses_coupon = [
								'total_amount' => $total_amount,
								'price_reduced' => $price_reduced,
								'coupon_code' => $coupon->coupon_code
							];
							// add total to session
							$cart->add_coupon($data_uses_coupon);
							// dd($data_uses_coupon);
							return view('home.cart.view_cart',[
								'categorys' => $categorys,
								'cart' => $cart,
								'data_uses_coupon' => $data_uses_coupon
							]);
						}
						else {
						return redirect()->route('view_cart')->with('error','Chưa đủ điều kiện sử dụng mã!');
						}
					}
				}
				else{
					return redirect()->route('view_cart')->with('error','Mã ưu đãi đã hết lượt sử dụng!');
				}
			}
			else{
				return redirect()->route('view_cart')->with('error','Mã ưu đãi đã hết hạn sử dụng!');
			}
				
		}
		else{
			return redirect()->route('view_cart')->with('error','Mã ưu đãi không tồn tại!');
		}
	}

	// public function customer_order_history(){
	// 	$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
	// 	$order = Order::where('order_id',100)->first();
	// 	return view('home.v2.order_history',[
	// 		'categorys' => $categorys,
	// 		'order' => $order
	// 	]);
	// }
	public function orderInformation(){
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
		$order = Order::where('order_id',100)->first();
		return view('home.v2.order_information',[
			'categorys' => $categorys,
			'order' => $order
		]);
	}
}
