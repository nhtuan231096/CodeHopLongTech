<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Popup extends Model
{
	protected $table='popup';
	protected $fillable=[
		'title','link','text1','text2','cover_image','status','width','height','ip'
	];
}
 ?>