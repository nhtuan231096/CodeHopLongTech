<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Category extends Model
{
	protected $table='category';
	protected $fillable=[
		'title','slug','created_by','sorder','description','cover_image','cover_image_2','status','parent_id','meta_keywords','meta_description','meta_title','content','priority'
	];

	public function scopeDatasCate($query){
		return $query->select('title','slug','sorder','description','status','parent_id','meta_description','meta_title','content','priority')->orderBy('sorder','ASC')->limit(16);
	}

	public function scopeSearch($query)
		{
			if(empty(request()->search) && empty(request()->created_by) && empty(request()->status))
			{
				return $query;
			}
			if(!empty(request()->search) && empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('title','like','%'.request()->search.'%');
			}	
			if(!empty(request()->created_by) && empty(request()->search) && empty(request()->status))
			{
				return $query->where('created_by','=',request()->created_by);
			}
			if(!empty(request()->status) && empty(request()->search) && empty(request()->created_by))
			{
				return $query->where('status','=',request()->status);
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
	public function product(){
		return $this->hasMany('\App\Models\Product','category_id','id');
	}
	
	public function childs()
		{
			return $this->hasMany('\App\Models\Category','parent_id','id')->orderBy('sorder','ASC')->limit(18);
		}	
	public function childs2()
	{		
		return $this->hasMany('\App\Models\Category','parent_id','id')->where('status','enable')->orderBy('sorder','DESC')->limit(15);
	}	

}
 ?>