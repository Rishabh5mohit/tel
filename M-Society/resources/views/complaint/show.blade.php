@extends('layouts.app')

@section('content')
<h1> <center>{{$complaint->title}} </h1>
<br>

		<div class="my" style="height: 150px;
  width: 100%;
  background: rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  box-shadow: inset 0 0 10px black, 0 0 10px black;
  padding: 10px;
  display: inline-block;
  margin: 15px;
  vertical-align: top;
  text-align: center;">
		<h3>{{$complaint->complaint}}</a></h3>
		
		
		<small>written on {{$complaint->created_at}}</small>
		<small>by a {{$complaint->type}} of your society</small>
		</div>
		<hr>
		<div class="my" style="padding-left:30%">
			@if(auth()->user('id')->isOwner==0)
		<a href="/complaint/{{$complaint->id}}/edit" class="btn btn-primary">Edit</a>
		<br>
			@endif

		<br>
{!! Form::open(['action' => ['ComplaintController@destroy',$complaint->id],'method'=>'POST','class'=>'pull-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete!',['class'=> 'btn btn-danger'])}}
{!! Form::close() !!}	
	<br>
	@if(auth()->user('id')->isOwner==1)
		
				<a href="/validate/{{$complaint->id}}/edit" class="btn btn-primary">Send to validate.</a>
		
		</div>
	@endif
	
@endsection
