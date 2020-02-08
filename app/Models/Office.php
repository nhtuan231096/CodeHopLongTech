<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Office extends Model
{
	protected $table='office';
	protected $fillable=[
		'title','slug','address','email','phone','status','sorder'
	];
}
 ?>