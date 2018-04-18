<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login
class MessagesController extends Controller
{
	public function submit(Request $req){
		if (User::where('email', '=', Input::get('email'))->exists()) {
   // user found
}
	}
	$login=new Login();
	$login->email=$req->email;
	$login->password=$req->password;
}
