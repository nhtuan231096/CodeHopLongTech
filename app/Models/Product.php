<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
/**
* 
*/
class Product extends Model
{
	protected $table='product';
	public $field_where = '';
	public $field_value = '';
	protected $fillable=['id','title','slug','short_description','content','sorder','feature','specifications','dimension','line_up','catalog','created_by','cover_image','meta_title','meta_description','modified_by','meta_keywords','status','price','price_when_login','warranty','promotion','category_id','product_code','download_id','is_best_seller','is_promotion','is_new_product','special_product','comment','created_at','updated_at','capacity','in_stock','discount','time_discount','image_360','video','list_price','cover_image_2','cover_image_3','cover_image_4','cover_image_5','view','actual_photo','pdp'
	];
	public function scopeDatas($query){
		return $query->select('id','price','price_when_login','title','slug','cover_image','time_discount','discount')->orderBy('id','DESC')->limit(10);
	}
	public function scopeDatas2($query){
		return $query->select('id','price','price_when_login','title','slug','cover_image','time_discount','discount')->orderBy('id','DESC')->limit(10);
	}
	public function scopeDatas3($query){
		return $query->select('id','price','price_when_login','title','slug','cover_image','time_discount','discount')->orderBy('id','DESC')->limit(10);
	}
	public function scopeDatas4($query){
		return $query->select('id','price','price_when_login','title','slug','cover_image','time_discount','discount')->orderBy('id','DESC')->limit(10);
	}

	public function scopeSearch($query)
	{
		// tool_check_product
		if(!empty(request()->tool_check_product)){
			if(request()->tool_check_product == "seo") {
				return $query->where('meta_description',null)->orwhere('meta_title',null);
			}
			if(request()->tool_check_product == "pdp") {
				return $query->where('cover_image',null)->orwhere('content',null)->orwhere('download_id',null)->orwhere('actual_photo',null);
			}
			if(request()->tool_check_product == "price") {
				return $query->where('price',null)->orwhere('list_price',null)->orwhere('price_when_login',null);
			}
		}
		// tool_check_product


		if(empty(request()->title) && empty(request()->category_id) && empty(request()->created_by) && empty(request()->status) )
		{
			return $query;
		}
		if(!empty(request()->title) && empty(request()->category_id) && empty(request()->created_by) && empty(request()->status))
		{
			// $cate = Category::where('title',request()->title)->where('status','enable');
			// if($cate->first())
			// {
			// 	$cate_id = $cate->first()->id;
			// 	dd(Product::where('category_id',$cate_id)->get());
			// 	return $query->where('title','like','%'.request()->title.'%')->orwhere('category_id',$cate_id);
			// }
			// dd($cate->first()->id);
			return $query->select('id','title','created_at','slug','category_id','created_by','status')->where('title','like','%'.request()->title.'%')->orwhere('meta_title','like','%'.request()->title.'%');
		}	
		if(!empty(request()->created_by) && empty(request()->search) && empty(request()->status) && empty(request()->category_id))
		{
			return $query->where('created_by','=',request()->created_by);
		}
		if(!empty(request()->status) && empty(request()->search) && empty(request()->created_by) && empty(request()->category_id))
		{
			return $query->where('status','=',request()->status);
		}
		if(!empty(request()->category_id) && empty(request()->status) && empty(request()->search) && empty(request()->created_by) )
		{
			return $query->where('category_id','=',request()->category_id);
		}
		if(!empty(request()->search) && !empty(request()->created_by) && empty(request()->status))
		{
			return $query->where('title','like','%'.request()->search.'%')->Where('created_by','=',request()->created_by);
		}
		if(empty(request()->search) && !empty(request()->created_by) && !empty(request()->status))
		{
			return $query->where('status','=',request()->status)->Where('created_by','=',request()->created_by);
		}
		else{
			return $query->where('status','=',request()->status)->Where('created_by','=',request()->created_by);
		}

	}
	public function category()
		{
			return $this->hasOne('\App\Models\Category','id','category_id');
		}	
	public static function getExcerpt($str, $startPos = 0, $maxLength = 50) {
		if(strlen($str) > $maxLength) {
			$excerpt   = substr($str, $startPos, $maxLength - 6);
			$lastSpace = strrpos($excerpt, ' ');
			$excerpt   = substr($excerpt, 0, $lastSpace);
			$excerpt  .= ' [...]';
		} else {
			$excerpt = $str;
		}
		
		return $excerpt;
	}
	public function tailieu(){
    return $this->hasOne('\App\Models\Download_service','id','download_id');
  }
	public function comment(){
		return $this->hasMany('\App\Models\Comment','product_id','id');
	}
	public function countComment(){
		return $this->hasMany('\App\Models\Comment','product_id','id')->where('status',1);
	}
}
 ?>