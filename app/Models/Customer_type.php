<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Customer_type extends Model
{
	protected $table='customer_type';
	protected $fillable=[
		'name','created_by','status'
	];
}
