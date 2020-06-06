<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Customer_group extends Model
{
	protected $table='customer_group';
	protected $fillable=[
		'name','discount_amount','status','updated_at','created_by'
	];
	public function scopeSearch($query)
		{
			if(empty(request()->name) && empty(request()->created_by) && empty(request()->status))
			{
				return $query;
			}
			if(!empty(request()->name) && empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('name','like','%'.request()->name.'%');
			}	
			if(empty(request()->name) && !empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('created_by','like','%'.request()->created_by.'%');
			}
			if(empty(request()->name) && empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('status',request()->status);
			}
			if(!empty(request()->name) && !empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('name','like','%'.request()->name.'%')->where('created_by','like','%'.$request()->created_by.'%');
			}
			if(!empty(request()->name) && !empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('name','like','%'.request()->name.'%')->where('created_by','like','%'.$request()->created_by.'%')->where('status','=',$request()->status);
			}
			if(empty(request()->name) && !empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('created_by','like','%'.$request()->created_by.'%')->where('status','=',$request()->status);
			}
		}
}
 ?>