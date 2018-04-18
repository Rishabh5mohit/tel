<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complaint;
use DB;
use Illuminate\Pagination\Paginator;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function index()
    {

		$user_id=auth()->user()->id;
		if(auth()->user()->isOwner==1)
		{
			$complaint=complaint::orderBy('id','desc')->paginate(1);
			return view('complaint.index')->with('complaint',$complaint);
		}		
		$complaint=DB::select('select * from complaints where user_id=?',[$user_id]);
		$complaint=new Paginator($complaint, 10);	
		return view('complaint.index')->with('complaint',$complaint);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('complaint.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
		'title'=>'required',
		'complaint'=>'required'
		]);
		$complaint=new complaint;
		$complaint->worker_id=0;
		$complaint->title=$request->input('title');
		$complaint->complaint=$request->input('complaint');		
		$complaint->type="None";
		if(auth()->user()->isWorker==1)
		$complaint->type="Worker";
		if(auth()->user()->isShop==1)
		$complaint->type="ShopOwner";
		if(auth()->user()->isResident==1)
		$complaint->type="Resident";
	
		$complaint->user_id=auth()->user()->id;
		$complaint->save();
		return redirect('/complaint')->with('success','post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complaint= complaint::find($id);
		return view('complaint.show')->with('complaint',$complaint);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$complaint=complaint::find($id);
		return view('complaint.edit')->with('complaint',$complaint);
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
		'title'=>'required',
		'complaint'=>'required'
		]);
		$complaint=complaint::find($id);
		$complaint->title=$request->input('title');
		$complaint->complaint=$request->input('complaint');		
		$complaint->save();
		return redirect('/complaint')->with('success','post created');        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $complaint= complaint::find($id);
		  $complaint->delete();
		  return redirect('/complaint');
    }
}
