<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Agency;
use App\Models\Category;
use App\Models\Download_service;
use App\Models\Product;
use App\Models\Banner;
use App\Models\News;
use App\Models\News_Category;
use App\Models\ProCopy;
use App\Models\CatCopy;
use App\Models\Partners;
use App\Models\Office;
use App\Models\Support;
use App\Models\Comment;
use App\Models\Quotes_product;
use App\Models\CV;
use App\Models\CatWork;
use App\User;
use App\Helper\Data;
use App\Models\Customer;
// use App\Models\Partners;
use App\Models\AddressWork;
use App\Models\NewsWork;
use App\Models\Service2;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Mail;
use View;
use App\Models\Conf_home_page;
use App\Models\AgencyPosts;
use App\Models\AgencyPostCategories;
use App\Models\Customer_type;
use App\Models\Terms;
use App\Models\Rate;
use App\Mail\ForgotPassword;
use PDF;

class HomeController extends Controller
{
	public function __construct(){
		$this->middleware(function ($request, $next){
			$custome_type = Customer_type::where('status',1)->get();
			view()->share([
				'custome_type' => $custome_type,
				'cart' => new Data()
			]);
        	return $next($request); 
		});
	}
	public function index(){
		$slider_active=Slider::where(['sorder'=>'1','type'=>0])->first();
		$slider_home=Slider::limit(6)->where(['status'=>'enable','type'=>0])->where('sorder','<>',1)->orderBy('sorder','ASC')->get();
		$company_news=News::limit(3)->where('category_id','42')->orderBy('id','DESC')->get();
		$office=Office::where('status','enable')->orderBy('sorder','ASC')->get();
		$actoffice=Office::where('sorder','1')->first();
		$partner=Partners::where('status','enable')->orderBy('sorder','DESC')->get();
		$img_company=News::where('category_id','44')->latest()->paginate(8);
		$news_service=Service2::limit(6)->where('status','enable')->orderBy('id','ASC')->get();
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		$conf = Conf_home_page::all()->first();
		return view('home.index_1',[
			'active'=>$slider_active,
			'slider_homes'=>$slider_home,
			'actoffice'=>$actoffice,
			'company_news'=>$company_news,
			'offices'=>$office,
			'partners'=>$partner,
			'img_companys'=>$img_company,
			'news_service'=>$news_service,
			'supports'=>$supports,
			'sp'=>$sp,	
			'conf' => $conf
		]);
	}

