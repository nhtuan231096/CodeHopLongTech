<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\SelectionToolCategory;
use App\Models\SelectionToolPartners;
use App\Models\SelectionToolProduct;
use App\Models\SelectionToolFilter;
use App\Models\SelectionToolFilterDetail;
use Illuminate\Http\Request;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

/**
 *
 */
class SelectionToolController extends Controller
{
    public function categoryIndex()
    {
        $category = SelectionToolCategory::search()->paginate(12);
        $parent = SelectionToolCategory::where('status', 1)->get();
        return view('admin.selectionTool.category.index', [
            'category' => $category,
            'parent' => $parent,
        ]);
    }

    public function cateAdd(Request $req)
    {
        if (isset($req->id)) {
            try {
                $cate = SelectionToolCategory::find($req->id);
                $this->validate($req, [
                    'title' => 'required|unique:selection_tool_category,title,' . $req->id,
                ], [
                    'title.required' => 'Tiêu đề không được để trống',
                    'title.unique' => 'Tiêu đề đã tồn tại'
                ]);
                $edit = $cate->update($req->all());
                if ($edit) {
                    return redirect()->route('selectionToolCategory')->with('success', 'Cập nhật thành công');
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
            return redirect()->route('selectionToolCategory')->with('success', 'Thêm mới thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function cateDelete(Request $req)
    {
        $del = SelectionToolCategory::destroy($req->id);
        try {
            return redirect()->route('selectionToolCategory')->with('success', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function cateEdit(Request $req)
    {
        $edit = SelectionToolCategory::find($req->id);
        $category = SelectionToolCategory::search()->paginate(12);
        $parent = SelectionToolCategory::where('status', 1)->get();
        return view('admin.selectionTool.category.index', [
            'category' => $category,
            'edit' => $edit,
            'parent' => $parent,
        ]);
    }


    public function partnersIndex()
    {
        $partners = SelectionToolPartners::search()->paginate(12);
        $category = SelectionToolCategory::where('parent_id', '<>', 0)->where('status', 1)->get();
        return view('admin.selectionTool.partners.index', [
            'partners' => $partners,
            'category' => $category,
        ]);
    }

    public function partnersAdd(Request $req)
    {
        if (isset($req->id)) {
            try {
                $partners = SelectionToolPartners::find($req->id);
                $this->validate($req, [
                    'title' => 'required|unique:selection_tool_partners,title,' . $req->id,
                ], [
                    'title.required' => 'Tiêu đề không được để trống',
                    'title.unique' => 'Tiêu đề đã tồn tại'
                ]);
                $edit = $partners->update($req->all());
                if ($edit) {
                    return redirect()->route('selectionToolPartners')->with('success', 'Cập nhật thành công');
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
            return redirect()->route('selectionToolPartners')->with('success', 'Thêm mới thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function partnersDelete(Request $req)
    {
        $del = SelectionToolPartners::destroy($req->id);
        try {
            return redirect()->route('selectionToolPoduct')->with('success', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function partnersEdit(Request $req)
    {
        $edit = SelectionToolPartners::find($req->id);
        $partners = SelectionToolPartners::search()->paginate(12);
        $category = SelectionToolCategory::where('parent_id', '<>', 0)->where('status', 1)->get();
        return view('admin.selectionTool.partners.index', [
            'partners' => $partners,
            'edit' => $edit,
            'category' => $category,
        ]);
    }


    public function productIndex()
    {
        $products = SelectionToolProduct::search()->paginate(12);
        $partners = SelectionToolPartners::where('status', 1)->get();
        return view('admin.selectionTool.product.index', [
            'products' => $products,
            'partners' => $partners,
        ]);
    }

    public function productDelete(Request $req)
    {
        $del = SelectionToolProduct::destroy($req->id);
        try {
            return redirect()->back()->with('success', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function productAdd(Request $req)
    {
        if (isset($req->id)) {
            try {
                $partners = SelectionToolProduct::find($req->id);
                $this->validate($req, [
                    'title' => 'required|unique:selection_tool_partners,title,' . $req->id,
                ], [
                    'title.required' => 'Tiêu đề không được để trống',
                    'title.unique' => 'Tiêu đề đã tồn tại'
                ]);
                $edit = $partners->update($req->all());
                if ($edit) {
                    return redirect()->route('selectionToolProduct')->with('success', 'Cập nhật thành công');
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
                'attributes' => $req->attribute,
                'catalog' => $req->catalog,
                'created_by' => Auth::guard('admin')->user()->username
            ]);
            return redirect()->route('selectionToolProduct')->with('success', 'Thêm mới thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function productEdit(Request $req)
    {
        $edit = SelectionToolProduct::find($req->id);
        $products = SelectionToolProduct::search()->paginate(12);
        $partners = SelectionToolPartners::where('status', 1)->get();
        return view('admin.selectionTool.product.index', [
            'edit' => $edit,
            'products' => $products,
            'partners' => $partners,
        ]);
    }

    public function selectionToolFilter()
    {
        $category = SelectionToolCategory::where('parent_id', '<>', 0)->where('status', 1)->get();
        $filter = SelectionToolFilter::search()->paginate(12);
        return view('admin.selectionTool.filter.index', [
            'category' => $category,
            'filter' => $filter,
        ]);
    }

    public function SelectionToolAddFilter(Request $req)
    {
        $checkUnique = SelectionToolFilter::where('title', $req->title)->where('category_id', $req->category_id)->first();

        if (!empty($req->id)) {
            $data = SelectionToolFilter::find($req->id);
            if (!empty($checkUnique) && $checkUnique->id != $req->id) {
                return redirect()->back()->with('error', 'Dữ liệu đã tồn tại');
            }
            $data->update($req->all());
            return redirect()->back()->with('success', 'Cập nhật thành công');
        }

        if (!empty($checkUnique)) {
            return redirect()->back()->with('error', 'Dữ liệu đã tồn tại');
        }
        SelectionToolFilter::create($req->all());
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }

    public function selectionToolFilterDel()
    {
        $del = SelectionToolFilter::destroy(request()->id);
        try {
            return redirect()->back()->with('success', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function selectionToolFilterEdit()
    {
        $edit = SelectionToolFilter::find(request()->id);
        $filter = $edit->detail();
        $category = SelectionToolCategory::where('parent_id', '<>', 0)->where('status', 1)->get();
        return view('admin.selectionTool.filter.index', [
            'edit' => $edit,
            'filter' => $filter,
            'category' => $category,
        ]);
    }

    public function selectionToolFilterDetailAdd(Request $req)
    {
        $checkUnique = SelectionToolFilterDetail::where('value', $req->value)->where('filter_criteria_id', $req->filter_criteria_id)->first();
        if (!empty($checkUnique)) {
            return redirect()->back()->with('error', 'Dữ liệu đã tồn tại');
        }
        SelectionToolFilterDetail::create($req->all());
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }

    public function selectionToolFilterDetailDel()
    {
        $del = SelectionToolFilterDetail::destroy(request()->id);
        try {
            return redirect()->back()->with('success', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function selectionToolFilterDetailUpdate(Request $req)
    {
        try {
            $checkUnique = SelectionToolFilterDetail::where('value', $req->value)->where('filter_criteria_id', $req->filter_criteria_id)->first();
            $data = SelectionToolFilterDetail::find($req->id);

            if (!empty($checkUnique) && $checkUnique->id != $req->id) {
                return redirect()->back()->with('error', 'Dữ liệu đã tồn tại');
            }

            $edit = $data->update($req->all());
            if ($edit) {
                return redirect()->back()->with('success', 'Cập nhật thành công');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function cateImport(Request $request)
    {
        if ($request->file('file') != null) {
            $file = $request->file('file');
            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get()->toArray();
            if (count($data) > 0) {
                SelectionToolCategory::insert($data);
            }
            return redirect()->back()->with('success', 'Import thành công');
        }
    }

    public function partnersImport(Request $request)
    {
        if ($request->file('file') != null) {
            $file = $request->file('file');
            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get()->toArray();
            if (count($data) > 0) {
                SelectionToolPartners::insert($data);
            }
            return redirect()->back()->with('success', 'Import thành công');
        }
    }

    public function productImport(Request $request)
    {
        if ($request->file('file') != null) {
            $file = $request->file('file');
            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get()->toArray();
            if (count($data) > 0) {
                SelectionToolProduct::insert($data);
            }
            return redirect()->back()->with('success', 'Import thành công');
        }
    }

    public function filterImport(Request $request)
    {
        if ($request->file('file') != null) {
            $file = $request->file('file');
            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get()->toArray();
            if (count($data) > 0) {
                foreach ($data as $itemData) {
                    $filter = SelectionToolFilter::create($itemData);
                    if ($filter) {
                        $value = explode(',',$itemData['value']);
                        foreach ($value as $item) {
                            SelectionToolFilterDetail::create([
                                'filter_criteria_id' => $filter->id,
                                'value' => $item,
                            ]);
                        }
                    }
                }
            }
            return redirect()->back()->with('success', 'Import thành công');
        }
    }
}
