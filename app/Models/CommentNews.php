<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class CommentNews extends Model
{
	protected $table='comment_news';
	protected $fillable=[
		'name','comment','phone','news_id','status','id_comment_reply','cover_image','quantity_reply'
	];
	public function news(){
		return $this->hasOne('\App\Models\News','id','news_id');
	}
	public function reply(){
		return $this->hasMany('\App\Models\CommentNews','id_comment_reply','id');
	}
	public function scopeSearch($query)
	{
		if(empty(request()->name) && empty(request()->status))
		{
			return $query;
		}
		if(!empty(request()->name) && empty(request()->status))
		{
			return $query->where('name','like','%'.request()->name.'%');
		}	
		if(empty(request()->search) && !empty(request()->status))
		{
			return $query->where('status','=',request()->status);
		}
		if(!empty(request()->status) && !empty(request()->name))
		{
			return $query->where('status','=',request()->status)->where('name','like','%'.request()->name.'%');
		}

	}
}
 ?>