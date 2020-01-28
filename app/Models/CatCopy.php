<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class CatCopy extends Model
{
	protected $table='category_copy';
	protected $fillable=['title','slug','parent_id',
	'product_count','created_by','created_at','updated_at','modified_by','modified_at','description','cover_image','sorder','sorder_2','meta_title','meta_description','meta_keywords','status','breadcrumb','content','priorty',
	];

		public function scopeSearch($query)
		{
			if(empty(request()->search))
			{
				return $query;
			}
			if(!empty(request()->search))
			{
				return $query->where('sorder','like','%'.request()->search.'%');
			}		
	}
	// public function scopeSearch($query)
	// 	{
	// 		if(empty(request()->title) && empty(request()->parent_id) && empty(request()->created_by) && empty(request()->status) )
	// 	{
	// 		return $query;
	// 	}
	// 	if(!empty(request()->title) && empty(request()->parent_id) && empty(request()->created_by) && empty(request()->status))
	// 	{
	// 		return $query->where('title','like','%'.request()->title.'%');
	// 	}	
	// 	if(!empty(request()->created_by) && empty(request()->search) && empty(request()->status) && empty(request()->parent_id))
	// 	{
	// 		return $query->where('created_by','=',request()->created_by);
	// 	}
	// 	if(!empty(request()->status) && empty(request()->search) && empty(request()->created_by) && empty(request()->parent_id))
	// 	{
	// 		return $query->where('status','=',request()->status);
	// 	}
	// 	if(!empty(request()->parent_id) && empty(request()->status) && empty(request()->search) && empty(request()->created_by) )
	// 	{
	// 		return $query->where('parent_id','=',request()->parent_id);
	// 	}
	// 	if(!empty(request()->search) && !empty(request()->created_by) && empty(request()->status))
	// 	{
	// 		return $query->where('title','like','%'.request()->search.'%')->Where('created_by','=',request()->created_by);
	// 	}
	// 	if(empty(request()->search) && !empty(request()->created_by) && !empty(request()->status))
	// 	{
	// 		return $query->where('status','=',request()->status)->Where('created_by','=',request()->created_by);
	// 	}
	// 	else{
	// 		return $query->where('status','=',request()->status)->Where('created_by','=',request()->created_by);
	// 	}

	// }
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