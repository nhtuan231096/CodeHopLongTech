<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class SalesRep extends Model
{
	protected $table='sales_rep';
	protected $fillable=[
		'id','user_id','status','created_by','total_sales'
	];

	public function customer(){
		return $this->hasMany('\App\Models\Customer','sales_rep_id','id');
	}	

	public function user() {
		return $this->hasOne('\App\User','id','user_id');
	}
}