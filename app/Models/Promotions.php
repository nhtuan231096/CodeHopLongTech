<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Promotions extends Model
{
	protected $table='promotions';
	protected $fillable=[
		'title','slug','links','status','updated_at'
	];
}
 ?>