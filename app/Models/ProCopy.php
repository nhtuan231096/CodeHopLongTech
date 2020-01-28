<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class ProCopy extends Model
{
	protected $table='product_copy';
	public $field_where = '';
	public $field_value = '';
	protected $fillable=['title','slug','short_description','content','sorder','feature','specifications','dimension','line_up','catalog','created_by','cover_image','meta_title','meta_description','modified_by','meta_keywords','status','price','warranty','promotion','category_id','product_code','download_id','is_best_seller','is_promotion','is_new_product','special_product','comment','created_at','updated_at','capacity'
	];
	public function scopeDatas($query){
		return $query->select('title','slug','cover_image')->orderBy('id','DESC')->limit(10);

	}
	public function scopeSearch($query)
	{
		if(empty(request()->title) && empty(request()->category_id) && empty(request()->created_by) && empty(request()->status) )
		{
			return $query;
		}
		if(!empty(request()->title) && empty(request()->category_id) && empty(request()->created_by) && empty(request()->status))
		{
			return $query->where('title','like','%'.request()->title.'%');
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
	public function comment(){
		return $this->hasMany('\App\Models\Comment','product_id','id');
	}
}
 ?>