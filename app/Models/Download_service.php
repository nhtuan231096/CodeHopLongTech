<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Download_service extends Model
{
 protected $table='download_service';
 protected $fillable=[
  'id','title','slug','status','content','file_download','cover_image','category_id','type_file','type','sorder','file_download_en','file_download_jp','file_download_cn'
 ];
 public function scopeSearch($query)
 {
   if(empty(request()->search) && empty(request()->type) && empty(request()->status) && empty(request()->category_id))
   {
    return $query;
   }
   if(!empty(request()->search) && empty(request()->type) && empty(request()->status))
   {
    // dd(request()->search);
    return $query->where('title','like','%'.request()->search.'%');
   } 
   if(!empty(request()->type) && empty(request()->search) && empty(request()->status))
   {
    return $query->where('type','=',request()->type);
   }
   if(!empty(request()->category_id) && empty(request()->search) && empty(request()->status))
   {
    return $query->where('category_id','=',request()->category_id);
   }
   if(!empty(request()->status) && empty(request()->search) && empty(request()->type))
   {
    return $query->where('status','=',request()->status);
   }
   if(!empty(request()->search) && !empty(request()->type) && empty(request()->status))
   {
    return $query->where('title','like','%'.request()->search.'%')->Where('type','=',request()->type);
   }
   if(empty(request()->search) && !empty(request()->type) && !empty(request()->status))
   {
    return $query->where('status','=',request()->status)->Where('type','=',request()->type);
   }
   else{
    return $query->where('status','=',request()->status)->Where('type','=',request()->type);
   }

 if(empty(request()->category))
 {
  return $query;
 }
 else
 {
  // dd(request()->category_id);
  return $query->where('category_id','=',request()->category_id);
 } 

 }
 public function category(){
    return $this->hasOne('\App\Models\Category','id','category_id');
  }
  
}
 ?>