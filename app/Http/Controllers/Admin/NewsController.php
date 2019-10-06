<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\User;
use App\Models\News;
use App\Models\News_Category;
use App\Models\Project;
use App\Models\Promotions;
use DB;
use Illuminate\Http\Request;
/**
* 
*/
class NewsController extends Controller
{
	
	public function index()
	{
		$cates=News_Category::where('status','enable')->get();
		$news=News::search()->orderBy('id','desc')->paginate(15);
		// dd($news);
		return view('admin.news.index',[
			'news'=>$news,
			'cates'=>$cates
			]);	
	}
	public function addNews()
	{
		$cates=News_Category::where('status','enable')->get();
		return view('admin.news.add',[
			'cates'=>$cates
			]);	
	}
	public function postAddNews(Request $req){
		$img='';
		if ($req->hasFile('file_upload')) 
		{
			$file=$req->file_upload;
			$file->move(base_path('uploads/news'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['image_cover'=>$img]);
			// dd($req->all());
		}
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required|unique:news,slug',
			'category_id' => 'required',
			'content' => 'required'
			],[
			'title.required' => 'Tiêu đề không được để trống',
			'category_id.required' => 'Danh mục không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'content.required' => 'Nội dung không được để trống',
			'slug.unique' => 'Đường dẫn đã tồn tại'
			]);
		$add=News::create($req->all());
		if ($add) 
		{
			return redirect()->route('news')->with('success','Thêm thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi khi thêm mới');
		}
	}
	public function editNews($id){
		$news = News::find($id);
		$cates=News_Category::where('status','enable')->get();
		return view('admin.news.edit',[
			'news' => $news,
			'cates' => $cates
			]);
	}
	public function postEditNews($id,Request $req){
		$news = News::find($id);
		$img=$news->image_cover;
		if ($req->hasFile('file_upload')) 
		{
			$file=$req->file_upload;
			$file->move(base_path('uploads/news'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['image_cover'=>$img]);
			// dd($req->all());
		}
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required|unique:news,slug,'.$id,
			'category_id' => 'required',
			'content' => 'required'
			],[
			'title.required' => 'Tiêu đề không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'content.required' => 'Nội dung không được để trống',
			'slug.unique' => 'Đường dẫn đã tồn tại'
			]);
		$update=$news->update($req->all());
		if ($update)
		{
			return redirect()->route('news')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi cập nhật');
		}
	}
	public function deleteNews($id){
		$delete=News::find($id)->delete();
		if ($delete) {
			return redirect()->route('news')->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi khi xóa');
		}
	}

	// controller danh mục tin tức	
	public function news_category()
	{
		$cates=News_Category::where('status','enable')->get();
		$news_cate=News_Category::search()->orderBy('id','desc')->paginate(15);
		return view('admin/news_category/index',[
			'new_cates' => $news_cate,
			'cates' => $cates,
			]);
	}
	public function post_news_category(Request $req){
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required|unique:news,slug'
			],[
			'title.required' => 'Tiêu đề không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'slug.unique' => 'Đường dẫn đã tồn tại'
			]);
		$add = News_Category::create($req->all());
		if ($add) 
		{
			return redirect()->route('news_category')->with('success','Thêm thành công');
		}
		else
		{
			return redirect()->back()->with('error','Lỗi khi thêm mới');
		}
	}
	public function editCate($id){
		$cates=News_Category::where('status','enable')->get();
		$news_cate=News_Category::orderBy('id','desc')->paginate(15);
		$editCate=News_Category::find($id);
		return view('admin/news_category/index',[
			'new_cates' => $news_cate,
			'cates' => $cates,
			'editCate' => $editCate,
			]);
	}
	public function postEditCate($id,Request $req){
		$edit=News_Category::find($id)->update($req->all());
		if ($edit) {
			return redirect()->route('news_category')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi ');
		}
	}
	public function deleteCate($id){
		$del=News_Category::destroy($id);
		if ($del) {
			return redirect()->back()->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi khi xóa');
		}
	}	
	public function news_project(){
		$project = Project::all();
		return view('admin.news.project',[
			'project' => $project
			]);
	}
	public function create_project(){
		return view('admin.news.addproject');
	}
	public function post_project(Request $req){
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required',
			'content' => 'required',
			],[
			'title.required' => 'Tiêu đề không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'content.required' => 'Nội dung không được để trống'
			]);
		$project=Project::create($req->all());
		if ($project) {
			return redirect()->route('news_project')->with('success','Tạo mới thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi');		
		}

	}
	public function delProject($id){
			Project::destroy($id);
			return redirect()->route('news_project')->with('success','xóa thành công');
	}


	public function promotions(){
		return view('admin/news_category/promotions',[
			'datas' => Promotions::paginate(10)
		]);
	}
	public function savePromotions(Request $req){
		if($req->promotions){
			Promotions::where('status',1)->update(['status'=>0]);
			Promotions::find($req->promotions)->update(['status'=>1]);
			return redirect()->back()->with('success','Cập nhật thành công');
		}
		Promotions::create($req->all());
		return redirect()->back()->with('success','Tạo mới thành công');
	}
	public function delPromotion(){
		if(request()->id){
			Promotions::destroy(request()->id);
			return redirect()->back()->with('success','Xóa thành công');
		}
	}
}
 ?>