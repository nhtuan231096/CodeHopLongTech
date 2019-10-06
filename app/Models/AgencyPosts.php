<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class AgencyPosts extends Model
{
	protected $table='agency_posts';
	protected $fillable=[
		'title','slug','description','content','updated_by','category_id','cover_image','status','created_by','featured_posts'
	];
	public function category(){
		return $this->hasOne('\App\Models\AgencyPostCategories','id','category_id');
	}
	public function scopeSearch($query)
		{
			if(empty(request()->title) && empty(request()->created_by) && empty(request()->status))
			{
				return $query;
			}
			if(!empty(request()->title) && empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('title','like','%'.request()->title.'%');
			}	
			if(empty(request()->title) && !empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('created_by','like','%'.request()->created_by.'%');
			}
			if(empty(request()->title) && empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('status','=',request()->status);
			}
			if(!empty(request()->title) && !empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('title','like','%'.request()->title.'%')->where('created_by','like','%'.$request()->created_by.'%');
			}
			if(!empty(request()->title) && !empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('title','like','%'.request()->title.'%')->where('created_by','like','%'.$request()->created_by.'%')->where('status','=',$request()->status);
			}
			if(empty(request()->title) && !empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('created_by','like','%'.$request()->created_by.'%')->where('status','=',$request()->status);
			}
		}
	}
