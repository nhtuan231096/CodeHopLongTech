<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgencyPostCategories;
use App\Models\AgencyPosts;

/**
 * 
 */
class AgencyController extends Controller
{
	public function index_categories(){
		$data = AgencyPostCategories::paginate(13);
		return view('admin.agency.index_categories',[
			'category' => $data
		]);
	}
	public function add_category(Request $req){
		$this->validate($req,[
			'name' => 'unique:agency_post_categories,name',
			'slug' => 'unique:agency_post_categories,slug',
		],[
			'unique' => 'Danh mục hoặc đường dẫn đã tồn tại'
		]);

		$addData = AgencyPostCategories::create($req->all());
		return redirect()->back()->with('success','Thêm mới thành công');
	}
	public function delete_category($id){
		AgencyPostCategories::destroy($id);
		return redirect()->back()->with('success','Đã xóa danh mục');
	}
	public function edit_category($id){
		$data = AgencyPostCategories::paginate(15);
		$data_edit = AgencyPostCategories::find($id);
		return view('admin.agency.index_categories',[
			'category' => $data,
			'data_edit' => $data_edit
		]);
	}
	public function save_category(Request $req){
		$id = $req->id;
		$save_data = AgencyPostCategories::find($id)->update($req->all());
		return redirect()->route('agency_post_categories')->with('success','Cập nhật thành công');
	}

	public function index(){
		$data = AgencyPosts::search()->paginate(14);
		return view('admin.agency.index',[
			'datas' => $data
		]);
	}
	public function add_post(){
		$category = AgencyPostCategories::Where('status',1)->get();
		return view('admin.agency.add',[
			'category' => $category
		]);
	}
	public function add_post_data(Request $req){
		$img='';
        if ($req->hasFile('upload_cover_image')) {
	        $file=$req->upload_cover_image;
	        $file->move(base_path('uploads/posts'),$file->getClientOriginalName());
	        $img=$file->getClientOriginalName();
	        $req->merge(['cover_image'=>$img]);
        } 
		$this->validate($req,[
			'slug' => 'unique:agency_posts,slug'
		],[
			'unique' => 'Đường dẫn đã tồn tại'
		]);
		// dd($req->all());	
		$add_data = AgencyPosts::create($req->all());
		if($add_data){
			return redirect()->route('agency_posts')->with('success','Tạo bài viết thành công');
		} 	
		else{
			return redirect()->route('agency_posts')->with('error','Có lỗi vui lòng thử lại');
		}
	}
	public function delete_post_data($id){
		AgencyPosts::destroy($id);
		return redirect()->route('agency_posts')->with('success','Đã xóa bài viết');
	}
	public function edit_post_data($id){
		$category = AgencyPostCategories::Where('status',1)->get();
		$data = AgencyPosts::find($id);
		// dd($data->category_id);
		return view('admin.agency.edit',[
			'datas' =>$data,
			'category' => $category
		]);
	}
	public function edit_save_data(Request $req){
		$id = $req->id;
		$data=AgencyPosts::find($id);
		$img=$data->cover_image;
		if($req->hasFile('upload_cover_image')){
			$file=$req->upload_cover_image;
			$file->move(base_path('uploads/posts'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$save = $data->update($req->all());
		return redirect()->route('agency_posts')->with('success','Cập nhật thành công');
	}
}