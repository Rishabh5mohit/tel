@extends('layouts.app')

@section('content')
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
		<h3>{{$sub->title}}</h3>
				<p>{{$sub->complaint}}</p>
		
		<small>{{$sub->complaint_type}}</small><br>
		<small>{{$sub->location}}</small>
		</div>
		
	@endforeach
	{{$complaint->links()}}
@else
	<p>no post found</p>
@endif
@endsection
