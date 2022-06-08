<?php
namespace App\Class;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\CarpoolMail;
use App\Mail\CarpoolMail2;
class Traitment
{

	public function SendEmail($Name,$title,$body,$sendto)
	{
		$details = [
        'Name'=> $Name,
    	'title' => $title,
    	'body' => $body
    ];
    	if(Mail::to($sendto)->send(new WelcomeMail($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}