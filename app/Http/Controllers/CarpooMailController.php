<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarpooMailController extends Controller
{
    public function SendEmail()
	{
		$details = [
    	'title' => 'Mail from AUIPOCKETS',
    	'body' => 'this is just to tell you that'
    ];
    Mail::to('h.waled@aui.ma')->send(new CarpooMail2($details));
    
    return "Email Sent";
	}
}
