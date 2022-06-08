<?php
namespace App\Class;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\CarpooMail;
use App\Mail\CarpooMail2;
use App\Mail\CarpooMail3;
use App\Mail\CarpooMail4;
use App\Mail\CarpooMail5;
class Traitment6
{

	public function SendEmail($FName,$LName,$cityfrom,$cityto,$carpoDate,$sendto)
	{
		$details = [
        'FName'=> $FName,
    	'LName' => $LName,
		'cityfrom'=> $cityfrom,
    	'cityto' => $cityto,
		'carpoDate'=> $carpoDate,
	];
	
    	if(Mail::to($sendto)->send(new CarpooMail5($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}