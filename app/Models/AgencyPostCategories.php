<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class AgencyPostCategories extends Model
{
	protected $table='agency_post_categories';
	protected $fillable=[
		'name','slug','status','created_by','description','cover_image','status'
	];
}
