<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Banner;
use Illuminate\Http\Request;
/**
* 
*/
class BannerController extends Controller
{
	
	public function index()
	{	
		$banner = Banner::all();
		return view('admin.banner.index',[
			'banners'=>$banner
			]);
	}
	public function add(Request $req){
		$this->validate($req,[
			'name'=>'required'
			],[
			'name.required'=>'Tiêu đề không được để trống'
			]);
	    $img='';
        if ($req->hasFile('file_upload')) {
	        $file=$req->file_upload;
	        $file->move(base_path('uploads/banner'),$file->getClientOriginalName());
	        $img=$file->getClientOriginalName();
	        $req->merge(['cover_image'=>$img]);
        } 
		$add=Banner::create($req->all());
		if ($add) {
			return redirect()->route('banner')->with('success','Thêm mới thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi vui lòng thử lại');	
		}
	}
	public function delBanner($id){
		$del=Banner::destroy($id);
		if ($del) {
			return redirect()->route('banner')->with('success','Xóa thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi vui lòng thử lại');	
		}
	}
	public function editBanner($id){
		$edit=Banner::find($id);
		$banner = Banner::all();
		return view('admin.banner.index',[
			'banners'=>$banner,
			'edit'=>$edit
			]);
	}
	public function PeditBanner($id,Request $req){
		$banner=Banner::find($id);
		$img=$banner->cover_image;
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/banner'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$this->validate($req,[
			'name' => 'required|unique:banner,name,'.$id,
		],[
			'name.required' => 'Tiêu đề không được để trống',
			'name.unique' => 'Tiêu đề đã tồn tại'
		]);	
		$edit=$banner->update($req->all());
		if ($edit) {
			return redirect()->route('banner')->with('success','Cập nhật thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi vui lòng thử lại');	
		}
	}
	public function updateBanner($id, Request $req){
			$sorder=request()->sorder > 0 ? request()->sorder : '';
			// dd($sorder);
			$order=Banner::find($id)->update(['sorder'=>$sorder]);
			if ($order) {
				return redirect()->route('banner')->with('success','Cập nhật thành công');
			}
	}
}
 ?>