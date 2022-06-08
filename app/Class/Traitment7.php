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
class Traitment7
{

	public function SendEmail($FName,$LName,$cityfrom,$cityto,$carpoDate,$FCREATEUSER,$LCREATEUSER,$sendto)
	{
		$details = [
        'FName'=> $FName,
    	'LName' => $LName,
		'cityfrom'=> $cityfrom,
    	'cityto' => $cityto,
		'carpoDate'=> $carpoDate,
		'FCREATEUSER' => $FCREATEUSER,
		'LCREATEUSER'=> $LCREATEUSER,
	];
	
    	if(Mail::to($sendto)->send(new CarpooMail6($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}