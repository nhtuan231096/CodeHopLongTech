<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\News;
use App\Models\Office;
use App\Models\Partners;
use App\Models\Service2;
use App\Models\Support;
use App\Models\Conf_home_page;
use Illuminate\Http\Request;

/**
 * 
 */
class AboutUsController extends Controller
{
	
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
		return view('admin.webConfig.about_us',[
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
	public function save(Request $req){
		$conver_page_des = html_entity_decode($req->page_des);
		$req->merge(['page_des'=>$conver_page_des]);
		$img_page_des = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->image_page_des : '';
		if($req->hasFile('image_page_des_upload')){
			$file=$req->image_page_des_upload;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_page_des=$file->getClientOriginalName();
			$req->merge(['image_page_des'=>$img_page_des]);
		}
		$img_time_line_1 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_1 : '';
		if($req->hasFile('upload_img_time_line_1')){
			$file=$req->upload_img_time_line_1;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_1=$file->getClientOriginalName();
			$req->merge(['img_time_line_1'=>$img_time_line_1]);
		}
		$img_time_line_2 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_2 : '';
		if($req->hasFile('upload_img_time_line_2')){
			$file=$req->upload_img_time_line_2;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_2=$file->getClientOriginalName();
			$req->merge(['img_time_line_2'=>$img_time_line_2]);
		}
		$img_time_line_3 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_3 : '';
		if($req->hasFile('upload_img_time_line_3')){
			$file=$req->upload_img_time_line_3;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_3=$file->getClientOriginalName();
			$req->merge(['img_time_line_3'=>$img_time_line_3]);
		}
		$img_time_line_4 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_4 : '';
		if($req->hasFile('upload_img_time_line_4')){
			$file=$req->upload_img_time_line_4;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_4=$file->getClientOriginalName();
			$req->merge(['img_time_line_4'=>$img_time_line_4]);
		}
		$img_time_line_5 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_5 : '';
		if($req->hasFile('upload_img_time_line_5')){
			$file=$req->upload_img_time_line_5;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_5=$file->getClientOriginalName();
			$req->merge(['img_time_line_5'=>$img_time_line_5]);
		}
		$img_time_line_6 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_6 : '';
		if($req->hasFile('upload_img_time_line_6')){
			$file=$req->upload_img_time_line_6;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_6=$file->getClientOriginalName();
			$req->merge(['img_time_line_6'=>$img_time_line_6]);
		}
		$img_time_line_7 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_7 : '';
		if($req->hasFile('upload_img_time_line_7')){
			$file=$req->upload_img_time_line_7;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_7=$file->getClientOriginalName();
			$req->merge(['img_time_line_7'=>$img_time_line_7]);
		}
		$img_time_line_8 = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_time_line_8 : '';
		if($req->hasFile('upload_img_time_line_8')){
			$file=$req->upload_img_time_line_8;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_time_line_8=$file->getClientOriginalName();
			$req->merge(['img_time_line_8'=>$img_time_line_8]);
		}
		$img_banner = Conf_home_page::count() != 0 ? Conf_home_page::find(1)->img_banner : '';
		if($req->hasFile('upload_img_banner')){
			$file=$req->upload_img_banner;
			$file->move(base_path('uploads/about'),$file->getClientOriginalName());
			$img_banner=$file->getClientOriginalName();
			$req->merge(['img_banner'=>$img_banner]);
		}
		
		
		// dd($req->all());
		if(Conf_home_page::count() == 0){
			Conf_home_page::create($req->all());
		} else {
			Conf_home_page::find(1)->update($req->all());
		}
		return redirect()->back()->with('success','Cập nhật thành công');
	}
}
