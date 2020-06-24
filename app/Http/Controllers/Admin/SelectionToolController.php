<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\SelectionToolCategory;
use App\Models\SelectionToolPartners;
use App\Models\SelectionToolProduct;
use Illuminate\Http\Request;
use Auth;
/**
* 
*/
class SelectionToolController extends Controller
{
	public function categoryIndex()
	{	
		$category = SelectionToolCategory::search()->paginate(12);
		$parent = SelectionToolCategory::where('parent_id', 0)->where('status', 1)->get();
		return view('admin.selectionTool.category.index',[
			'category' => $category,
			'parent' => $parent,
		]);
	}
	public function cateAdd(Request $req){
		if (isset($req->id)) {
			try {
				$cate=SelectionToolCategory::find($req->id);
				$this->validate($req,[
					'title' => 'required|unique:selection_tool_category,title,'.$req->id,
				],[
					'title.required' => 'Tiêu đề không được để trống',
					'title.unique' => 'Tiêu đề đã tồn tại'
				]);	
				$edit=$cate->update($req->all());
				if ($edit) {
					return redirect()->route('selectionToolCategory')->with('success','Cập nhật thành công');
				}
			} catch (\Exception $e) {
			    return redirect()->back()->with('error', $e->getMessage());
			}
		}
		try {
			SelectionToolCategory::create([
				'title' => $req->title,
				'slug' => $req->slug,
				'sorder' => $req->sorder,
				'description' => $req->description,
				'parent_id' => $req->parent_id,
				'content' => $req->content,
				'created_by' => Auth::guard('admin')->user()->username
			]);
			return redirect()->route('selectionToolCategory')->with('success','Thêm mới thành công');
		} catch (\Exception $e) {
		    return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function cateDelete(Request $req){
		$del=SelectionToolCategory::destroy($req->id);
		try {
			return redirect()->route('selectionToolCategory')->with('success','Xóa thành công');
		} catch (\Exception $e) {
		    return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function cateEdit(Request $req){
		$edit=SelectionToolCategory::find($req->id);
		$category = SelectionToolCategory::search()->paginate(12);
		$parent = SelectionToolCategory::where('parent_id', 0)->where('status', 1)->get();
		return view('admin.selectionTool.category.index',[
			'category' => $category,
			'edit' => $edit,
			'parent' => $parent,
		]);
	}



	public function partnersIndex()
	{	
		$partners = SelectionToolPartners::search()->paginate(12);
		$category = SelectionToolCategory::where('parent_id','<>',0)->where('status', 1)->get();
		return view('admin.selectionTool.partners.index',[
			'partners' => $partners,
			'category' => $category,
		]);
	}

	public function partnersAdd(Request $req){
		if (isset($req->id)) {
			try {
				$partners=SelectionToolPartners::find($req->id);
				$this->validate($req,[
					'title' => 'required|unique:selection_tool_partners,title,'.$req->id,
				],[
					'title.required' => 'Tiêu đề không được để trống',
					'title.unique' => 'Tiêu đề đã tồn tại'
				]);	
				$edit=$partners->update($req->all());
				if ($edit) {
					return redirect()->route('selectionToolPartners')->with('success','Cập nhật thành công');
				}
			} catch (\Exception $e) {
			    return redirect()->back()->with('error', $e->getMessage());
			}
		}
		try {
			SelectionToolPartners::create([
				'title' => $req->title,
				'slug' => $req->slug,
				'sorder' => $req->sorder,
				'description' => $req->description,
				'category_id' => $req->category_id,
				'created_by' => Auth::guard('admin')->user()->username
			]);
			return redirect()->route('selectionToolPartners')->with('success','Thêm mới thành công');
		} catch (\Exception $e) {
		    return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function partnersDelete(Request $req){
		$del=SelectionToolPartners::destroy($req->id);
		try {
			return redirect()->route('selectionToolPoduct')->with('success','Xóa thành công');
		} catch (\Exception $e) {
		    return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function partnersEdit(Request $req){
		$edit=SelectionToolPartners::find($req->id);
		$partners = SelectionToolPartners::search()->paginate(12);
		$category = SelectionToolCategory::where('parent_id','<>',0)->where('status', 1)->get();
		return view('admin.selectionTool.partners.index',[
			'partners' => $partners,
			'edit' => $edit,
			'category' => $category,
		]);
	}


	public function productIndex()
	{	
		$products = SelectionToolProduct::search()->paginate(12);
		$partners = SelectionToolPartners::where('status', 1)->get();
		return view('admin.selectionTool.product.index',[
			'products' => $products,
			'partners' => $partners,
		]);
	}

	public function productDelete(Request $req){
		$del=SelectionToolProduct::destroy($req->id);
		try {
			return redirect()->back()->with('success','Xóa thành công');
		} catch (\Exception $e) {
		    return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function productAdd(Request $req){
		if (isset($req->id)) {
			try {
				$partners=SelectionToolProduct::find($req->id);
				$this->validate($req,[
					'title' => 'required|unique:selection_tool_partners,title,'.$req->id,
				],[
					'title.required' => 'Tiêu đề không được để trống',
					'title.unique' => 'Tiêu đề đã tồn tại'
				]);	
				$edit=$partners->update($req->all());
				if ($edit) {
					return redirect()->route('selectionToolProduct')->with('success','Cập nhật thành công');
				}
			} catch (\Exception $e) {
			    return redirect()->back()->with('error', $e->getMessage());
			}
		}
		try {
			SelectionToolProduct::create([
				'title' => $req->title,
				'slug' => $req->slug,
				'sorder' => $req->sorder,
				'price' => $req->price,
				'description' => $req->description,
				'content' => $req->content,
				'partner_id' => $req->partner_id,
				'voltage' => $req->voltage,
				'sensor_input' => $req->sensor_input,
				'control_output1' => $req->control_output1,
				'control_output2' => $req->control_output2,
				'warning_output' => $req->warning_output,
				'special_functions' => $req->special_functions,
				'size' => $req->size,
				'accessories' => $req->accessories,
				'catalog' => $req->catalog,
				'created_by' => Auth::guard('admin')->user()->username
			]);
			return redirect()->route('selectionToolProduct')->with('success','Thêm mới thành công');
		} catch (\Exception $e) {
		    return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function productEdit(Request $req){
		$edit=SelectionToolProduct::find($req->id);
		$products = SelectionToolProduct::search()->paginate(12);
		$partners = SelectionToolPartners::where('status', 1)->get();
		return view('admin.selectionTool.product.index',[
			'edit' => $edit,
			'products' => $products,
			'partners' => $partners,
		]);
	}
}