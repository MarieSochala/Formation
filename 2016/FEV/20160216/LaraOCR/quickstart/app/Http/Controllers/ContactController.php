<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller 
{
  public function getContact(){
		return view('contact');
  }

  public function postContact(ContactRequest $request)
  {
		Mail::send('emails.contact', $request->all(), function($message)
		{
			$message->to('')->subject('Contact');
		});
		return view('confirm');
  }
 
}