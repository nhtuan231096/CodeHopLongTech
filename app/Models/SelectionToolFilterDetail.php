<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
*
*/
class SelectionToolFilterDetail extends Model
{
	protected $table='selection_tool_filter_criteria_detail';
	protected $fillable=[
		'filter_criteria_id','value','sorder','status'
	];
	public function scopeSearch($query)
	{
		if(empty(request()->value))
		{
			return $query;
		}
		if(!empty(request()->value))
		{
			return $query->where('value','like','%'.request()->value.'%');
		}
	}
}
