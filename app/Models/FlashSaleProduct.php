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
		'title','slug','quantity','sold','price','list_price','discount','cover_image','flash_sale_id','product_id','status','created_at','updated_at','category_id','pdp'
	];

	public function flashSale(){
		return $this->hasOne('\App\Models\FlashSale','id','flash_sale_id');
	}
	public function category()
	{
		return $this->hasOne('\App\Models\Category','id','category_id');
	}	
	public function countRate(){
		return $this->hasMany('\App\Models\Rate','product_id','product_id')->where('status',1);
	}
	public function countComment(){
		return $this->hasMany('\App\Models\Comment','product_id','product_id')->where('status',1);
	}
}
 ?>