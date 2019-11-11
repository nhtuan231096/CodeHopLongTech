<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Terms;
use App\Helper\Data;

/**
 * 
 */
class TermsController extends Controller
{
	public function index(Data $data){
		$id = isset(request()->id) ? request()->id : '';
		$data_edit = Terms::find($id);
		$datas = Terms::paginate(10);
		$type_terms = $data->type_term();
		return view('admin.terms.index',[
			'datas' => $datas,
			'type_terms' => $type_terms,
			'data_edit' => $data_edit
		]);
	}
	public function save(Request $req){
		if(isset($req->id)){
			Terms::find($req->id)->update($req->all());
			return redirect()->back()->with('success','Cập nhật thành công');
		}
		else{
			Terms::create($req->all());
			return redirect()->back()->with('success','Thêm mới thành công');
		}
	}
	public function delete(){
		if(isset(request()->id)){
			Terms::destroy(request()->id);
			return redirect()->route('terms')->with('success','Đã xóa điều khoản');
		}
	}
	
}