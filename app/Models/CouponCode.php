<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class CouponCode extends Model
{
	protected $table='coupon_code';
	protected $fillable=[
		'coupon_code','times_used','rule_id','status','created_by','updated_at','apply_new_customer'
	];

	public function rule(){
		return $this->hasOne('App\Models\CouponRule','id','rule_id');
	}
}
 ?>