<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AddressWork;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class AddressWorkController extends Controller
{
    
    public function index()
    {   
        $user=User::all();
        $add=AddressWork::search()->orderBy('id','DESC')->paginate(10);
        // dd($category);
        return view('admin.addwork.index',[
                'add'=>$add,
                'users'=>$user,
            ]);
    }
    public function postAddressWork(Request $req){
        $addAddressWork=AddressWork::create($req->all());
        if ($addAddressWork) {
            return redirect()->route('address-work')->with('success','Thêm mới địa điểm thành công');
        }
        else
        {
            return redirect()->back()->with('error','Thêm mới địa điểm không thành công');
        }
    }
    public function deleteAddressWork($id){
        $deleteAddressWork=AddressWork::find($id)->delete();
        if ($deleteAddressWork) 
        {
            return redirect()->back()->with('success','Xóa địa điểm thành công');
        }
        else
        {
            return redirect()->back()->with('errors','Có lỗi khi xóa');
        }
    }
        public function editAddressWork($id){
            $addresswork=AddressWork::all();
            $addwork=AddressWork::find($id);
            return view('admin.addwork.edit',[
                'addresswork'=>$addresswork,
                'addwork'=>$addwork
            ]);
        }
        public function postEditAddressWork($id,Request $req){
        $this->validate($req,[
            'title' => 'required|min:5',
        ],[
            'title.required' => ' Địa điểm không được để trống !!',
            'title.min' => 'Địa điểm  ít nhất :min ký tự',
        ]);
        
        $editAddressWork=AddressWork::find($id);
        // dd($req->all());
        $editAddressWork->update($req->all());  
        if($editAddressWork)
        {
            return redirect()->route('address-work')->with('success','Cập nhật địa điểm thành công');
        }
        else
        {
            return redirect()->route('address-work')->with('error','Có lỗi khi cập nhật');
        }
    }
}
 ?>