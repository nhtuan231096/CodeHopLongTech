<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Rate extends Model
{
	protected $table='rate';
	protected $fillable=[
		'name','email','rate','content','product_id','status','cover_image'
	];

	public function product(){
		return $this->hasOne('App\Models\Product','id','product_id');
	}
	
}
 ?>