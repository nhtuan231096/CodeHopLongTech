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
		'id','title',' status','end_time','created_at','updated_at','cover_image'
	];

	public function products(){
		return $this->hasMany('\App\Models\FlashSaleProduct','flash_sale_id','id');
	}
}
 ?>