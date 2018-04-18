<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\resident;
use DB;
use Illuminate\Pagination\Paginator;
class residentcontroller extends Controller
{
    public function unregistered(){
		$id=auth()->user()->id;
		$temp= resident::where('user_id', '=', $id)->first();
		if($temp==null)
		return view('/resident/create');
		if($temp->hasRegistered==0){	
		return view('/resident/create');
		}
		if($temp->hasRegistered==2){	
		return "Your request is pending";
		}
		if($temp->hasRegistered==1){	
		return redirect('/resident/index');
		}

	}
	public function index(){
		if(auth()->user()->isOwner==1)
			return view('/owner');
		return view('/resident.index');
	}
	public function store(Request $request){
		$this->validate($request,[
		'address'=>'required'
		]);
		$resident=new resident;
		$resident->address=$request->input('address');		
		$resident->hasRegistered=2;	
		$resident->user_id=auth()->user()->id;
		$resident->save();
		return redirect('/resident')->with('success','post created');
	}
	public function owner(){
		$resident=resident::where('hasRegistered', '=', 2)->simplePaginate(15);
		//$resident=new Paginator($resident, 10);	
		return view('resident_list')->with('resident',$resident);
	}
	public function owner_update(Request $request){
		$id=$request->input('id');
		$temp= resident::where('id', '=', $id)->first();
		$temp->hasRegistered=1;
		$temp->save();
		return redirect('/resident/index');
	}
}
