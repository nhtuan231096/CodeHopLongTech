<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CouponRule;
use App\Models\CouponCode;
use App\Models\CouponLog;
use Illuminate\Support\Str;
use Auth;

/**
 * 
 */
class CouponCodeController extends Controller
{
	public function index_rule(){
		$CouponRule = CouponRule::all();
		return view('admin.coupon.index_rule',[
			'CouponRule' => $CouponRule
		]);
	}
	public function couppon_rule_add(){
		$dataRule = CouponRule::find(request()->id);
		// dd($dataRule);
		return view('admin.coupon.rule_add',[
			'dataRule' => $dataRule
		]);
	}
	public function save_couppon_rule(Request $req){
		$prefix = strlen($req->code_prefix);
		if($req->code_length < $prefix){
			return redirect()->back()->with('error','Độ dài tiền tố lớn hơn độ dài mã');
		}
		if($req->id){
			CouponRule::find($req->id)->update($req->all());
			return redirect()->route('couppon_rule')->with('success','Cập nhật thành công');
		}
		else{
			CouponRule::create($req->all());
			return redirect()->route('couppon_rule')->with('success','Thêm mới thành công');
		}
	}
	public function delRule(){
		$idRule = request()->id;
		$dataRule = CouponRule::find($idRule);
		if ($dataRule) {
			$dataRule->delete();
			return redirect()->route('couppon_rule')->with('success','Đã xóa điều kiện');
		}
		else{
			return redirect()->route('couppon_rule')->with('error','Id không tồn tại');
		}
	}


	public function index_couppon_code(){
		$CouponRule = CouponRule::where('status',1)->get();
		$CouponCode = CouponCode::paginate(10);
		return view('admin.coupon.index_coupon',[
			'CouponRule' => $CouponRule,
			'CouponCode' => $CouponCode
		]);
	} 

	public function couppon_code_add(Request $req){
		$rule = CouponRule::find($req->rule_id);
		if ($rule) {
			$code_length = $rule->code_length;
			$prefix = $rule->code_prefix;
			$code_length = $code_length - strlen($prefix);
			$coupon_code = $prefix.(Str::random($code_length));

			$generate = CouponCode::create([
				'coupon_code' => $coupon_code,
				'rule_id' => $req->rule_id,
				'status' => 1,
				'created_by' => Auth::guard('admin')->user()->username,
			]);
		if($generate){
				return redirect()->route('couppon_code')->with('success','Tạo mã thành công');
			}
		}
	}

	public function delCoupon(){
		if(request()->id){
			CouponCode::destroy(request()->id);
			return redirect()->route('couppon_code')->with('success','Xóa thành công');
		}
	}

	public function couppon_code_log(){
		$dataLog = CouponLog::search()->paginate(13);
		return view('admin.coupon.index_coupon_log',[
			'dataLog' => $dataLog
		]);
	}
}