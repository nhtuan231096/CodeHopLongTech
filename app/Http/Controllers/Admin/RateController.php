<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Comment;

/**
 * 
 */
class RateController extends Controller
{
	public function indexRate(){
		$data = Rate::paginate(13);
		return view('admin.rate.index_rate',[
			'rates' => $data
		]);
	}
	public function delRate(){
		$id = request()->id;
		$deleteRate = Rate::destroy($id);
		if($deleteRate) {
			return redirect()->back()->with('success','Xóa đánh giá thành công');
		}
	}
	public function updateRate(Request $req){
		if($req->status ==1 ){
			$update = Rate::find($req->id)->update(['status'=>0]);
		}
		if($req->status ==0 ){
			$update = Rate::find($req->id)->update(['status'=>1]);
		}
		return redirect()->back()->with('success','Cập nhật thành công');
	}

	
	public function indexComment(){
		if(request()->status == 0 && request()->status != null){
			$data = Comment::search()->where('id_comment_reply',null)->where('status','0')->orderBy('id','DESC')->paginate(13);
		}
		else{
			$data = Comment::search()->where('id_comment_reply',null)->orderBy('id','DESC')->paginate(13);
		}
		return view('admin.rate.index_comment',[
			'comment' => $data
		]);
	}
	public function delComment(){
		$id = request()->id;
		$deleteRate = Comment::destroy($id);
		if($deleteRate) {
			return redirect()->back()->with('success','Xóa bình luận thành công');
		}
	}
	public function updateComment(Request $req){
		if($req->status ==1 ){
			$update = Comment::find($req->id)->update(['status'=>0]);
		}
		if($req->status ==0 ){
			$update = Comment::find($req->id)->update(['status'=>1]);
		}
		return redirect()->back()->with('success','Cập nhật thành công');
	}
	public function replyComment(){
		$commentProduct = Comment::find(request()->id);
		$replyComment = Comment::where('id_comment_reply',request()->id)->get();
		return view('admin.rate.reply_comment',[
			'commentProduct' => $commentProduct,
			'replyComment'   => $replyComment
		]);
	}
	public function adminReplyComment(Request $req){
		$formatComment = strip_tags($req->comment);
		$req->merge(['comment'=>$formatComment]);
		// dd($req->all()); 
		$findComment = Comment::find($req->id_comment_reply);
		$qtyComment = $findComment->quantity_reply + 1;
		$findComment->update(['quantity_reply'=>$qtyComment]);

		$reply = Comment::create($req->all());
		if($reply){
			return redirect()->back()->with('success','Cập nhật thành công');
		}
	}
}