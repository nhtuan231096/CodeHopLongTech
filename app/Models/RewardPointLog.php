<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class RewardPointLog extends Model
{
	protected $table='reward_point_log';
	protected $fillable=[
		'order_id','customer_id','point','status'
	];
}
 ?>