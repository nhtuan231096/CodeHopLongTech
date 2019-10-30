<?php 
namespace App\Mail;

use App\Helper\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * 
 */
class OrderSendMailNotification extends Mailable
{
	use Queueable, SerializesModels;
	public $order;
	public function __construct($order){
		$this->order = $order;
	}

	function Build()
	{
		return $this->view('emails.OrderSendMailNotification')->with([
			'cart' => new Data,
			'order' =>$this->order
		]);
	}
}