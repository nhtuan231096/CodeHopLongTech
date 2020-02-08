<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Download_service;
use App\Models\Category;
use Illuminate\Http\Request;
/**
* 
*/
class DownloadController extends Controller
{
	
	public function index()
	{
		$download=Download_service::search()->orderBy('id','desc')->paginate(10);
		$cates=Category::where('status','enable')->get();
		return view('admin.download.index',[
			'downloads'=>$download,
			'cates'=>$cates,
			
			]);
	}
	public function add(Request $req){
		$img='';
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/download/file_service/large'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$this->validate($req,[
			'title' => 'required|unique:download_service,title'
		],[
			'title.required' => 'Tên tài liệu không được để trống',
			'title.unique' => 'Tên đã tồn tại',
			'cover_image.dimensions:min_width=165,min_height=180' => 'Ảnh tối phải có kích thước:180x165',
		]);
		$img2='';
		if($req->hasFile('file_upload2')){
			$file=$req->file_upload2;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$img2=$file->getClientOriginalName();
			$req->merge(['file_download'=>$img2]);
		}
		$imgen='';
		if($req->hasFile('file_upload_en')){
			$file=$req->file_upload_en;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$imgen=$file->getClientOriginalName();
			$req->merge(['file_download_en'=>$imgen]);
		}
		$imgjp='';
		if($req->hasFile('file_upload_jp')){
			$file=$req->file_upload_jp;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$imgjp=$file->getClientOriginalName();
			$req->merge(['file_download_jp'=>$imgjp]);
		}
		$imgcn='';
		if($req->hasFile('file_upload_cn')){
			$file=$req->file_upload_cn;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$imgcn=$file->getClientOriginalName();
			$req->merge(['file_download_cn'=>$imgcn]);
		}

		$add = Download_service::create($req->all());

		if ($add) {
			return redirect()->route('download')->with('success','Thêm mới thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi khi thêm mới');
		}		
	}
	
	public function editDownload($id){
		$edit=Download_service::find($id);
		$download=Download_service::orderBy('id','desc')->paginate(10);
		$cates=Category::where('status','enable')->get();
		return view('admin.download.index',[
			'downloads'=>$download,
			'cates'=>$cates,
			'edit'=>$edit
			]);
	}
	public function PostEditDownload($id, Request $req){
		$download=Download_service::find($id);
		$img=$download->cover_image;
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/download/file_service/large'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}

		$img2=$download->file_download;
		if($req->hasFile('file_upload2')){
			$file=$req->file_upload2;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$img2=$file->getClientOriginalName();
			$req->merge(['file_download'=>$img2]);
		}
		$imgen=$download->file_download_en;
		if($req->hasFile('file_upload_en')){
			$file=$req->file_upload_en;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$imgen=$file->getClientOriginalName();
			$req->merge(['file_download_en'=>$imgen]);
		}
		$imgjp=$download->file_download_jp;
		if($req->hasFile('file_upload_jp')){
			$file=$req->file_upload_jp;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$imgjp=$file->getClientOriginalName();
			$req->merge(['file_download_jp'=>$imgjp]);
		}
		$imgcn=$download->file_download_cn;
		if($req->hasFile('file_upload_cn')){
			$file=$req->file_upload_cn;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$imgcn=$file->getClientOriginalName();
			$req->merge(['file_download_cn'=>$imgcn]);
		}
		$this->validate($req,[
			'title' => 'required|unique:download_service,title,'.$id,
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'title.unique' => 'Tiêu đề đã tồn tại'
		]);
		$edit = $download->update($req->all());
		if ($edit) {
			return redirect()->route('download')->with('success','Cập nhật thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi khi thêm mới');
		}
	}
	public function delete($id){
		$delete = Download_service::find($id)->delete();
		if ($delete) {
			return redirect()->route('download')->with('success','Xóa thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi khi xóa');
		}
	}
	public function updateDownload($id, Request $req){
			$sorder=request()->sorder > 0 ? request()->sorder : '';
			// dd($sorder);
			$order=Download_service::find($id)->update(['sorder'=>$sorder]);
			if ($order) {
				return redirect()->route('download')->with('success','Cập nhật  thành công');
			}
	}

}
 ?>