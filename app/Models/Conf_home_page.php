<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Conf_home_page extends Model
{
	protected $table = 'conf_home_page';
	protected $fillable = [
	'title_page','title_page_des','page_des','image_page_des', 'title_time_line', 'img_time_line_1',
    'img_time_line_2','img_time_line_3','img_time_line_4', 'img_time_line_5','img_time_line_6','img_time_line_7','img_time_line_8','img_banner','updated_at','updated_by','block_title_1','block_title_2','block_title_3'
	];
}