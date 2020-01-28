<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class FlashSaleProduct extends Model
{
	protected $table='flash_sale_poduct';
	protected $fillable=[
		'title','slug','quantity','sold','price','list_price','discount','cover_image','flash_sale_id','product_id','status','created_at','updated_at','category_id'
	];

	public function flashSale(){
		return $this->hasOne('\App\Models\FlashSale','id','flash_sale_id');
	}
}
 ?>