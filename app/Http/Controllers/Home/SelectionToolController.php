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
        }
        else {
            return json_encode(['errors' => 'Category not found']);
        }
    }

    public function getProductsByPartnersId(Request $req){
        $keyword_filter = $req->keyword_filter;
        $partners_id = $req->partners_id;
        $type = $req->type;
        if ( !empty($keyword_filter) ) {
            if($type == 'voltage') {
                $keyword_filter = explode("-",$keyword_filter);
                $products = SelectionToolProduct::where([
                    'partner_id' => $partners_id, 
                    'status' => 1
                ])->where('voltage','>=',$keyword_filter[0])
                    ->where('voltage','<=',$keyword_filter[1])
                    ->orderBy('sorder', 'ASC')->paginate(50);
            }

            if($type == 'sensor_input') {
                $products = SelectionToolProduct::where([
                    'partner_id' => $partners_id, 
                    'status' => 1])
                    ->where('sensor_input','like','%'.$keyword_filter.'%')
                    ->orderBy('sorder', 'ASC')->paginate(50);
            }

        } else {
            $products = SelectionToolProduct::where(['partner_id' => $partners_id, 'status' => 1])->orderBy('sorder', 'ASC')->paginate(50);
        }
        if ($products) {
            return response()->json($products, Response::HTTP_OK);
        }
        else {
            return json_encode(['errors' => 'Product not found']);
        }
    }

}
