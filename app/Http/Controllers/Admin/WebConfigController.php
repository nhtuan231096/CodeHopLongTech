<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\WebCf;
use App\Models\Popup;
use App\Models\CoreConfig;
use Illuminate\Http\Request;
/**
* 
*/
class WebConfigController extends Controller
{
	
	public function index()
	{	
		$webcf=WebCf::all();
		return view('admin.webConfig.index',[
			'webcfs'=>$webcf
			]);
	}
	public function save(Request $req){
		$save=WebCf::where('id',$req->id)->update($req->all());
		// dd($req->all());
		if($save)
		{
			return redirect()->route('webConfig')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi');
		}
	}

	public function popup(){
		$data = Popup::first();
		return view('admin.webConfig.popup',[
			'data' => $data ? $data : ""
		]);
	}
	public function savePopup(Request $req){
		$dataPopup = Popup::find($req->id);
		$img= $dataPopup ? $dataPopup->cover_image : '';
		if($req->upload_file){
			$file=$req->upload_file;
			$file->move(base_path('uploads/file_service/popup'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$data = Popup::first();
		if($data && $req->id){
			$data->update($req->all());
		}
		else{
			Popup::create($req->all());
		}
		return redirect()->back()->with('success','Cập nhật thành công');
	}
	public function config() {
		$dataConfig = CoreConfig::all();
		$data = [];
		foreach ($dataConfig as $value) {
			$cf = [$value->path_config=>$value->value];
			$data = array_merge($data,$cf);
		}
	    return view('admin.webConfig.config',[
	    	'dataConfig' => $data
	    ]);
	}
	public function configSave(Request $req){
		foreach ($req->all() as $key => $value) {
			$config = CoreConfig::where('path_config',$key);
			if ($config->count() > 0) {
				$config->first()->update([
					"path_config" => $key,
					"value" => $value
				]);
			} else {
				CoreConfig::create([
					"path_config" => $key,
					"value" => $value
				]);
			}
		}
		return redirect()->back()->with('success','Cập nhật thành công');
	}
}
 ?>