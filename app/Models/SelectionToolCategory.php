<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
*
*/
class SelectionToolCategory extends Model
{
	protected $table='selection_tool_category';
	protected $fillable=[
		'title','slug','parent_id','sorder','status','description','content','created_by'
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

	public function getSubCategory(){
		return $this->hasMany('App\Models\SelectionToolCategory','parent_id','id')->orderByRaw('ISNULL(sorder), sorder ASC')->get();
	}

	public function getPartners(){
		return $this->hasMany('App\Models\SelectionToolPartners','category_id','id')->orderByRaw('ISNULL(sorder), sorder ASC')->get();
	}

    public function getFilter(){
        return $this->hasMany('App\Models\SelectionToolFilter','category_id','id')->limit(20)->orderByRaw('ISNULL(sorder), sorder ASC')->get();
    }
}
