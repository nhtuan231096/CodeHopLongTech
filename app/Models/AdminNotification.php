<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class AdminNotification extends Model
{
	protected $table='admin_notification';
	protected $fillable=[
		'content','status','order_id'
	];
}
