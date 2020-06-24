<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class SelectionToolPartners extends Model
{
	protected $table='selection_tool_partners';
	protected $fillable=[
		'title','slug','description','status','sorder','category_id','created_by','created_at'
	];
	public function scopeSearch($query)
	{
		if(empty(request()->title))
		{
			return $query;
		}
		if(!empty(request()->title))
		{
			return $query->where('title','like','%'.request()->title.'%');
		}		
	}

	public function category(){
		return $this->hasOne('App\Models\SelectionToolCategory','id','category_id')->first();
	}
}
