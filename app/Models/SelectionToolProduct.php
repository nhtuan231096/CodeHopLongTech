<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
*
*/
class SelectionToolProduct extends Model
{
	protected $table='selection_tool_product';
	protected $fillable=[
		'title','slug','price','partner_id','sorder','status','description','content','created_by','created_at','catalog','attributes'
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

	public function partners(){
		return $this->hasOne('\App\Models\SelectionToolPartners','id','partner_id')->first();
	}
}
