@extends('layouts.app')

@section('content')
<h1> <center>{{$validate->title}} </h1>
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
		<h3>{{$validate->complaint}}</a></h3>
		
		
		<small>written on {{$validate->created_at}}</small>
		<small>by a {{$validate->complaint_type}} of your society</small>
		</div>
		<hr>
		<div class="my" style="padding-left:30%">
			@if(auth()->user('id')->isOwner==1)
		<a href="/validate/{{$validate->id}}/edit" class="btn btn-primary">Assign</a>
		<br>
			@endif

@endsection
