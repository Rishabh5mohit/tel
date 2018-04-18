@extends('layouts.app')

@section('content')
<h1> <center>Validation</h1>
<br>
@if(count($validate)>0)
	@foreach($validate as $sub)
	@if($sub->worker_id!=-1)
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
		<h3><a href='/validate/{{$sub->id}}'>{{$sub->title}}</a></h3>
		
		
		<small>written on {{$sub->created_at}}</small>
		<small>by a {{$sub->complaint_type}} of your society</small>
		</div>
		@endif
	@endforeach
	{{$validate->links()}}
@else
	<p>no post found</p>
@endif
@endsection
