<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class RedBill extends Model
{
	protected $table='red_bill';
	protected $fillable=[
		'company','tax_code','address','order_id'
	];
}
 ?>