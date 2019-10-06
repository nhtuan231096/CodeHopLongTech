<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Helper\Data;
use App\Models\Quotes_product;
use App\Models\Product;
use App\Models\Partners;
use App\Models\Order;
/**
* 
*/
class TinymceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = "";
 
        return view('tinymce', compact('content'));
    }
}

class AdminController extends Controller
{
	function index()
	{
		$countQuotesProduct=Quotes_product::count();
		$countProducts=Product::count();
		$User=User::count();
		$Partners=Partners::count();

		$date = date('Y-m-d', time());
		$orderOfTheDay = Order::Where('created_at','like','%'.$date.'%')->get()->count();
		// dd(($orderOfTheDay));
		$countOrders = Order::All()->count();
		$countOrdersSuccess = Order::Where('status',4)->get()->count();  /*status complete = 4*/
		$sales = Order::Where('status',4)->pluck('total_price')->toArray();
		$salesTotal = 0;
		foreach ($sales as $item) {
			$zitem=filter_var($item, FILTER_SANITIZE_NUMBER_INT);
			$salesTotal += $zitem;
		}
		return view('admin.index',[
			'countQuotes'=>$countQuotesProduct,
			'User'=>$User,
			'Partners'=>$Partners,
			'countProducts'=>$countProducts,
			'orderOfTheDay'=>$orderOfTheDay,
			'countOrders'=>$countOrders,
			'countOrdersSuccess'=>$countOrdersSuccess,
			'salesTotal'=>$salesTotal,
			]);
	}
	public function login(){
		return view('admin.user.login');
	}
	public function post_login(Request $req,Data $data){
		$this->validate($req,[
			'email'=>'required|email',
			'password'=>'required'
		],[
			'email.required'=>'Email không được để trống',
			'email.email'=>'Email không đúng định dạng',
			'password.required'=>'Mật khẩu không được để trống'
		]);
		// Auth::logout();
		if(Auth::Guard('admin')->attempt($req->only('email','password'))){
			$check_customer = isset(Auth::user()->group_id) ? Auth::user()->group_id : '';
			if($check_customer != $data->customer_user_group()){
				return redirect()->route('HomeAdmin');
			}
			else{
				return redirect()->back()->with('error','Đăng nhập không thành công');
			}
		}
		else
		{
			return redirect()->back()->with('error','Tên đăng nhập hoặc mật khẩu không đúng');
		}
	}
	public function logout(){
		Auth::Guard('admin')->logout();
		return redirect()->route('login');
	}
}
 ?>