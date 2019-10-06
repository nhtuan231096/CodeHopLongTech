<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Service2;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class Service2Controller extends Controller
{
	
	public function index()
	{	
		$user=User::all();
		$service2=Service2::search()->where('status','enable')->orderBy('id','DESC')->paginate(10);
		// dd($catework);
		return view('admin.service2.index',[
			'users'=>$user,
			'service2'=>$service2,
			]);
	}
	public function postService2(Request $req){
		
		$img='';
		$file=$req->upload_file;
	// dd($file);
		$file->move(base_path('uploads/service2'),$file->getClientOriginalName());
		$img=$file->getClientOriginalName();
		$req->merge(['cover_image'=>$img]);
		$addService2=Service2::create($req->all());
		if ($addService2) {
			return redirect()->route('service2')->with('success','Thêm mới bài viết thành công');
		}
		else
		{
			return redirect()->back()->with('error','Thêm mới bài viết không thành công');
		}	
	
	}

	public function deleteService2($id){
			$deleteService2=Service2::find($id)->delete();
	
			if ($deleteService2) 
			{
				return redirect()->back()->with('success','Xóa danh mục thành công');
			}
			else
			{
				return redirect()->back()->with('errors','Có lỗi khi xóa');
			}
		}

	public function editService2($id){
		$editService2=Service2::find($id);
		return view('admin.service2.edit',[	
			'editService2'=>$editService2
		]);
	}
	public function postEditService2($id,Request $req){
		$editService2=Service2::find($id);
		$img=$editService2->cover_image;
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/service2'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		// dd($req->all());
		$this->validate($req,[
			'title' => 'required|unique:service_home,title,'.$id,
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'title.unique' => 'Tiêu đề đã tồn tại'
		]);	
		$edit=$editService2->update($req->all());
		if ($edit) {
			return redirect()->route('service2')->with('success','Cập nhật thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi vui lòng thử lại');	
		}
	}
		

}
 ?>