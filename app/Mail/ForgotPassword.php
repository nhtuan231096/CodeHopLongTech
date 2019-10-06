<?php 
namespace App\Mail;

use App\Helper\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * 
 */
class ForgotPassword extends Mailable
{
	use Queueable, SerializesModels;
	public $data;
	public function __construct($data){
		$this->data = $data;
	}

	function Build()
	{
		return $this->view('emails.forgotPassword')->with([
			'data' =>$this->data
		]);
	}
}