	public function index_product(){
		// $a = new Data;
		// dd($a->DiscountAmount());
		//toi uu
		// Cache::flush();
		
		$pro = (new Product())->datas();
		$pro2 = (new Product())->datas2();
		$pro3 = (new Product())->datas3();
		$pro4 = (new Product())->datas4();
		$slider=Slider::orderBy('sorder','ASC')->where(['status'=>'enable','type'=>1])->get();
		$banners=Banner::limit(5)->get();

		$categorys=Category::limit(16)->where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->get();
		
		$parent_categorys=Category::limit(16)->where(['parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->get();

		// $best_seller = Cache::remember('best_seller',1*60,function() use($pro){
		// 	return $pro->where('is_best_seller','enable')->get();
		// });
		$best_seller = $pro->where('is_best_seller','enable')->get();

		// $new_product = Cache::remember('new_product',1*60,function() use($pro2){
		// 	return $pro2->where('is_new_product','enable')->get();
		// });
		$new_product = $pro2->where('is_new_product','enable')->get();

		// $promotion = Cache::remember('promotion',1*60,function() use($pro3){
		// 	return $pro3->where('is_promotion','enable')->get();
		// });
		$promotion = $pro3->where('is_promotion','enable')->get();

		// $special_product = Cache::remember('special_product',1*60,function() use($pro4){
		// 	return $pro4->where('special_product','enable')->get();
		// });
		$special_product = $pro4->where('special_product','enable')->get();

		// $company_news = Cache::remember('company_news',1*60,function() use($pro){
		// 	return $pro->where('category_id','35')->get();
		// });	
		$company_news = $pro->where('category_id','35')->get();

		$cat_copy = CatCopy::orderBy('sorder_2','ASC')->get();	
		$pro_copy = ProCopy::all();	
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		$partners=Partners::where('status','enable')->orderBy('sorder','DESC')->get();
		$banner_top=News::limit(4)->where(['status'=>'enable','category_id'=>'41'])->get();

		$date = Carbon::now()->toDateTimeString();
		return view('home.index',[
			'sliders'=>$slider,
			'banners'=>$banners,
			'categorys'=>$categorys,
			'categorys1'=>$parent_categorys,
			'best_seller'=>$best_seller,
			'new_products'=>$new_product,
			'special_products'=>$special_product,
			'promotions'=>$promotion,
			'news'=>$company_news,
			'partners'=>$partners,
			'supports'=>$supports,
			'sp'=>$sp,
			'banner_top'=>$banner_top,
			'pro_copy'=>$pro_copy,
			'cat_copy'=>$cat_copy,
			'date'=>$date,
			]);
	}
	public function viewCate($slug,Request $req) {
		$pro2 = (new Product())->datas2();
			$categorys1=Category::where(['parent_id'=>0,'status'=>'enable'])->orderBy('sorder','DESC')->paginate(26);
			$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
			$new_product=Product::paginate(10)->Where('is_new_product','create')->where('status','enable');
			$partners=Partners::Where('status','enable')->orderBy('sorder','DESC')->get();;
			$category= Category::where('slug',$slug)->first();
			$product= Product::where('slug',$slug)->first();
			$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
			$sp=Support::limit(10)->Where(['status'=>'enable','type'=>'business'])->get();
			//sản phẩm khác
			$others=Product::paginate(8)->where('category_id','<>','$id');
			// $categorys=Category::orderBy('sorder','ASC')->paginate(10)->Where('parent_id','parent');
			if($category)
			{	$cate=Category::where('parent_id',$category->id)->paginate(15);
				$products=Product::where('category_id',$category->id)->paginate(15);
				// dd($products);
				return view('home.product-category',
					['category'=>$category,
					'categorys'=>$categorys,
					'partners'=>$partners,
					'supports'=>$supports,
					'sp'=>$sp,
					'cate'=>$cate,
					'products' => $products,
					'categorys1'=>$categorys1
					]);
			}
			// if($product)
			// {
			// 	$new_product = Cache::remember('new_product',1*60,function() use($pro2){
			// 		return $pro2->where('is_new_product','enable')->get();
			// 	});
			// 	$comment=Comment::orderBy('id','DESC')->where('status',1)->where('product_id',$product->id)->where('id_comment_reply',null)->paginate(5);
			// 	$sames=Product::where('category_id',$product->category_id)->where('id','<>','$product->id')->where('status','enable')->paginate(8);
			// 	$rates=Rate::where('status',1)->where('product_id',$product->id)->paginate(4);
			// 	$countRates=Rate::where('status',1)->where('product_id',$product->id)->count();
			// 	$countRate1=Rate::where('status',1)->where('product_id',$product->id)->where('rate',1)->count();
			// 	$countRate2=Rate::where('status',1)->where('product_id',$product->id)->where('rate',2)->count();
			// 	$countRate3=Rate::where('status',1)->where('product_id',$product->id)->where('rate',3)->count();
			// 	$countRate4=Rate::where('status',1)->where('product_id',$product->id)->where('rate',4)->count();
			// 	$countRate5=Rate::where('status',1)->where('product_id',$product->id)->where('rate',5)->count();
			// 	$percentRated = (($countRate5*5)+($countRate4*4)+($countRate3*3)+($countRate2*2)+($countRate1*1))/5;
			// 	// dd($rates->count());
			// 	return view('home.pro-detail',[
			// 		'product'=>$product,
			// 		'others'=>$others,
			// 		'partners'=>$partners,
			// 		'categorys'=>$categorys,
			// 		'new_products'=>$new_product,
			// 		'supports'=>$supports,
			// 		'comments'=>$comment,
			// 		'sp'=>$sp,
			// 		'sames'=>$sames,
			// 		'categorys1'=>$categorys1,
			// 		'rates'=>$rates,
			// 		'countRates'=>$countRates,
			// 		'countRate1'=>$countRate1,
			// 		'countRate2'=>$countRate2,
			// 		'countRate3'=>$countRate3,
			// 		'countRate4'=>$countRate4,
			// 		'countRate5'=>$countRate5,
			// 		]);
			// }
			else
			{
				return view('errors.404');
			}
	}
	public function view($slug, Request $req)
		{
			$pro2 = (new Product())->datas2();
			$categorys1=Category::where(['parent_id'=>0,'status'=>'enable'])->orderBy('sorder','DESC')->paginate(26);
			$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(18);
			$new_product=Product::paginate(10)->Where('is_new_product','create')->where('status','enable');
			$partners=Partners::Where('status','enable')->orderBy('sorder','DESC')->get();;
			$category= Category::where('slug',$slug)->first();
			$product= Product::where('slug',$slug)->first();
			$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
			$sp=Support::limit(10)->Where(['status'=>'enable','type'=>'business'])->get();
			//sản phẩm khác
			$others=Product::paginate(8)->where('category_id','<>','$id');
			// $categorys=Category::orderBy('sorder','ASC')->paginate(10)->Where('parent_id','parent');
			// if($category)
			// {	$cate=Category::where('parent_id',$category->id)->paginate(15);
			// 	$products=Product::where('category_id',$category->id)->paginate(15);
			// 	// dd($products);
			// 	return view('home.product-category',
			// 		['category'=>$category,
			// 		'categorys'=>$categorys,
			// 		'partners'=>$partners,
			// 		'supports'=>$supports,
			// 		'sp'=>$sp,
			// 		'cate'=>$cate,
			// 		'products' => $products,
			// 		'categorys1'=>$categorys1
			// 		]);
			// }
			if($product)
			{
				$view = $product->view + 1;
				$product->update(['view'=>$view]);
				$new_product = Cache::remember('new_product',1*60,function() use($pro2){
					return $pro2->where('is_new_product','enable')->get();
				});
				$comment=Comment::orderBy('id','DESC')->where('status',1)->where('product_id',$product->id)->where('id_comment_reply',null)->paginate(5);
				$sames=Product::where('category_id',$product->category_id)->where('id','<>','$product->id')->where('status','enable')->paginate(8);
				$rates=Rate::where('status',1)->where('product_id',$product->id)->paginate(4);
				$countRates=Rate::where('status',1)->where('product_id',$product->id)->count();
				$countRate1=Rate::where('status',1)->where('product_id',$product->id)->where('rate',1)->count();
				$countRate2=Rate::where('status',1)->where('product_id',$product->id)->where('rate',2)->count();
				$countRate3=Rate::where('status',1)->where('product_id',$product->id)->where('rate',3)->count();
				$countRate4=Rate::where('status',1)->where('product_id',$product->id)->where('rate',4)->count();
				$countRate5=Rate::where('status',1)->where('product_id',$product->id)->where('rate',5)->count();
				$average = $countRate5 + $countRate4 + $countRate3 + $countRate2 + $countRate1;
				$average = $average == 0 ? 1 : $average;
				// dd($average);
				$percentRated = (($countRate5*5)+($countRate4*4)+($countRate3*3)+($countRate2*2)+($countRate1*1))/$average;
				// dd($percentRated/$average);
				return view('home.pro-detail',[
					'product'=>$product,
					'others'=>$others,
					'partners'=>$partners,
					'categorys'=>$categorys,
					'new_products'=>$new_product,
					'supports'=>$supports,
					'comments'=>$comment,
					'sp'=>$sp,
					'sames'=>$sames,
					'categorys1'=>$categorys1,
					'rates'=>$rates,
					'countRates'=>$countRates,
					'countRate1'=>$countRate1,
					'countRate2'=>$countRate2,
					'countRate3'=>$countRate3,
					'countRate4'=>$countRate4,
					'countRate5'=>$countRate5,
					'percentRated'=>$percentRated
					]);
			}
			else
			{
				return view('errors.404');
			}
		}
	public function comment(Request $req){
		$img='';
		$file=$req->upload_file;
		if($file) { 
			$file->move(base_path('uploads/comment'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		if(!$req->comment){
			return redirect()->back()->with('error','Vui lòng nhập nội dung bình luận');
		}
		$comment = Comment::create($req->all());
		return redirect()->back()->with('success','Bình luận của bạn đã được gửi');
	}
	
	public function send_mail(Request $req){
		$input = $req->all();
		$quotes=Quotes_product::create($input);
        Mail::send('mail', array(
        	'id'=>$quotes->id,
        	'name'=>$input["name"],
        	'email'=>$input["email"], 
        	'content'=>$input['content'],  
        	'product'=>$input['product'],
			'product_id'=>$input['product_id'], 
        	'phone'=>$input['phone']), 
        function($message){
	        // $message->from(email, 'Hoplongtech');
	        $message->to('info@hoplongtech.com.vn', 'Hoplongtech')->subject('Yêu cầu báo giá sản phẩm');
	    });
	    $slug = $input['slug'];
        Session::flash('flash_message', 'Send message successfully!');
		return redirect()->route('view',['slug'=>$slug])->with('success','Yêu cầu báo giá thành công');	
		// $req->session()->flash('success', 'Tạo bài viết thành công!')	
	}


	public function confirm($id){
		$supports=Support::Where('status','enable')->Where('type','technical')->paginate(10);
		$sp=Support::Where('status','enable')->Where('type','business')->paginate(10);
		$confirm=Quotes_product::find($id);
		$confirm->update(['status'=>1]);
		return view('home.confirm_pro',[
			'supports'=>$supports,
			'sp'=>$sp
			]);
	}
	public function project(){
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		// $categorys=Category::orderBy('sorder','ASC')->Where('parent_id','parent')->get();
		 $categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$project = News::where('category_id','33')->orderBy('id','DESC')->paginate(18);
		$nproject = News::where('category_id','33')->orderBy('id','DESC')->paginate(10);
		return view('home.project',[
			'project' => $project,
			'nproject' => $nproject,
			'categorys' => $categorys,
			'supports' => $supports,
			'sp' => $sp,
			]);
	}
	public function detail_project($slug){
		$news=News::where('slug',$slug)->first();
		$new2=News::where('category_id',34)->orderBy('id','DESC')->paginate(12);
		$new= News::where('type','project')->orderBy('id','DESC')->paginate(9);
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		// $categorys=Category::orderBy('sorder','ASC')->Where('parent_id','parent')->get();
		 $categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		 $related=News::where('category_id',$news->category_id)->where('slug','<>','$news->slug')->latest()->get();
	 	$tintuc= News::where('slug',$slug)->first();
		$office=Office::where('status','enable')->get();
		$actoffice=Office::where('sorder','1')->first();
		$relate=News::where('category_id',$tintuc->category_id)->where('slug','<>','$tintuc->slug')->latest()->get();
		return view('home.detail_project',[
			'news_project'=>$news,
			'news2'=>$new2,
			'categorys'=>$categorys,
			'supports'=>$supports,
			'sp' => $sp,
			'related' => $related,
			'tintuc' => $tintuc,
			'office' => $office,
			'actoffice' => $actoffice,
			'relate' => $relate,
			]);
	}
	public function productJson(){
	    return Product::paginate(10);
	  	}  
	public function filter($filter){
		return Product::where('capacity',$filter)->get();
	}
	public function search_product(Request $req){
		$categorys1=Category::Where(['parent_id'=>0,'status'=>'enable'])->orderBy('sorder','DESC')->paginate(16);
		$partners=Partners::Where('status','enable')->orderBy('sorder','DESC')->get();
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		$product = Product::search()->paginate(20);
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(15);
		// dd($product);
		return view('home.list-product',[
			'product'=>$product,
			'categorys'=>$categorys,
			'supports' => $supports,
			'sp' => $sp,
			'partners' => $partners,
			'categorys1'=>$categorys1
		]);
	}
	public function downloads(){
		$cat_id=Download_service::search()->orderBy('id','DESC')->paginate(8);
		$category=Category::where('status','enable')->get();		
		$catalog=Download_service::limit(8)->where('type','2')->get();
		// dd($catalog);
		$pricelist=Download_service::limit(8)->where('type','3')->get();
		$manuals=Download_service::limit(8)->where('type','4')->get();
		$software=Download_service::limit(8)->where('type','5')->get();
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		$partners=Partners::limit(10)->where('status','enable')->orderBy('sorder','DESC')->get();
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(15);
		return view('home.download',[
			'cats'=>$cat_id,
			'cat'=>$category,
			'categorys'=>$category,
			'categorys'=>$categorys,
			'supports'=>$supports,
			'catalog'=>$catalog,
			'pricelist'=>$pricelist,
			'manuals'=>$manuals,
			'software'=>$software,	
			'sp'=>$sp,	
			'partners'=>$partners,	
		]);
	}	
	public function view_doc($slug){
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(15);
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		$partners=Partners::limit(10)->where('status','enable')->orderBy('sorder','DESC')->get();
		$download= Download_service::where('slug',$slug)->first();
		if($download){
			if($download){
				return view('home.download-doc',['download'=>$download,'sp'=>$sp,'partners'=>$partners,'supports'=>$supports,'categorys'=>$categorys,]);
			}else{
				return view('errors.404');
			}
		}
	}
	public function view_pdf($slug){
		$download= Download_service::where('slug',$slug)->first();
		$file_name=base_path('uploads/download/').$download->file_download;
		header('Content-Type:application/pdf');
		header('Content-Disposition:inline; filename="'.$file_name.'"');
		header('Content-Transfer-Encoding:binary');
		header('Accept-Ranges:bytes');
		@readfile($file_name);
		}
	public function document($slug){
		$document= Product::where('slug',$slug)->first();	
		$file_name=base_path('uploads/download/').$document->taiLieu->file_download;
		header('Content-Type:application/pdf');
		header('Content-Disposition:inline; filename="'.$file_name.'"');
		header('Content-Transfer-Encoding:binary');
		header('Accept-Ranges:bytes');
		@readfile($file_name);
		}
	public function documents($slug,$lang){
		$document= Product::where('slug',$slug)->first();
		if($lang == 'vn'){
			$file_name=base_path('uploads/download/').$document->taiLieu->file_download;
		}
		if($lang == 'en'){
			$file_name=base_path('uploads/download/').$document->taiLieu->file_download_en;
		}
		if($lang == 'jp'){
			$file_name=base_path('uploads/download/').$document->taiLieu->file_download_jp;
		}
		if($lang == 'cn'){
			$file_name=base_path('uploads/download/').$document->taiLieu->file_download_cn;
		}	
		header('Content-Type:application/pdf');
		header('Content-Disposition:inline; filename="'.$file_name.'"');
		header('Content-Transfer-Encoding:binary');
		header('Accept-Ranges:bytes');
		@readfile($file_name);
		}


	public function detail_news($slug){
		$news=News::where('slug',$slug)->first();
		return view('home.news_detail',[
			'news_dt'=>$news
			]);
	}
	public function detail_catnews($slug){
		$news=News_category::where('slug',$slug)->first();
		return view('home.news_category',[
			'news_cat'=>$news
			]);
	}
public function recruitment(){
		$office=Office::where('status','enable')->get();
		$cat_work= CatWork::where('status','enable')->get();	
		$add_work= AddressWork::where('status','enable')->get();
		$actoffice=Office::where('sorder','1')->first();	
		$newswork=NewsWork::search()->orderBy('id','ASC')->limit(5)->get();
		$news=NewsWork::search()->orderBy('id','DESC')->limit(5)->get();
		$newsworks = News::Where('category_id','39')->limit(10)->get();
		return view('home.recruitment',[
			'cat_work'=>$cat_work,
			'add_work'=>$add_work,
			'newswork'=>$newswork,
			'news_work'=>$newswork,
			'newsworks'=>$newsworks,
			'actoffice'=>$actoffice,
			'offices'=>$office,
			'news'=>$news
		]);	
	}
	public function recruitment2($id){
	$news= NewsWork::where('id',$id)->first();
	$office=Office::where('status','enable')->get();
	$actoffice=Office::where('sorder','1')->first();
	$cat_work= CatWork::where('status','enable')->get();	
	$add_work= AddressWork::where('status','enable')->get();	
		if($news){
			if($news){
				return view('home.recruitment-detail',['news'=>$news,'actoffice'=>$actoffice,
			'offices'=>$office,'cat_work'=>$cat_work,
			'add_work'=>$add_work,
			]);
			}else{
				return view('errors.404');
			}
		}
	}
	//CV
	public function cv_mail(Request $req){
		$img='';
		$file=$req->file_upload;
		$file->move(base_path('uploads/cv'),$file->getClientOriginalName());
		$img=$file->getClientOriginalName();
		$req->merge(['upload_file'=>$img]);
		// dd($req->all());
		$cv=CV::create($req->all());
        Mail::send('cv-mail', array(
        	'id'=>$cv->id,
        	'title'=>$cv->title,
        	'upload_file'=>$cv->upload_file),
        function($message){
	        $message->to('hr01@hoplongtech.com.vn', 'Hoplongtech')->subject('Tuyển dụng Công ty Hợp long');
	    });
        Session::flash('flash_message', 'Send message successfully!');
		return redirect()->back()->with('success','Bạn đã nộp cv thành công!');
	}
	public function cv_send_mail($id){
		$send=CV::where('id',$id)->first();
		$file_name=base_path('uploads/cv/').$send->upload_file;
		header('Content-Type:application/msword');
		header('Content-Disposition:inline; filename="'.$file_name.'"');
		header('Content-Transfer-Encoding:binary');
		header('Accept-Ranges:bytes');
		@readfile($file_name);
	}
	public function contact(){
		$sp=Support::where(['status'=>'enable','type'=>'business'])->limit(10)->get();
		$supports=Support::where(['status'=>'enable','type'=>'technical'])->limit(10)->get();
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$project = News::where('type','project')->limit(12)->get();
		$nproject = News::orderBy('id','DESC')->limit(12)->get();
		$categorys1=Category::orderBy('sorder','DESC')->where(['status'=>'enable','parent_id'=>0])->limit(16)->get();
		return view('home.contact',[
			'project' => $project,
			'nproject' => $nproject,
			'categorys' => $categorys,
			'supports' => $supports,
			'sp' => $sp,
			'categorys1' => $categorys1,
			]);
	}
	public function categorys(){
		$categorys1=Category::where(['status'=>'enable','parent_id'=>0])->paginate(18);
		$partners=Partners::where('status','enable')->orderBy('sorder','DESC')->get();
		$supports=Support::limit(10)->where(['status'=>'enable','type'=>'technical'])->get();
		$sp=Support::limit(10)->where(['status'=>'enable','type'=>'business'])->get();
		$categorys=Category::where(['priority'=>1,'parent_id'=>0,'status'=>'enable'])->orderBy('sorder','ASC')->paginate(15);
		// dd($product);
		return view('home/list_category',[
			'categorys'=>$categorys,
			'supports' => $supports,
			'sp' => $sp,
			'partners' => $partners,
			'categorys1'=>$categorys1
		]);
	}
	public function get_news($slug){
	$tintuc= News::where('slug',$slug)->first();
	$office=Office::where('status','enable')->get();
	$actoffice=Office::where('sorder','1')->first();
	$related=News::where('category_id',$tintuc->category_id)->where('slug','<>','$tintuc->slug')->paginate(8);
		if($tintuc){
			if($tintuc){
				return view('home.tintuc',['tintuc'=>$tintuc,'actoffice'=>$actoffice,
			'offices'=>$office,'related'=>$related,
			
			]);
			}else{
				return view('errors.404');
			}
		}
	}
	public function TetKyHoi(){
		return view('home.tet');
	}
	public function Game(){
		return view('home.game');
	}
	public function lucky(){
		return view('home.lucky');	
	}
	public function History(){
		$actoffice=Office::where('sorder','1')->first();
		$office=Office::where('status','enable')->get();
		$sp=Support::where(['status'=>'enable','type'=>'business'])->limit(10)->get();
		$supports=Support::where(['status'=>'enable','type'=>'technical'])->limit(10)->get();
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		return view('home.history_company',['offices'=>$office,'actoffice'=>$actoffice,'categorys'=>$categorys,'supports'=>$supports,'sp'=>$sp,]);	
	}

	//update controller customer 
	public function register(Request $req){
		$this->validate($req,[
			'email' => 'unique:customer,email',
		],[
			'unique' => 'Email đăng ký đã tồn tại!'
		]);
		$dataCustomer = $req->all();
		$password = bcrypt($req->password);
		$req->merge(['password'=>$password]);
		// dd($req->all());
		$addData = Customer::create($req->all());
		// dd($addData);
		if ($addData) {
			// echo 'thanh cong';die();
			return redirect()->back()->with('register_success','Đăng ký tài khoản thành công');
		}
	}
	public function forgotPassword(){
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		return view('home.customer.forgotPassword',[
			'categorys' => $categorys
		]);
	}
	public function postForgotPassword(Request $req){
		$check = Customer::where('email',$req->email);
		if($check->count() > 0){
			$data = 
			[
	        	'email'=>$req->email,
	        	'password'=>($check->first()->password)
			];

		    Mail::to($req->email)->send(new ForgotPassword($data));
			return redirect()->back()->with('success','Hệ thống đã gửi email xác nhận cho bạn, vui lòng truy cập email để kích hoạt lại mật khẩu.');
		}
		else{
			return redirect()->back()->with('error','Email không tồn tại. Vui lòng nhập lại');
		}
	}
	public function resetPassword(Request $req){
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$check = Customer::where('email',$req->email)->where('password',$req->password);
		if($check) {
			return view('home.customer.resetPassword',[
				'email' => $req->email,
				'password' => $req->password,
				'categorys' => $categorys
			]);
		}
	}
	public function PostResetPassword(){
		$getData = Customer::where('email',request()->email)->first();
		if($getData){
			$password = bcrypt(request()->password);
			$getData->update(['password'=>$password]);
			return redirect()->route('forgotPassword')->with('resetSuccess','Đặt lại mật khẩu thành công!');
		}
	}
	public function loginCustomer(){
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		return view('home.customer.login',[
			'categorys' => $categorys
		]);
	}


	public function login(Request $req){
		if(Auth::guard('customer')->attempt($req->only(['email','password']))){
			return redirect()->route('home')->with('login_success','true');
		}
		else
		{
			return redirect()->back()->with('login_error','Tên đăng nhập hoặc mật khẩu không đúng');
		}
	}
	public function logout_customer(){
		Auth::guard('customer')->logout();
		return redirect()->route('home_product');
	}


	// Controller Gio hang
	public function add_cart($id,Data $cart){
		$model = Product::find($id);
		if(request()->quantity){
			if ($model) {
				for($i=0; $i < request()->quantity; $i++) {
					$cart->add($model);
				}
			}	
			return;
		}
		if ($model) {
			$cart->add($model);
			return redirect()->back()->with('success','Thêm sản phẩm vào giỏ hàng thành công!');
		}
		else {
			return view('errors.404');
		}
	}
	public function shop_now($id,Data $cart){
		$model = Product::find($id);
		if(request()->quantity){
			if ($model) {
				for($i=0; $i < request()->quantity; $i++) {
					$cart->add($model);
				}
			}	
			return;
		}
	}
	public function shopNow(Data $cart){
		$model = Product::find(request()->id);
		if(request()->quantity){
			if ($model) {
				for($i=0; $i < request()->quantity; $i++) {
					$cart->add($model);
				}
			}	
			if(request()->addCart){
				return redirect()->back()->with('success','Thêm sản phẩm vào giỏ hàng thành công');
			}
			return redirect()->route('view_cart');
		}
	}

	public function view_cart(Data $cart){
		
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		return view('home.cart.view_cart',[
			'categorys' => $categorys,
			'cart' => $cart 
		]);
	}
	public function delete_cart($id, Data $cart){
		// dd($id);
		$cart->delete($id);
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		return redirect()->back();
	}
	public function update_cart($id,Data $cart){
		$qty = request()->quantity > 0 ? request()->quantity : 1;
		$cart->update($id,$qty);
		return redirect()->back();
	}
	
	public function clear_cart(Data $cart){
		$cart->clear();
		return redirect()->back();
	}
	public function error(){
		return view('errors.404');
	}
	public function agency_posts(){
		$slider_active=Slider::where(['sorder'=>'1','type'=>0])->first();
		$slider_home=Slider::limit(6)->where(['status'=>'enable','type'=>0])->where('sorder','<>',1)->orderBy('sorder','ASC')->get();
		$company_news=News::limit(3)->where('category_id','42')->orderBy('id','DESC')->get();
		$office=Office::where('status','enable')->orderBy('sorder','ASC')->get();
		$actoffice=Office::where('sorder','1')->first();
		$partner=Partners::where('status','enable')->orderBy('sorder','DESC')->get();
		$news_service=Service2::limit(6)->where('status','enable')->orderBy('id','ASC')->get();
		$agency_posts = AgencyPosts::where('status',1)->orderBy('id','desc')->paginate(8);
		$agency_featured_posts = AgencyPosts::where('status',1)->where('featured_posts',1)->orderBy('id','desc')->paginate(10);
		$cates = AgencyPostCategories::where('status',1)->orderBy('id','desc')->get();
		return view('home.agency',[
			'active'=>$slider_active,
			'slider_homes'=>$slider_home,
			'actoffice'=>$actoffice,
			'company_news'=>$company_news,
			'offices'=>$office,
			'partners'=>$partner,
			'news_service'=>$news_service,
			'agency_posts' => $agency_posts,
			'agency_featured_posts' => $agency_featured_posts,
			'cates' => $cates	
		]);
		
	}
	public function agency_posts_by_category($slug,$id){
		$slider_active=Slider::where(['sorder'=>'1','type'=>0])->first();
		$slider_home=Slider::limit(6)->where(['status'=>'enable','type'=>0])->where('sorder','<>',1)->orderBy('sorder','ASC')->get();
		$company_news=News::limit(3)->where('category_id','42')->orderBy('id','DESC')->get();
		$office=Office::where('status','enable')->orderBy('sorder','ASC')->get();
		$actoffice=Office::where('sorder','1')->first();
		$partner=Partners::where('status','enable')->orderBy('sorder','DESC')->get();
		$news_service=Service2::limit(6)->where('status','enable')->orderBy('id','ASC')->get();
		$post_by_category = AgencyPosts::where('category_id',$id)->paginate(8);
		$agency_featured_posts = AgencyPosts::where('status',1)->where('featured_posts',1)->orderBy('id','desc')->paginate(10);
		$cates = AgencyPostCategories::where('status',1)->orderBy('id','desc')->get();
		return view('home.agency_by_category',[
			'active'=>$slider_active,
			'slider_homes'=>$slider_home,
			'actoffice'=>$actoffice,
			'company_news'=>$company_news,
			'offices'=>$office,
			'partners'=>$partner,
			'news_service'=>$news_service,
			'post_by_category' => $post_by_category,
			'agency_featured_posts' => $agency_featured_posts,
			'cates' => $cates	
		]);
	}
	public function agency_posts_detail($slug,$id){
		$slider_active=Slider::where(['sorder'=>'1','type'=>0])->first();
		$slider_home=Slider::limit(6)->where(['status'=>'enable','type'=>0])->where('sorder','<>',1)->orderBy('sorder','ASC')->get();
		$company_news=News::limit(3)->where('category_id','42')->orderBy('id','DESC')->get();
		$office=Office::where('status','enable')->orderBy('sorder','ASC')->get();
		$actoffice=Office::where('sorder','1')->first();
		$partner=Partners::where('status','enable')->orderBy('sorder','DESC')->get();
		$news_service=Service2::limit(6)->where('status','enable')->orderBy('id','ASC')->get();
		$post_detail = AgencyPosts::find($id);
		$agency_featured_posts = AgencyPosts::where('status',1)->where('featured_posts',1)->orderBy('id','desc')->paginate(10);
		$cates = AgencyPostCategories::where('status',1)->orderBy('id','desc')->get();
		return view('home.agency_detail_post',[
			'active'=>$slider_active,
			'slider_homes'=>$slider_home,
			'actoffice'=>$actoffice,
			'company_news'=>$company_news,
			'offices'=>$office,
			'partners'=>$partner,
			'news_service'=>$news_service,
			'post_detail' => $post_detail,
			'agency_featured_posts' => $agency_featured_posts,
			'cates' => $cates	
		]);
	}
	public function news_page(){
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$news_category = News_Category::where('status','enable')->get();
		$news = News::search()->where('status','enable')->orderBy('id','desc')->paginate(8);
		$special_news = News::where('status','enable')->where('type','project')->orderBy('id','desc')->paginate(6);
		return view('home.news_page',[
			'categorys' => $categorys,
			'news_category' => $news_category,
			'news' => $news,
			'special_news' => $special_news
		]);
	}
	public function detail_news_page($slug){
		$data = News::where('slug',$slug)->first();
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$news_category = News_Category::where('status','enable')->get();
		$special_news = News::where('status','enable')->where('type','project')->orderBy('id','desc')->paginate(6);
		return view('home.new_page_detail',[
			'data' => $data,
			'categorys' => $categorys,
			'news_category' => $news_category,
			'special_news' => $special_news
		]);
	}
	public function cate_news_page($slug){
		$id = News_Category::where('slug',$slug)->first()->id;
		$data = News::search()->where('category_id',$id)->where('status','enable')->orderBy('id','desc')->paginate(8);
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$news_category = News_Category::where('status','enable')->get();
		$special_news = News::where('status','enable')->where('type','project')->orderBy('id','desc')->paginate(6);
		return view('home.news_cate_page',[
			'news' => $data,
			'categorys' => $categorys,
			'news_category' => $news_category,
			'special_news' => $special_news
		]);
	}

	public function export_quote_pdf(){
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('home.cart.quote_pdf', $data);
  		// return view('home.cart.quote_pdf');
        return $pdf->download('bao_gia_hoplongtech.pdf');
    }
    public function terms_purc(){
		$categorys=Category::where(['status'=>'enable','priority'=>1,'parent_id'=>0])->orderBy('sorder','ASC')->limit(15)->get();
		$terms = Terms::first();
    	return view('home.cart.terms',[
			'categorys' => $categorys,
			'terms' => $terms,
    	]);
    }

    public function rateProduct(Request $req){
  		$img='';
		$file=$req->upload_file;
		if($file){
			$file->move(base_path('uploads/comment/rate'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
    	$rate = Rate::create($req->all());
    	if($rate) {
    		return redirect()->back()->with('success','Bạn đã đánh giá sản phẩm');
    	}
    }

    // getRateProduct for api
    public function getRateProduct($product_id){
    	$rates=Rate::where('status',1)->where('product_id',$product_id)->get();
    	return json_encode($rates);
    }
    public function getCommentProduct($product_id){
    	$comment=Comment::orderBy('id','DESC')->where('status',1)->where('product_id',$product_id)->where('id_comment_reply',null)->get();
    	return json_encode($comment);
    }
    public function getReplyCommentProduct($comment_id){
    	$comment=Comment::orderBy('id','DESC')->where('status',1)->where('id_comment_reply',$comment_id)->get();
    	return json_encode($comment);
    }
    // getRateProduct for api

    // getPartNumber for api
    public function getPartNumber($product_id,Data $helperData){
    	$product = Product::find($product_id);
		$partNumber = Product::where('category_id',$product->category_id)->where('id','<>',$product_id)->where('status','enable')->limit(20)->get();
		// foreach ($partNumber as $item) {
		// 	$item->price = $helperData->PriceProduct($item);
		// }
		
		return json_encode($partNumber);
    }
    // getPartNumber for api
}
 ?>