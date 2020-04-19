<?php 
namespace App\Mail;

use App\Helper\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * 
 */
class OrderSuccess extends Mailable
{
	use Queueable, SerializesModels;
	public $order;
	public function __construct($order){
		$this->order = $order;
	}

	function Build()
	{
		return $this->view('emails.orderSuccess')->with([
			'cart' => new Data,
			'order' =>$this->order
		])->subject('Xác nhận giao dịch');
	}
}