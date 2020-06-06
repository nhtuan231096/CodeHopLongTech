<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class News extends Model
{
	protected $table='news';
	protected $fillable=[
		'title','slug','created_by','modified_date','modified_by','content','type','status','sorder','image_cover','meta_title','meta_description','meta_keyworks','category_id','description','created_at','updated_at',	
	];
	public function scopeSearch($query)
		{
			if(empty(request()->search))
			{
				return $query;
			}
			if(!empty(request()->search))
			{
				return $query->where('title','like','%'.request()->search.'%');
			}	
			if(!empty(request()->search) && empty(request()->created_by))
			{
				return $query->where('title','like','%'.request()->search.'%');
			}	
			// if(!empty(request()->created_by) && empty(request()->search))
			// {
			// 	return $query->where('created_by','=',request()->created_by);
			// }
			
	}
	public function Cat()
		{
			return $this->hasOne('\App\Models\News_Category','id','category_id');
		}
}
 ?>