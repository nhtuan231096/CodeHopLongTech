<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class FlashSale extends Model
{
	protected $table='flash_sale';
	protected $fillable=[
		'title',' status','end_time','created_at','updated_at'
	];
}
 ?>