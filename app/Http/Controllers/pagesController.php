<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\ContactUs;
use Illuminate\support\facades\mail;

class pagesController extends Controller
{
public function index(){
    return view('pages.index');
}

public function about(){
    return view('pages.about');
}



public function contact(){
    return view('pages.contact');
}

public function dosend(request $request) {

    $request->validate ([  
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'body'=>'required|min:10'
   ]);

   $name = $request->input('name');
   $email = $request->input('email');
   $subject = $request->input('subject');
   $body = $request->input('body');

    mail::to('mohamed-alkady@outlook.com')
    ->send(new ContactUs( $name , $email , $subject , $body ) );

    return redirect('/contact')->with('success','we got your message and will answer you soon');
}


}
