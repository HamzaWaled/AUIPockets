<?php
namespace App\Class;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\CarpooMail;
use App\Mail\CarpooMail2;
use App\Mail\CarpooMail3;
use App\Mail\CarpooMail4;
class Traitment5
{

	public function SendEmail($FName,$LName,$cityfrom,$cityto,$carpoDate,$FUserCancelingTrip,$LUserCancelingTrip,$sendto)
	{
		$details = [
        'FName'=> $FName,
    	'LName' => $LName,
		'cityfrom'=> $cityfrom,
    	'cityto' => $cityto,
		'carpoDate'=> $carpoDate,
		'FUserCancelingTrip' => $FUserCancelingTrip,
		'LUserCancelingTrip'=> $LUserCancelingTrip,
		
    	
    ];
    	if(Mail::to($sendto)->send(new CarpooMail4($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}