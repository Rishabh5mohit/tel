<?php

namespace App\Http\Controllers;
use App\worker;
use App\validate;
use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination\Paginator;

class workercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		return view('worker.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		$id=auth()->user()->id;
		$var=DB::select('select * from worker where user_id=?',[$id]); 
		if($var!=null){
			
		$temp= worker::where('user_id', '=', $id);
		
		$temp->delete();
		
		}
		$worker=new worker;
		
		$worker->user_id=auth()->user()->id;
		$worker->name=auth()->user()->name;		
		$worker->type=$request->type;
		$worker->profession="none";
		if($request->type==1)
			$worker->profession="Electrician";
		if($request->type==2)
			$worker->profession="Plumber";
		if($request->type==3)
			$worker->profession="Sweeper";
		if($request->type==4)
			$worker->profession="Cook";
		$worker->save();
		return redirect('/worker')->with('success','post created');        //
        //}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$temp=auth()->user()->id;
		//return $temp;
		$worker=worker::where('user_id','=',$temp)->first();
		//return $worker->type;
		$complaint=validate::where('type','=',$worker->type)->paginate(2);

		return view('worker.show')->with('complaint',$complaint); 
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
