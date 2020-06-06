<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Service2 extends Model
{
	protected $table='service_home';
	protected $fillable=[
		'title','content','cover_image','links','icons','created_by','status','created_at','updated_at',
	];
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
			// dd(request()->status);
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
	// public function catWork()
	// 	{
	// 		return $this->hasMany('\App\Models\catWork','cat_work_id','id');
	// 	}
}
 ?>