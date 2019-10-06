<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CatCopy;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class CategoryController extends Controller
{
	
	public function index()
	{	
		// $parents=[];
		// $parentid=Category::all();
		// for($i=1;$i<=count($parentid);$i++){
		// 	if(($parentid->parent_id)==null){
		// 		$parents=$parentid;
		// 	}
		// }
		
		$category=Category::search()->paginate(10);
		$user=User::all();
		$parent=Category::all();
		// dd($category);
		return view('admin.category.index',[
				'cates'=>$category,
				'users'=>$user,
				'parent'=>$parent
			]);
	}
	public function postCategory(Request $req){
		$img='';
		$file=$req->upload_file;
		$file->move(base_path('uploads/category'),$file->getClientOriginalName());
		$img=$file->getClientOriginalName();
		$req->merge(['cover_image'=>$img]);

	 	$img2='';
		if($req->hasFile('upload_file2')){
			$file=$req->upload_file2;
			$file->move(base_path('uploads/category'),$file->getClientOriginalName());
			$img2=$file->getClientOriginalName();
			$req->merge(['cover_image_2'=>$img2]);
		}
		// dd($req->all());
		$addCategory=Category::create($req->all());
		if ($addCategory) {
			return redirect()->route('category')->with('success','Thêm mới danh mục thành công');
		}
		else
		{
			return redirect()->back()->with('error','Thêm mới danh mục không thành công');
		}
	}
		public function deleteCategory($id){
			$deleteCate=Category::find($id)->delete();
			if ($deleteCate) 
			{
				return redirect()->back()->with('success','Xóa danh mục thành công');
			}
			else
			{
				return redirect()->back()->with('errors','Có lỗi khi xóa');
			}
		}
		public function editCategory($id){
			$parent=Category::where('status','enable')->orderBy('title','ASC')->get();
			$cate=Category::find($id);
			return view('admin.category.edit',[
				'cate'=>$cate,
				'parent'=>$parent
			]);
		}
		public function postedit($id,Request $req){
		$this->validate($req,[
			'title' => 'required|min:2',
			'slug' => 'required|min:2',
			// 'cover_image_2' => 'required|image|mimes:jpg,jpeg,png|max:590',
		],[
			'title.required' => 'Tiêu đề không được để trống !!',
			'title.min' => 'Tiêu đề ít nhất :min ký tự',
			'slug.min' => 'Đường dẫn tĩnh ít nhất :min ký tự',
			'slug.required' => 'Đường dẫn không được để trống',
			// 'cover_image_2.required' => 'Ảnh kích thước:590x250',
			// 'cover_image_2.mimes' => 'Chọn ảnh có đuôi jpg,jepg,...và kích thước:590x250',
			// 'cover_image_2.max' => 'Ảnh phải kích thước: 590x250',
		]);
		
		$editCategory=Category::find($id);
		$img=$editCategory->cover_image;
		if($req->hasFile('upload_file')) {
			$file=$req->upload_file;
			$file->move(base_path('uploads/category'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$img2='';
		if($req->hasFile('upload_file2')){
			$file=$req->upload_file2;
			$file->move(base_path('uploads/category'),$file->getClientOriginalName());
			$img2=$file->getClientOriginalName();
			$req->merge(['cover_image_2'=>$img2]);
		}
		// dd($req->all());
		$editCategory->update($req->all());	
		if($editCategory)
		{
			return redirect()->route('category')->with('success','Cập nhật danh mục thành công');
		}
		else
		{
			return redirect()->route('category')->with('error','Có lỗi khi cập nhật');
		}
	}
	public function updateCate($id, Request $req){
			$sorder=request()->sorder >= 0 ? request()->sorder : 0;
			// dd($sorder);
			$order=Category::find($id)->update(['sorder'=>$sorder]);
			if ($order) {
				return redirect()->back()->with('success','Cập nhật danh mục thành công');
			}
	}


	//sao chep danh muc 
	public function ListCat1($id, Request $req){
      $cat=Category::find($id)->toArray();
      // dd($cat);
      $create=CatCopy::create($cat);
      if ($create) {
       return redirect()->back()->with('success','Bạn đã thêm mới danh muc thành công!');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }    
  }


  public function get_ListCat1(){
  	$users=User::all();
	$parent=Category::all();
    $cat_copy = CatCopy::search()->paginate(15);
    // dd($cat_copy);
    return view('admin.category.list_cat_1',['cat_copy'=>$cat_copy,'users'=>$users,'parent'=>$parent,]);
  }
  public function del_ListCat1($id){
      $delCat=CatCopy::destroy($id);
      if ($delCat) {
        return redirect()->route('list-cat-1')->with('success','Xóa danh muc thành công');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }
  }
   public function orderListCat1($id, Request $req){
      $sorder=request()->sorder > 0 ? request()->sorder : '';
      // dd($sorder);
      $order=CatCopy::find($id)->update(['sorder'=>$sorder]);
      if ($order) {
        return redirect()->back()->with('success','Cập nhật thành công');
      }
      else
      {
        return redirect()->back()->with('errors','Có lỗi');
      }
  }

  public function SorderListCat1($id, Request $req){
      $sorder_2=request()->sorder_2 > 0 ? request()->sorder_2 : '';
      // dd($sorder);
   		
      $Sorder=CatCopy::find($id)->update(['sorder_2'=>$sorder_2]);

      // dd($Sorder);
      if ($Sorder) {
        return redirect()->back()->with('success','Cập nhật thành công');
      }
      else
      {
        return redirect()->back()->with('errors','Có lỗi');
      }
  }


  //update danh mucj moi
	public function edit_ListCat1($id){
			$parent=Category::where('status','enable')->orderBy('title','ASC')->get();
			// $sorder=CatSorder::all();
			$cate=CatCopy::find($id);
			return view('admin.category.edit_sorder',[
				'cate'=>$cate,
				'parent'=>$parent,
				// 'sorder'=>$sorder,
			]);
		}

		public function post_ListCat1($id,Request $req){
		$this->validate($req,[
			'title' => 'required|min:2',
			'slug' => 'required|min:2'
		],[
			'title.required' => 'Tiêu đề không được để trống !!',
			'title.min' => 'Tiêu đề ít nhất :min ký tự',
			'slug.min' => 'Đường dẫn tĩnh ít nhất :min ký tự',
			'slug.required' => 'Đường dẫn không được để trống',
		]);
		
		$editCategory=CatCopy::find($id);
		$img=$editCategory->cover_image;
		if($req->hasFile('upload_file')) {
			$file=$req->upload_file;
			$file->move(base_path('uploads/category'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$editCategory->update($req->all());	
		// dd($editCategory);
		if($editCategory)
		{
			return redirect()->route('list-cat-1')->with('success','Cập nhật danh mục thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi khi cập nhật');
		}
	}
}
 ?>