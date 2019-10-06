<?php 
namespace App\Mail;

use App\Helper\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * 
 */
class OrderSendMail extends Mailable
{
	use Queueable, SerializesModels;
	public $order;
	public function __construct($order){
		$this->order = $order;
	}

	function Build()
	{
		return $this->view('emails.orderSendMail')->with([
			'cart' => new Data,
			'order' =>$this->order
		]);
	}
}