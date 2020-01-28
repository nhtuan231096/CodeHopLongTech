<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class NewsWork extends Model
{
	protected $table='works';
	protected $fillable=[
		'cat_work_id','add_work_id','name','cover_image','experience','education','timework','level','gender','content','salary','salary2','requirement','deadline','type','created_by','status','created_at','updated_at',
	];
	public function scopeSearch($query)
		{	//tim kieems theo dia diem
			if(!empty(request()->add_work_id) && empty(request()->search) && empty(request()->cat_work_id))
			{
				return $query->where('add_work_id','=',request()->add_work_id);
			}
			//tim kieems theo danh muc
			if(!empty(request()->cat_work_id) && empty(request()->search) && empty(request()->add_work_id))
			{
				return $query->where('cat_work_id','=',request()->cat_work_id);
			}
			//tim kieems theo search
			if(!empty(request()->search) && empty(request()->cat_work_id) && empty(request()->add_work_id))
			{
				return $query->where('name','like','%'.request()->search.'%');
			}

			//search theo dia diem va danh muc
			if(!empty(request()->cat_work_id) && !empty(request()->add_work_id) && empty(request()->search))
			{
			// dd(request()->cat_work_id);
				return $query->where('cat_work_id','=',request()->cat_work_id)->where('add_work_id','=',request()->add_work_id);
			}
			//tim kiem theo search + dia diem+ danh muc
			if(!empty(request()->add_work_id) && !empty(request()->search) && !empty(request()->cat_work_id))
			{
				return $query->where('add_work_id','=',request()->add_work_id)->where('cat_work_id','=',request()->cat_work_id)
				->where('name','like','%'.request()->search.'%');
			}

			//tim kiem theo search + dia diem
			if(!empty(request()->add_work_id) && !empty(request()->search) && empty(request()->cat_work_id))
			{
				return $query->where('add_work_id','=',request()->add_work_id)->where('name','like','%'.request()->search.'%');
			}

			//tim kiem theo search + danh muc
			if(!empty(request()->cat_work_id) && !empty(request()->search) && empty(request()->cat_work_id))
			{
				return $query->where('cat_work_id','=',request()->cat_work_id)->where('name','like','%'.request()->search.'%');
			}

	}
	
		public function catWork()
		{
			return $this->hasOne('\App\Models\CatWork','id','cat_work_id');
		}
		public function addWork()
		{
			return $this->hasOne('\App\Models\AddressWork','id','add_work_id');
		}
}
 ?>