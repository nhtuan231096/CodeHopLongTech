<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
*
*/
class SelectionToolFilter extends Model
{
	protected $table='selection_tool_filter_criteria';
	protected $fillable=[
		'title','category_id','sorder','status'
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
    public function detail(){
        return $this->hasMany('App\Models\SelectionToolFilterDetail','filter_criteria_id','id')->search()->orderBy('sorder','asc')->paginate(15);
    }
}
