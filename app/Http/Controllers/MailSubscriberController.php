<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailSubscriberController extends Controller
{
	public function __invoke(Request $request){
	   	$subscriber = new \App\Subscriber();
		$subscriber->email = $request->input('email');
		$subscriber->status = 1;
		$subscriber->save();
		return view('mail_subscribed');
	}
	
}
