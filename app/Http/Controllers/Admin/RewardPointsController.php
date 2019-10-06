<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Reward_points;
use Illuminate\Http\Request;
/**
* 
*/
class RewardPointsController extends Controller
{
	
	public function index()
	{	
		$data = Reward_points::first();
		return view('admin.rewardPoints.index',[
			'data' => $data
		]);
	}
	public function save(Request $req){
		if($req->id){
			Reward_points::find($req->id)->update($req->all());
			return redirect()->back()->with('success','Cập nhật thành công');
		}
		else{
			Reward_points::create($req->all());
			return redirect()->back()->with('success','Cập nhật thành công');
		}
	}
}
 ?>