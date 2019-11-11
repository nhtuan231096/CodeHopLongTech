<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Terms extends Model
{
	protected $table='terms';
	protected $fillable=[
		'name','content','status','created_at','updated_at','type_terms'
	];
}
 ?>