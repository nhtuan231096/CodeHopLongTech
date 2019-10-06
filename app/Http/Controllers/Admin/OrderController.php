<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order; 
use App\Models\OrderDetail;
use App\Models\AdminNotification;
use App\Helper\Data; 
use App\Models\Reward_points;
use App\Models\Customer;
use Mail;
use App\Mail\ConfirmOrder;

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
			$reward_points = Reward_points::first();
			$formatTotalPrice = filter_var($orderDetail->total_price, FILTER_SANITIZE_NUMBER_INT);
			$points = round($formatTotalPrice/$reward_points->money, 0, PHP_ROUND_HALF_DOWN);
			
			$id_customer = $orderDetail->user_id;
			$customer = Customer::find($id_customer);
			$currentPoints = $customer->reward_points;
			$currentTotalPoints = $customer->total_points;
			$addPoints = $currentPoints + $points;
			$addTotalPoints = $currentTotalPoints + $points;

			$customer->update([
				'reward_points' => $addPoints,
				'total_points' => $addTotalPoints
			]);
	
		}
		return redirect()->back()->with('success','Cập nhật trạng thái thành công');
	}
}