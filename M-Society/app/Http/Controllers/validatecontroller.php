<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\validate;
use App\complaint;
use DB;
use Illuminate\Pagination\Paginator;
class validatecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$complaint=complaint::where('worker_id','=','0')->paginate(1);
			return view('complaint.index')->with('complaint',$complaint);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
               		$validate=complaint::find($id);
		return view('validate.edit')->with('validate',$validate);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $validate= validate::find($id);
		return view('validate.show')->with('validate',$validate); }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        		$validate=complaint::find($id);
		$validate->worker_id=-1;
		$validate->save();
		
		return view('validate.edit')->with('validate',$validate);
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
	   $this->validate($request,[
		'location'=>'required'
		]);
	
		$validate=new validate;
		$validate->title=$request->input('title');
		$validate->complaint=$request->input('complaint');
		$validate->complaint_type=$request->input('complaint_type');		
		$validate->user_id=auth()->user()->id;
		$validate->location=$request->input('location');
		$validate->type=$request->input('type');		
		$validate->worker_id=-1;
		$validate->save();
		return redirect('/validate')->with('success','post created');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
