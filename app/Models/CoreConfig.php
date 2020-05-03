<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class CoreConfig extends Model
{
	protected $table='core_config';
	protected $fillable=['id','path_config','value'];
}
 ?>