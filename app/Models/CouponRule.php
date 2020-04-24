<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class CouponRule extends Model
{
	protected $table='coupon_code_rule';
	protected $fillable=[
		'id','name','slug','description','from_date','to_date','uses_per_customer','uses_per_coupon','status','code_length','code_prefix','conditions','condition_for','price_reduced','created_by','customer_login'
	];

	public function couponCode(){
		return $this->hasMany('\App\Models\CouponCode','rule_id','id');
	}
}
 ?>