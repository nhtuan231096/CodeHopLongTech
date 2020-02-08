<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Reward_points extends Model
{
	protected $table='reward_points';
	protected $fillable=[
		'point','money','redeem_money','vip_guests'
	];
}
 ?>