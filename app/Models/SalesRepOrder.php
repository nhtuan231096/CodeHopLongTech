<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class SalesRepOrder extends Model
{
	protected $table='sales_rep_order';
	protected $fillable=[
		'id','sales_rep_id','customer_email','user_email','created_at','total_price'
	];
}