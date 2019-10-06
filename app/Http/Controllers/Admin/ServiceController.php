<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Service;
use App\Models\Office;
use Illuminate\Http\Request;
/**
* 
*/
class ServiceController extends Controller
{
	
	public function index()
	{	
		$service=Service::all();
		return view('admin.service.index',[
			'services'=>$service
			]);
	}
	public function office(){
		$offices=Office::all();
		return view('admin.service.office',[
			'offices'=>$offices
			]);
	}
	public function add(Request $req){
		$this->validate($req,[
			'title' => 'required|unique:office,title',
			'slug' => 'required|unique:office,slug',
			'address' => 'required',
			'email' => 'required|email',
			'phone' => 'required'
			],[
			'required' => 'Không được để trống',
			'title.unique' => 'Tên đã tồn tại',
			'slug.unique' => 'Đường dẫn đã tồn tại'
			]);
		$add_office=Office::create($req->all());
		if($add_office) {
			return redirect()->route('office')->with('success','Thêm mới thành công');
		}
		else{
			return redirect()->back()->with('errors','Có lỗi vui lòng thử lại');	
		}
	}
	public function delOff($id){
		$del=Office::destroy($id);
		if($del) {
			return redirect()->route('office')->with('success','Xóa thành công');
		}
	}
	public function editOff($id){
		$editOff=Office::find($id);
		$offices=Office::all();
		return view('admin.service.office',[
			'offices'=>$offices,
			'editOff'=>$editOff
			]);
	}
	public function PostEditOff($id,Request $req){
		$update = Office::find($id)->update($req->all());
		return redirect()->route('office')->with('success','Cập nhật thành công');
	}
	public function updateOffice($id,Request $req){
		$this->validate($req,[
			'sorder' => 'required'
			],[	
			'required' => 'Không được để trống'
			]);
		$sorder=request()->sorder > 0 ? request()->sorder : '';
		$update=Office::find($id)->update(['sorder'=>$sorder]);
		// dd($update);
		if ($update) {
			return redirect()->route('office')->with('success','Cập nhật thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi');
		}
	}
}
 ?>