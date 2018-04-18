<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class userctrl extends Controller
{
    //
	public function login(Request $req){
		if(Auth::attempt([
		'email'=>$req->email,
		'password'=>$req->password
		])){
		$user=User::where('email',$req->email)->first();
		
		if($user->isOwner()){
			return redirect()->route('owner');
		}
		
		else if($user->isShop()){
			return redirect()->route('shop');
		}
		else if($user->isResident()){
			return redirect('/resident');
		}
		else if($user->isWorker()){
			return redirect('/worker');
		}
		
		}
	}
}
