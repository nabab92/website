<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
use App\Mail\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sendContactMail(Request $request)
    {

		$v = Validator::make($request->all(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required',
    		'message' => 'required'
		]);

	    if ($v->fails())
	    {
	        return redirect('/#contact')
	        	->withInput()
	        	->withErrors($v->errors());
	    }

	    Mail::to('nababmd786@gmail.com')->send(new \App\Mail\MarkdownContact($request));

	    return redirect('/#contact')
	    	->with('flash', 'You message has been sent successfully.');

    }

}
