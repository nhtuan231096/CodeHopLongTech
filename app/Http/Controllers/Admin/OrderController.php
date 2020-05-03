<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order; 
use App\Models\OrderDetail;
use App\Models\AdminNotification;
use App\Helper\Data; 
use App\User;
use App\Models\Reward_points;
use App\Models\Customer;
use App\Models\SalesRep;
use App\Models\SalesRepOrder;
use App\Models\CouponLog;
use App\Models\CouponCode;
use Mail;
use App\Mail\ConfirmOrder;
use App\Mail\OrderSuccess;

/**
 * 
 */
class OrderController extends Controller
{
	public function index(Order $order,Data $data){
		$order = Order::search()->orderBy('order_id','desc')->paginate(15);
		return view('admin.order.index',[
			'orders' => $order,
			'order_status' => $data->order_status()
		]);
	}
	public function detail($id,Data $data){
		if($id_notification = request()->id_notification){
			AdminNotification::find($id_notification)->update(['status'=>1]);
		}
		$order = Order::where('order_id',$id)->first();
		$orderDetail = OrderDetail::where('order_id',$id)->get();
		return view('admin.order.detail',[
			'order' => $order,
			'orderDetail' => $orderDetail,
			'order_status' => $data->order_status()
		]);
	}
	public function update_status($id,$stt){
		if ($stt == 2) {
			// gui mail don hang cua ban da duoc xac nhan
			$input = Order::where('order_id',$id)->first();
			$inputDetail = OrderDetail::where('order_id',$id)->get();
			$order = 
			[
				'id'=>$id,
	        	'name'=>$input["name"],
	        	'email'=>$input["email"], 
	        	'total_price'=>$input['total_price'],  
	        	'address'=>$input['address'],
	        	'phone'=>$input['phone'], 
	        	'created_at'=>$input['created_at'], 
	        	'orderDetails[]'=>$inputDetail
			];
		    Mail::to($input['email'])->send(new ConfirmOrder($order));
			// gui mail don hang cua ban da duoc xac nhan

		}

		$order = new Order;
		$orderModel = $order::Where('order_id',$id);
		$orderDetail = $orderModel->first();
		$updateStt = $orderModel->update(['status'=>$stt]);

		if($stt == 4){
			$input = Order::where('order_id',$id)->first();
			$inputDetail = OrderDetail::where('order_id',$id)->get();


			// check cong diem tai khoản
			$reward_points = Reward_points::first();
			$formatTotalPrice = filter_var($orderDetail->total_price, FILTER_SANITIZE_NUMBER_INT);
			$points = round($formatTotalPrice/$reward_points->money, 0, PHP_ROUND_HALF_DOWN);
			
			// create random password
			$char = "qwertyuiopasdfghjklmnbvcxz1234567890";
			$randomPasssWord = $this->rand_chars($char, 6);
			// create random password
			
			$id_customer = $orderDetail->user_id;
			
			$order = 
			[
				'id'=>$id,
	        	'name'=>$input["name"],
	        	'email'=>$input["email"], 
	        	'total_price'=>$input['total_price'],  
	        	'address'=>$input['address'],
	        	'phone'=>$input['phone'], 
	        	'created_at'=>$input['created_at'], 
	        	'orderDetails[]'=>$inputDetail,
	        	'reward_point' => $points,
	        	'password' => $randomPasssWord,
	        	'redeem_money' => $reward_points->redeem_money
			];

			if($id_customer) {
				$order['new_account'] = false;
				$customer = Customer::find($id_customer);
				$currentPoints = $customer->reward_points;
				$currentTotalPoints = $customer->total_points;
				$addPoints = $currentPoints + $points;
				$addTotalPoints = $currentTotalPoints + $points;
				
				$customer->update([
					'reward_points' => $addPoints,
					'total_points' => $addTotalPoints
				]);

				// check sales rep
				$this->totalSales($id, $id_customer, $input['total_price']);
				// check sales rep
			}
			//check cong diem

			if (!$id_customer) {
				$order['new_account'] = true;
				$password = bcrypt($randomPasssWord);
				Customer::create([
					"name"=>$input["name"],
					"email"=>$input["email"],
					"phone"=>$input["phone"],
					"address"=>$input["address"],
					"reward_points"=>$points,
					"total_points"=>$points,
					"password"=>$password
				]);
			} 

			// gui mail khi don hang hoan thanh
		    Mail::to($input['email'])->send(new OrderSuccess($order));
			// gui mail khi don hang hoan thanh
		}
		return redirect()->back()->with('success','Cập nhật trạng thái thành công');
	}
	// create random password
	public function rand_chars($c, $l, $u = FALSE) 
	{
		if (!$u) for ($s = '', $i = 0, $z = strlen($c)-1; $i < $l; $x = rand(0,$z), $s .= $c{$x}, $i++);
		else for ($i = 0, $z = strlen($c)-1, $s = $c{rand(0,$z)}, $i = 1; $i != $l; $x = rand(0,$z), $s .= $c{$x}, $s = ($s{$i} == $s{$i-1} ? substr($s,0,-1) : $s), $i=strlen($s));
		return $s;
	} 

	public function totalSales($order_id, $id_customer, $total_price){
		$useCouponCode = CouponLog::where('order_id',$order_id)->first();
		$couponCodeId = $useCouponCode->coupon_code_id;
		$couponCode = CouponCode::find($couponCodeId);
		$userName = $couponCode->created_by;
		$user = User::where('username',$userName)->first();
		$salesRepByUserId = SalesRep::where('user_id',$user->id);

		// log sale rep order
		$salesRepId = Customer::find($id_customer)->sales_rep_id;
		$salesRep = SalesRep::find($salesRepId);
		if($salesRep) {
			SalesRepOrder::create([
				'customer_email' => Customer::find($id_customer)->email,
				'user_email' => User::find($salesRep->user_id)->email,
				'sales_rep_id' => $salesRep->id,
				'total_price' => $total_price,
			]);
		}
		// log sale rep order
		// check customer use coupon 
		if ($salesRepByUserId->count() > 0) {
			$salesRep = $salesRepByUserId->first();
			$totalPriceSalesRep = $salesRep->total_sales;
			$total = $totalPriceSalesRep + $total_price;
			$salesRep->update(['total_sales'=>$total]);
		}
		// check customer sales rep 
		else {
			$salesRepId = Customer::find($id_customer)->sales_rep_id;
			$salesRep = SalesRep::find($salesRepId);
			$totalPriceSalesRep = $salesRep->total_sales;
			$total = $totalPriceSalesRep + $total_price;
			$salesRep->update(['total_sales'=>$total]);
		}
	
	}
}