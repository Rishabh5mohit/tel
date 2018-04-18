@extends('layouts.app')
@section('content')
<div class="container">
<h1><center>Set up profile</h1>
{!! Form::open(['action' => 'workercontroller@store','method'=>'POST']) !!}
<div class="form-group">
<b><label for="type">Profession type</label></b>
	<select id="type" name="type"><option value="1">Electrician</option><option value="2">Plumber</option><option value="3">Sweeper</option><option value="4">Cook</option></select></div>  

{{Form::submit('Submit!',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}</div>
@endsection