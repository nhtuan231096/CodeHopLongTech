<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\NewsWork;
use App\Models\CatWork;
use App\Models\AddressWork;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class NewsWorkController extends Controller
{
    
    public function index()
    {   
        $user=User::all();
        $newswork=NewsWork::search()->orderBy('id','DESC')->paginate(5);
        $parent=NewsWork::all();
        $catwork=CatWork::search()->orderBy('id','DESC')->get();
        $addwork=AddressWork::search()->orderBy('id','DESC')->get(); 
        // dd($category);
        return view('admin.newswork.index',[
                'newswork'=>$newswork,
                'users'=>$user,
                'catwork'=>$catwork,
                'addwork'=>$addwork,
            ]);
    }
    public function postNewsWork(Request $req){
        $img='';
        $file=$req->upload_file;
        $file->move(base_path('uploads/works'),$file->getClientOriginalName());
        $img=$file->getClientOriginalName();
        $req->merge(['cover_image'=>$img]);
        $addNewsWork=NewsWork::create($req->all());
     // dd($addNewsWork);
        
        if ($addNewsWork) {
            return redirect()->route('news-work')->with('success','Thêm mới bài viết thành công');
        }
        else
        {
            return redirect()->back()->with('error','Thêm mới bài viết không thành công');
        }
    }   
    
        public function deleteNewsWork($id){
            $deleteNewsWork=NewsWork::find($id)->delete();
            if ($deleteNewsWork) 
            {
                return redirect()->back()->with('success','Xóa bài viết thành công');
            }
            else
            {
                return redirect()->back()->with('errors','Có lỗi khi xóa');
            }
        }   
    public function editNewsWork($id){
    $editNewsWork=NewsWork::find($id);
    $catwork = CatWork::all();
    $addwork = AddressWork::all();
    $users=User::all();
    return view('admin.newswork.edit',[
        'editNewsWork'=>$editNewsWork,
        'catwork'=>$catwork,
        'addwork'=>$addwork,
        'users'=>$users,
        ]);
    }
    public function postEditNewsWork($id,Request $req){
        $newswork=NewsWork::find($id);
        $img=$newswork->cover_image;
        if($req->hasFile('file_upload')){
            $file=$req->file_upload;
            $file->move(base_path('uploads/works'),$file->getClientOriginalName());
            $img=$file->getClientOriginalName();
            $req->merge(['cover_image'=>$img]);
        }
        // dd($req->all());
        $this->validate($req,[
            'name' => 'required|unique:banner,name,'.$id,
        ],[
            'name.required' => 'Tiêu đề không được để trống',
            'name.unique' => 'Tiêu đề đã tồn tại'
        ]); 
        $edit=$newswork->update($req->all());
        if ($edit) {
            return redirect()->route('news-work')->with('success','Cập nhật thành công');
        }
        else{
            return redirect()->back()->with('error','Có lỗi vui lòng thử lại'); 
        }
    }
}
 ?>