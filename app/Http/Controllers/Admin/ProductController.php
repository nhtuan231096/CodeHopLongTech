<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CsvImportRequest;
use Validator;
use Response;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProCopy;
use App\Models\Download_service;
use App\User;
use App\Contact;
use App\CsvData;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Category;
use App\Models\Quotes_product;

class ProductController extends Controller
{
     // product lrv
  public function product_lrv(){
    $products=Product::search()->orderBy('id','DESC')->paginate(15,['id','title','category_id','created_by','status']);
    $categorys=Category::orderBy('id','ASC')->get(['id','title','parent_id']);
    $user=User::all(['id','username']);
    return view('admin.product.product_lrv',[
      'products'=>$products,
      'categorys'=>$categorys,
      'users'=>$user
      ]);
  }
  public function add_product_lrv(Request $req){
      $img='';
      if ($req->hasFile('upload_file')) 
      {
        $file=$req->upload_file;
        $file->move(base_path('uploads/product'),$file->getClientOriginalName());
        $img=$file->getClientOriginalName();
        $req->merge(['cover_image'=>$img]);
        // dd($img);
      }
      $this->validate($req,[
        'title' => 'required|unique:product,title',
        'slug' => 'required|unique:product,slug',
        'category_id' => 'required',
        'meta_title' => 'max:70',
        'meta_description' => 'max:170'
        ],[
        'title.required'=>'Tên không được để trống',
        'category_id.required'=>'Bạn chưa chọn danh mục',
        'slug.required'=>'Đường dẫn không được để trống',
        'slug.unique'=>'Đường dẫn đã tồn tại',
        'title.unique'=>'Tên đã tồn tại',
        'meta_title.max' => 'Meta Title vượt quá :max ký tự',
        'meta_description.max' => 'Meta Description vượt quá :max ký tự'
        ]);
      $addProduct=Product::create($req->all());
      if ($addProduct) {
        return redirect()->route('product_lrv')->with('success','Thêm mới thành công');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }
      // dd($req->all());
  }
  public function delPro($id){
      $deletePro=Product::destroy($id);
      if ($deletePro) {
        return redirect()->route('product_lrv')->with('success','Xóa thành công');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }
  }
  public function editPro($id, Request $req){
      $pro=Product::find($id);
      $user=User::all();
      $products=Product::search()->orderBy('id','DESC')->paginate(14);
      $categorys=Category::orderBy('id','ASC')->get();
        // dd($pro->specifications);
      return view('admin.product.product_lrv',[
        'pro'=>$pro,
        'products'=>$products,
        'categorys'=>$categorys,
        'users'=>$user
        ]);
  }
  public function updatePro($id, Request $req){
    $pro=Product::find($id,['id']);
    $img=$pro->cover_image;
    if ($req->hasFile('upload_file')) 
      {
        $file=$req->upload_file;
        $file->move(base_path('uploads/product'),$file->getClientOriginalName());
        $img=$file->getClientOriginalName();
        $req->merge(['cover_image'=>$img]);
      }
        // dd($req->all());
      $this->validate($req,[
        'title' => 'required|unique:product,title,'.$id,
        'slug' => 'required|unique:product,slug,'.$id,
        'category_id' => 'required',
        'meta_title' => 'max:100',
        'meta_description' => 'max:350'
        ],[
        'title.required'=>'Tên không được để trống',
        'category_id.required'=>'Bạn chưa chọn danh mục',
        'slug.required'=>'Đường dẫn không được để trống',
        'slug.unique'=>'Đường dẫn đã tồn tại',
        'title.unique'=>'Tên đã tồn tại',
        'meta_title.max' => 'Meta Title vượt quá :max ký tự',
        'meta_description.max' => 'Meta Description vượt quá :max ký tự'
        ]);
    $update=$pro->update($req->all());
    if ($update) {
       return redirect()->back()->with('success','Cập nhật thành công');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myPost()
    {
      $cates=Category::where('status','enable')->get();
      $pros=Product::where('status','active')->paginate(10);
      // dd($pros);
      $users=User::all();
      $downs=Download_service::search()->orderBy('id','desc')->get();
     
      return view('admin.product.index',[
        'cates'=>$cates,
        'users'=>$users,
        'pros'=>$pros,
        'downs'=>$downs,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $post = Product::Where('status','active')->orWhere('status','deactive')->paginate(1);
      return response()->json($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return response()->json($request->upload_file);die;
       // return response()->json($request->all());die;

        // $this->validate($request,[
        //     'title'=>'required|unique:product,title',
        //     'slug'=>'required|unique:product,slug'
        // ],[
        //     'title.required'=>'Ten khong duoc de trong',
        //     'slug.required'=>'Duong dan khong duoc de trong',
        //     'slug.unique'=>'Duong dan da ton tai',
        //     'title.unique'=>'Ten da ton tai'
        // ]);
      $img='';
      if ($request->hasFile('upload_file')) 
      {
        dd($img);
        $file=$request->upload_file;
        $file->move(base_path('uploads/news'),$file->getClientOriginalName());
        $img=$file->getClientOriginalName();
        $request->merge(['image_cover'=>$img]);
        // dd($req->all());
      }
      $validator = \Validator::make($request->all(), [
        'title' => 'required|unique:product,title',
        'slug' => 'required|unique:product,slug',
        'category_id' => 'required',
        'meta_title' => 'max:70',
        'meta_description' => 'max:170'
        ],[
        'title.required'=>'Tên không được để trống',
        'category_id.required'=>'Bạn chưa chọn danh mục',
        'slug.required'=>'Đường dẫn không được để trống',
        'slug.unique'=>'Đường dẫn đã tồn tại',
        'title.unique'=>'Tên đã tồn tại',
        'meta_title.max' => 'Meta Title vượt quá :max ký tự',
        'meta_description.max' => 'Meta Description vượt quá :max ký tự'
        ]);

      if ($validator->fails())
      {
        return Response::json(['errors' => $validator->errors()]);
      }
      if ($validator->passes()) 
      {
        $posts = Product::create($request->all());
        return response()->json($posts);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $posts = Product::find($id)->update($request->all());
      return response()->json($posts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::find($id)->delete();
      return response()->json(['done']);
    }

    public function edit($id){
      $data = Product::find($id);
      return response()->json($data);
    }
    public function trash(){
      $posts = Product::where('status','delete')->paginate(14);
      return view('admin.product.trash',[
        'posts'=>$posts
        ]);
    }
    public function undo($id){
      $product=Product::find($id);
      if($product->status=='delete'){
        $product->status='enable';
      }
             // dd($product->status);
      $undo=$product->update();
      if ($undo) 
      {
        return redirect()->back()->with('success','Khôi phục sản phẩm thành công');
      }
      else
      {
       return redirect()->back()->with('error','Có lỗi'); 
     }

   }
   public function deletePro($id){
    $deletePro=Product::destroy($id);
    if ($deletePro) {
      return redirect()->back()->with('success','Đã xóa sản phẩm');
    }
    else
    {
      return redirect()->back()->with('error','Lỗi khi xóa');
    }
  }

  function action(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = Product::where('title', 'like', '%'.$query.'%')->get();  
   }
   $total_row = $data->count();
   if($total_row > 0)
   {
     foreach($data as $row)
     {
      $output .= '
      <tr>
       <td>'.$row->title.'</td>
       <td>'.$row->slug.'</td>
       <td>'.$row->category_id.'</td>
       <td>'.$row->created_by.'</td>
       <td>'.$row->sorder.'</td>
       <td>'.$row->status.'</td>
       <td>'.$row->created_at.'</td>
       <td>'.'<button data-toggle="modal" data-target="#edit-item" class="edit-item btn btn-info fa fa-edit"></button>'
        .'<button class="btn btn-danger fa fa-trash remove-item"></button>'.'</td>
      </tr>
      ';
    }
  }
  else
  {
   $output = '
   <tr>
    <td align="center" colspan="7">Không có dữ liệu</td>
  </tr>
  ';
}
$data = array(
 'table_data'  => $output,
 'total_data'  => $total_row
 );

echo json_encode($data);
}
}

    // controller import file csv

public function importProduct(){
  return view('admin.product.importProduct');
}
public function parseImport(CsvImportRequest $request)
{

  $path = $request->file('csv_file')->getRealPath();

  if ($request->has('header')) {
    $data = Excel::load($path, function($reader) {})->get()->toArray();
  } else {
    $data = array_map('str_getcsv', file($path));
  }

  if (count($data) > 0) {
    if ($request->has('header')) {
      $csv_header_fields = [];
      foreach ($data[1] as $key => $value) {
        $csv_header_fields[] = $key;
      }
      $csv_header_fields['pdp'] = 'pdp';
    }
    $csv_data = array_slice($data, 1, 10000);
    // dd($csv_data);

    $csv_data_file = CsvData::create([
      'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
      'csv_header' => $request->has('header'),
      'csv_data' => json_encode($data)
      ]);
  } else {
    return redirect()->back();
  }

  return view('admin.product.import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

}
public function processImport(Request $request)
{
  $data = CsvData::find($request->csv_data_file_id);
  $csv_data = json_decode($data->csv_data, true);
  unset($csv_data[0]);
  // dd($csv_data);
  $err=0;
  $succ=0;
  foreach ($csv_data as $row) {
    $contact = new Product();
    $pr=Product::where('slug',$row['slug'])->first();
    if(isset($pr)){
      $err++;
    }
    else
    {
      foreach (config('app.db_fields') as $index => $field) 
      {
      if ($data->csv_header) {
        if($field != 'pdp'){
          $contact->$field = $row[$request->fields[$field]];
        }
        if($field == 'pdp'){
          $contact->$field = 1;
        }
      } 
      else
      {
        $contact->$field = $row[$request->fields[$field]];
      }
    }
    $succ++;
    $contact->save();
    }
    
  }

  return redirect()->route('importProduct')->with('success','Import file thành công: '.$succ.' sản phẩm, Lỗi: '.$err.' sản phẩm');
}

// insert thông tin sản phẩm
public function insertProduct()
{
  $cates=Category::where('status','enable')->get();
  return view('admin.product.insert',[
    'cates'=>$cates,
   
    ]);

}
public function postInsertProduct(Request $req){
  $pros=Product::Where('category_id',$req->category_id)->get();
    // $this->validate($req,[
    //     'category_id' => 'required'
    //     ],[
    //     'category_id.required' => 'Bạn chưa chọn danh mục'
    //     ]);
        // dd($pros);
    // dd($pros); 
  if($pros->count()>0){
    $product=Product::find($pros->id);
    foreach($pros as $pro){
      if(!empty($req->contents)){
        $product->update(['contents'=>$req->contents]);
      }
      if(!empty($req->catalog)) {
        $product->update(['catalog'=>$req->catalog]);
      }
      if(!empty($req->lineup)) {
        $product->update(['lineup'=>$req->lineup]);
      } 
      else{
        return redirect()->back()->with('error','error');
      }
      
    }
    return redirect()->route('insertProduct')->with('success','Cập nhật thành công.');
    // dd($pro->contents);
  }
  else{
    return redirect()->back()->with('error','Không có sản phẩm nào trong danh mục.');
  }
}
  public function quotesProduct(){
    $quotes = Quotes_product::search()->orderBy('id','desc')->paginate(10);
    return view('admin.product.quotes',[
      'quotes' => $quotes
      ]);
  }
   // Product Angular
  public function proJson(){
    return Product::orderBy('id','DESC')->paginate(1);
  }
  public function createdby(){
    return User::paginate(1);
  }
  public function category(){
    return Category::paginate(1);
  }
  public function product_ng(){
    return view('admin.product.index-ng');
  }
  public function del_pro($id){
    Product::where('id',$id)->delete();
  }
  public function edit_pro($id){
    return Product::find($id);
  }
  public function product_update($id, Request $req){
    // dd($req->all());
        $posts = Product::find($id)->update($req->all());
        return response()->json($posts);
  }
 


  //thêm mới vào list 1
  public function ListPro1($id, Request $req){
      $pro=Product::find($id)->toArray();
      // dd($pro);
      $create=ProCopy::create($pro);
      if ($create) {
       return redirect()->back()->with('success','Bạn đã thêm mới sản phẩm cho menu 1 thành công!');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }    
  }
  public function get_ListPro1(){
    $pro_copy = ProCopy::paginate(10);
    return view('admin.product.list_pro_1',['pro_copy'=>$pro_copy]);
  }
  public function del_ListPro1($id){
      $delPro=ProCopy::destroy($id);
      if ($delPro) {
        return redirect()->route('list-pro-1')->with('success','Xóa sản phẩm thành công');
      }
      else{
        return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
      }
  }

  public function orderListPro1($id, Request $req){
      $sorder=request()->sorder > 0 ? request()->sorder : '';
      // dd($sorder);
      $order=ProCopy::find($id)->update(['sorder'=>$sorder]);
      if ($order) {
        return redirect()->route('list-pro-1')->with('success','Cập nhật thành công');
      }
      else
      {
        return redirect()->back()->with('errors','Có lỗi');
      }
  }

  public function import_price(){
    return view('admin.product.import_price');
  } 
  public function post_import_price(Request $request){
    if ($request->file('file') != null ){
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
      $data = Excel::load($path, function($reader) {})->get()->toArray();
      if (count($data) > 0) {
        if ($request->has('header')) {
          $data = array_slice($data, 0, 10000);
          $csv_header_fields = [];
          $type = $request->type;
          $val = $type == 'title' ? 'title' : 'id'; 
          // dd($val);
          foreach ($data as $key => $value) {
            $repPrice = str_replace([',','.'],'',$value['price']);
            $pr = Product::select('title','price')->where('title',$value['title'])->limit(1);
            // dd(!empty($pr));
            if(!empty($pr)){
              $pr->update(['price'=>$repPrice]);
            }
          }

          // $arrKey = [];
          // $arrPrice = [];
          // foreach ($data as $key => $value) {
          //   $repPrice = str_replace([',','.'],'',$value['price']);
          //   $arrPrice[] = $repPrice;
          //   $arrKey[] = $value['title'];
          //   // $a = Product::where($type,$value[$type])->update(['price'=>$repPrice]);
          // }
          // // $dataUpdate = array_combine($arrKey,$arrPrice);

          return redirect()->back()->with('success','Import thành công');
        }
      }
      return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
    }
    return redirect()->back()->with('error','Có lỗi vui lòng thử lại');
  }
}
