<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\CatWork;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class CatWorkController extends Controller
{
    
    public function index()
    {   
        $user=User::all();
        $catwork=CatWork::search()->orderBy('id','DESC')->paginate(10);
        // dd($catework);
        return view('admin.catwork.index',[
            'users'=>$user,
            'catwork'=>$catwork,
            ]);
    }
    public function postCatWork(Request $req){
        $addCatWork=CatWork::create($req->all());
        if ($addCatWork){
            return redirect()->route('cat-work')->with('success','Thêm mới danh mục thành công');
        }
        else
        {
            return redirect()->back()->with('error','Thêm mới danh mục không thành công');
        }
    }
    public function deleteCatWork($id){
            $deleteCatWork=CatWork::find($id)->delete();
            if ($deleteCatWork) 
            {
                return redirect()->back()->with('success','Xóa danh mục thành công');
            }
            else
            {
                return redirect()->back()->with('errors','Có lỗi khi xóa');
            }
        }

    public function editCatWork($id){
        $editCatWork=CatWork::find($id);
        return view('admin.catwork.edit',[  
            'editCatWork'=>$editCatWork
        ]);
    }
    public function postEditCatWork($id,Request $req){
        $this->validate($req,[
            'name' => 'required|min:5',
            'slug' => 'required|min:5'
        ],[
            'name.required' => 'Tiêu đề không được để trống !!',
            'name.min' => 'Tiêu đề ít nhất :min ký tự',
            'slug.min' => 'Đường dẫn tĩnh ít nhất :min ký tự',
            'slug.required' => 'Đường dẫn không được để trống',
        ]);
        $editCatWork=CatWork::find($id);
        $editCatWork->update($req->all());  
        if($editCatWork)
        {
            return redirect()->route('cat-work')->with('success','Cập nhật danh mục thành công');
        }
        else
        {
            return redirect()->route('cat-work')->with('error','Có lỗi khi cập nhật');
        }
    }
        

}
 ?>