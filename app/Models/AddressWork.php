<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class AddressWork extends Model
{
	protected $table='address';
	protected $fillable=[
		'title','created_by','status','created_at','updated_at',
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
}
 ?>