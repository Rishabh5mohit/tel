@extends('layouts.app')

@section('content')
<h1> <center>Complaints </h1>
<br>
@if(count($complaint)>0)
	@foreach($complaint as $sub)
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
		<h3><a href='/complaint/{{$sub->id}}'>{{$sub->title}}</a></h3>
		
		
		<small>written on {{$sub->created_at}}</small>
		<small>by a {{$sub->type}} of your society</small>
		</div>
		
	@endforeach
	{{$complaint->links()}}
@else
	<p>no post found</p>
@endif
@endsection
