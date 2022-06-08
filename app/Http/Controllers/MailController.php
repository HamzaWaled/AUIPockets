<?php

namespace App\Http\Controllers;

use App\Class\Traitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App;

class MailController extends Controller
{
    public function SendEmail()
	{
		$details = [
    	'title' => 'Mail from AUIPOCKETS',
    	'body' => 'New Password'
    ];
    Mail::to('h.waled@aui.ma')->send(new WelcomeMail($details));
    
    return "Email Sent";
	}
	public function index()
	{
		$environment = env('MAIL_FROM_ADDRESS');

		return view('emails.ChangeMail',compact('environment'));
	}
	public function envUpdate()
    {
    	//return env('LOG_CHANNEL', 'Oops, I could not find that setting');
    	return [
    'LOG_CHANNEL' => env('LOG_CHANNEL', "4444")];
    }
}
