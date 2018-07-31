<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request\ContectRequest;
use App\Http\Requests;
use Auth;
use Mail;
use Session; 
use App\Mail\NewContactRequest;

class ContController extends Controller
{
   
    public function show()
    {
    
        return view('contect');
    }

    public function mail(Request $request)
    {
        Mail::to('abdulaziz-cse@protonmail.com')->send(new NewContactRequest($request));
        return view('contect');

    }

 
}
