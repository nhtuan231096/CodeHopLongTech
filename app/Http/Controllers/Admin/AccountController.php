<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Models\User_group;
use App\Models\Customer;
use App\Models\SalesRep;
use Illuminate\Http\Request;
/**
* 
*/
class AccountController extends Controller
{
	
	function index()
	{	
		$account=User::search()->paginate(15);
		if(Auth::Guard('admin')->user()->group_id==2){
			$account=User::where('group_id',3)->paginate(15);
		}
		$group=User_group::where('status','enable')->get();
		return view('admin.account.index',[
			'accounts' => $account,
			'groups' => $group
			]);
	}
	public function infoAccount(){
		return view('admin.account.info');
	}
	public function addAccount(Request $req){
		$this->validate($req,[
			'username' => 'required|min:4',
			'email' => 'required|unique:user,email|email',
			'fullname' => 'required',
			'password' => 'required|min:6',
			'confirmPassword' => 'same:password'
			],[
			'username.required' => 'Tên tài khoản không được để trống',
			'email.required' => 'Email không được để trống',
			'fullname.required' => 'Tên không được để trống',
			'password.required' => 'Mật khẩu không được để trống',
			'confirmPassword.same' => 'Mật khẩu không trùng khớp',
			'username.min' => 'Tên ít nhất :min ký tự',
			'email.unique' => 'Email đã tồn tại',
			'email.email' => 'Email không đúng địnhh dạng',
			'password.min' => 'Mật khẩu ít nhất :min ký tự'
			]);
		$img='';
		if($req->hasFile('upload_file')) {
			$file=$req->upload_file;
			$file->move(base_path('uploads/admin'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['avatar'=>$img]);
		}
		$password=bcrypt($req->password);
		$req->merge(['password'=>$password]);
		$req->offsetunset('confirmPassword');
		$add=User::create($req->all());
		if($add) 
		{
			return redirect()->route('account')->with('success','Tạo tài khoản thành công');
		}
		else
		{
			return redirect()->back()->with('error','Tạo tài khoản không thành công');
		}
	}
	public function deleteAccount($id){
		$delete=User::destroy($id);
		if (isset($delete)) 
		{
			return redirect()->back()->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('error','Lỗi khi xóa');
		}
	}
	public function editAccount($id){
		$account=User::find($id);
		$group=User_group::where('status','enable')->get();
		return view('admin.account.edit',[
			'account'=>$account,
			'groups'=>$group
		]);
	}
	public function postEditAccount($id,Request $req){
		$this->validate($req,[
			'username' => 'required|min:4',
			'fullname' => 'required|min:8',
			'email' => 'required|min:8|email|unique:user,email,'.$id
		],[
			'username.required' => 'Tên tài khoản không được để trống',
			'username.min' => 'Tên tài khoản ít nhất :min ký tự',
			'fullname.min' => 'Họ tên ít nhất :min ký tự',
			'email.min' => 'Email ít nhất :min ký tự',
			'fullname.required' => 'Họ tên không được để trống',
			'email.required' => 'Email không được để trống'
		]);
		$account=User::find($id);
		$img=$account->avatar;
		if($req->hasFile('upload_file')) {
			$file=$req->upload_file;
			$file->move(base_path('uploads/admin'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['avatar'=>$img]);
		}
		// dd($req->all());
		$edit=$account->update($req->all());
		if($edit) 
		{
			return redirect()->route('account')->with('success','Cập nhật tài khoản thành công');
		}
		else
		{
			return redirect()->back()->with('error','Cập nhật tài khoản không thành công');
		}
	}
	public function changePassword(Request $req){
		$pass=bcrypt($req->password);
		dd($pass);
	}

	// sales rep
	// todo
	public function salesRep(){
		$salesRep = SalesRep::all();
		return view('admin.sales_rep.index',[
			'salesRep' => $salesRep
		]);
	}
	public function newSalesRep()
	{
		$users = User::where('status','enable')->get();
		$customers = Customer::where('status',1)->get(); 
		$data = '';
		if (isset(request()->id)) {
			$data = SalesRep::find(request()->id);
			// foreach ($data->customer as $itemCus) {
			// 	dd($itemCus);
			// }
		}
		return view('admin.sales_rep.add',[
			'users' => $users,
			'customers' => $customers,
			'data' => $data
		]);
	}

	public function saveSalesRep(Request $req){

		$userSaleRep = SalesRep::where('user_id',$req->user_id);
		if (isset($req->salesRepId)) {
			Customer::where('sales_rep_id', $req->salesRepId)->update([
				'sales_rep_id' => 0
			]);
			$userSaleRep->update([
				'status'=>$req->status
			]);
		}
		$userSaleRep = $userSaleRep->first();

		if ($userSaleRep == null) {
			$userSaleRep = SalesRep::create([
				'user_id' => $req->user_id,
				'created_by' => Auth::guard('admin')->user()->username
			]);	
		}
		foreach ($req->customers as $key => $customer) {
			Customer::where('id',$customer)->update([
				'sales_rep_id' => $userSaleRep->id
			]);
		}
		return redirect()->route('sales_rep')->with('success','Cập nhật thành công');
	}
}
 ?>