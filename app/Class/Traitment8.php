<?php
namespace App\Class;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\CarpooMail;
use App\Mail\CarpooMail2;
use App\Mail\CarpooMail3;
use App\Mail\CarpooMail4;
use App\Mail\CarpooMail5;
use App\Mail\CarpooMail6;
use App\Mail\CarpooMail7;
class Traitment8
{

	public function SendEmail($FName,$LName,$Title,$Description,$sendto)
	{
		$details = [
        'FName'=> $FName,
    	'LName' => $LName,
		'Title'=> $Title,
    	'Description' => $Description,
	];
	
    	if(Mail::to($sendto)->send(new CarpooMail7($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}