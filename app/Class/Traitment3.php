<?php
namespace App\Class;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\CarpooMail;
use App\Mail\CarpooMail2;
use App\Mail\CarpooMail3;
class Traitment3
{

	public function SendEmail($FName,$LName,$cityfrom,$cityto,$carpoDate,$CarpooAt,$FPersonWhoSelectedCarpoo,$LPersonWhoSelectedCarpoo,$sendto)
	{
		$details = [
        'FName'=> $FName,
    	'LName' => $LName,
		'cityfrom'=> $cityfrom,
    	'cityto' => $cityto,
		'carpoDate'=> $carpoDate,
		'CarpooAt'=> $CarpooAt,
		'FPersonWhoSelectedCarpoo'=> $FPersonWhoSelectedCarpoo,
		'LPersonWhoSelectedCarpoo'=> $LPersonWhoSelectedCarpoo,
    	
    ];
    	if(Mail::to($sendto)->send(new CarpooMail2($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}