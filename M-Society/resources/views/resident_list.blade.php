@extends('layouts.app')

@section('content')
<h1> <center>Register </h1>
<br>
@if(count($resident)>0)

	


	@foreach($resident as $sub)
	<div class="my" style="height: 150px;
  width: 80%;
  background: rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  box-shadow: inset 0 0 10px black, 0 0 10px black;
  padding-top: 10px;
  display: inline-block;
  margin: 15px;
  vertical-align: top;
  text-align: center;">

	{!! Form::open(['action' => 'residentcontroller@owner_update','method'=>'POST']) !!}
	<table style="width:100%">
  <tr>
    <th>Resident_id</th>
    <th>User_id</th> 
    <th>Address</th>
  </tr>
  <tr>
    <td>{{$sub->id}}</td>
    <td>{{$sub->user_id}}</td> 
    <td>{{$sub->address}}</td>
		{{Form::hidden('id', $sub->id)}}
    {{Form::hidden('user_id', $sub->user_id)}}
	{{Form::hidden('address', $sub->address)}}
		<td>{{Form::submit('validate!',['class'=> 'btn btn-primary'])}}</td>
	</tr>
</div>
	
	</table>
<br>
<br>
<br>
<br>
<br>

{{ Form::close() }}

	

		
	@endforeach

@else
	<p>no post found</p>
@endif
@endsection
