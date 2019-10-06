<?php 
namespace App\Mail;

use App\Helper\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * 
 */
class ConfirmOrder extends Mailable
{
	use Queueable, SerializesModels;
	public $order;
	public function __construct($order){
		$this->order = $order;
	}

	function Build()
	{
		return $this->view('emails.orderConfirm')->with([
			'cart' => new Data,
			'order' =>$this->order
		])->subject('Xác nhận đặt hàng');
	}
}