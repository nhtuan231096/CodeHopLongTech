<?php
namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 *
 */
class Customer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'customer';
    protected $fillable = [
		'name','email','company','customer_group_id','business_areas','tax_code','phone','address','password','status','cover_image','account_type','company_type_id','reward_points','total_points','sales_rep_id','api_token'
	];
	protected $hidden = [
        'password', 'remember_token',
    ];
    public $remember_token=false;

    public function cusGroup(){
        return $this->hasOne('\App\Models\Customer_group','id','customer_group_id');
    }
    public function companyType(){
        return $this->hasOne('\App\Models\Customer_type','id','company_type_id');
    }

    public function scopeSearch($query)
        {
            if(empty(request()->name) && empty(request()->email) && empty(request()->customer_group_id))
            {
                return $query;
            }
            if(!empty(request()->name) && empty(request()->email) && empty(request()->customer_group_id))
            {
                return $query->where('name','like','%'.request()->name.'%');
            }
            if(empty(request()->name) && !empty(request()->email) && empty(request()->customer_group_id))
            {
                return $query->where('email','like','%'.request()->email.'%');
            }
            if(empty(request()->name) && empty(request()->email) && !empty(request()->customer_group_id))
            {
                return $query->where('customer_group_id',request()->customer_group_id);
            }
            if(!empty(request()->name) && !empty(request()->email) && empty(request()->customer_group_id))
            {
                return $query->where('name','like','%'.request()->name.'%')->where('email','like','%'.request()->email.'%');
            }
            if(!empty(request()->name) && !empty(request()->email) && !empty(request()->customer_group_id))
            {
                return $query->where('name','like','%'.request()->name.'%')->where('email','like','%'.request()->email.'%')->where('customer_group_id','=',request()->customer_group_id);
            }
            if(empty(request()->name) && !empty(request()->email) && !empty(request()->customer_group_id))
            {
                return $query->where('email','like','%'.request()->email.'%')->where('customer_group_id','=',request()->customer_group_id);
            }
        }
}
