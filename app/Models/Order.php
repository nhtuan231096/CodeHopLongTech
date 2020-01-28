<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Order extends Model
{
	protected $table='orders';
	protected $fillable=[
		'user_id','status','name','email','address','phone','total_price','payment_method','shipping_method','vat','reduced_price','use_coupon_code','total_vat','ship_cod','shipping_fee','total_order_price'
	];

	public function order_detail(){
		return $this->hasMany('\App\Models\OrderDetail','order_id','order_id');
	}
	public function red_bill(){
		return $this->hasOne('\App\Models\RedBill','order_id','order_id');
	}
	public function scopeSearch($query)
		{
			if(empty(request()->order_id) && empty(request()->name) && empty(request()->status) && empty(request()->email))
			{
				return $query;
			}
			if(!empty(request()->order_id) && empty(request()->name) && empty(request()->status) && empty(request()->email))
			{
				return $query->where('order_id','=',request()->order_id);
			}	
			if(empty(request()->order_id) && !empty(request()->name) && empty(request()->status) && empty(request()->email))
			{
				return $query->where('name','like','%'.request()->name.'%');
			}
			if(empty(request()->order_id) && empty(request()->name) && empty(request()->status) && !empty(request()->email))
			{
				return $query->where('email','like','%'.request()->email.'%');
			}
			if(empty(request()->order_id) && empty(request()->name) && !empty(request()->status) && empty(request()->email))
			{
				return $query->where('status','=',request()->status);
			}
			if(!empty(request()->order_id) && !empty(request()->name) && empty(request()->status) && empty(request()->email))
			{
				return $query->where('order_id','=',request()->order_id)->Where('name','=',request()->name);
			}
			if(!empty(request()->order_id) && !empty(request()->name) && !empty(request()->status) && empty(request()->email))
			{
				return $query->where('order_id','=',request()->order_id)->Where('name','=',request()->name)->where('status','=',request()->status);
			}
			if(!empty(request()->order_id) && !empty(request()->name) && !empty(request()->status) && !empty(request()->email))
			{
				return $query->where('order_id','=',request()->order_id)->Where('name','=',request()->name)->where('status','=',request()->status)->where('email','like','%'.request()->email.'%');
			}
			if(empty(request()->order_id) && !empty(request()->name) && !empty(request()->status) && empty(request()->email))
			{
				return $query->Where('name','=',request()->name)->where('status','=',request()->status);
			}
			if(empty(request()->order_id) && !empty(request()->name) && !empty(request()->status) && !empty(request()->email))
			{
				return $query->Where('name','=',request()->name)->where('status','=',request()->status)->where('email','like','%'.request()->email.'%');
			}
			if(empty(request()->order_id) && empty(request()->name) && !empty(request()->status) && !empty(request()->email))
			{
				return $query->where('status','=',request()->status)->where('email','like','%'.request()->email.'%');
			}
	}
}
 