<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class CouponLog extends Model
{
	protected $table='coupon_code_log';
	protected $fillable=[
		'coupon_code_id','coupon_code','customer','ip','updated_at','rule_id'
	];

	public function rule(){
		return $this->hasOne('App\Models\CouponRule','id','rule_id');
	}
	public function coupon(){
		return $this->hasOne('App\Models\CouponCode','id','coupon_code_id');
	}

	public function scopeSearch($query)
        {
            if(empty(request()->coupon))
            {
                return $query;
            }
            if(!empty(request()->coupon))
            {
                return $query->where('coupon_code','like','%'.request()->coupon.'%');
            }   
            
        }
}
 ?>