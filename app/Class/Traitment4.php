<?php
namespace App\Class;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\CarpooMail;
use App\Mail\CarpooMail2;
use App\Mail\CarpooMail3;
class Traitment4
{

	public function SendEmail($FName,$LName,$cityfrom,$cityto,$carpoDate,$CarpooAt,
    $FPersonWhoSelectedCarpoo,$LPersonWhoSelectedCarpoo,$FpersonCreatedcarpooling,
    $LpersonCreatedcarpooling,$EmailCreatedcarpooling,$PhoneCreatedcarpooling,$sendto)
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
    	'FpersonCreatedcarpooling'=> $FpersonCreatedcarpooling,
		'LpersonCreatedcarpooling'=> $LpersonCreatedcarpooling,
        'EmailCreatedcarpooling'=> $EmailCreatedcarpooling,
		'PhoneCreatedcarpooling'=> $PhoneCreatedcarpooling,
    ];
    	if(Mail::to($sendto)->send(new CarpooMail3($details))){
    		return true;
    	}else{
    		return false;
    	}
    
	}

}