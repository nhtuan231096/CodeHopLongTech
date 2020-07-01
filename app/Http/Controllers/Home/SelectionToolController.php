<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use App\Models\SelectionToolCategory;
use App\Models\SelectionToolPartners;
use App\Models\SelectionToolProduct;
use App\Models\Customer;
use Auth;

/**
 *
 */
class SelectionToolController extends Controller
{

    public function getSubCategory($category_id)
    {
        $subCategory = SelectionToolCategory::where(['parent_id' => $category_id, 'status' => 1])->orderBy('sorder', 'ASC')->get();
        if ($subCategory) {
            return response()->json($subCategory, Response::HTTP_OK);
        } else {
            return json_encode(['errors' => 'Category not found']);
        }
    }

    public function getProductsFilter(Request $req)
    {
        $filter = SelectionToolProduct::select('*');
        foreach($req->data as $itemFilter) {
            if(!empty($itemFilter['name_filter'])) {
                $filter->whereJsonContains('attributes',[$itemFilter['name_filter']=>$itemFilter['value_filter']]);
            }
            if(!empty($req->partner_id)){
                $filter->where('partner_id',$req->partner_id);
            }
        }
        return $filter->limit(15)->get();

        if ($products) {
            return response()->json($products, Response::HTTP_OK);
        } else {
            return json_encode(['errors' => 'Product not found']);
        }
    }

    public function getDataFilterByCateId(Request $req)
    {
        $category_id = $req->category_id;
        $category = SelectionToolCategory::find($category_id);
        $dataFilter = $category->getFilter();
        foreach ($dataFilter as $itemFilter) {
            $itemFilter->detail = $itemFilter->detail();
        }
        return response()->json($dataFilter, Response::HTTP_OK);
    }
}
