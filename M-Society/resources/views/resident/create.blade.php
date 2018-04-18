@extends('layouts.app')
@section('content')
<div class="container">
<h1><center>Set up profile</h1>
{!! Form::open(['action' => 'residentcontroller@store','method'=>'POST']) !!}
<div class="form-group">
<b>{{Form::label('address', 'Address')}}</b>
{{Form::text('address','',['class'=>'form-control','placeholder'=>'Enter your Address'])}}
</div> 

{{Form::submit('Submit!',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}</div>
@endsection