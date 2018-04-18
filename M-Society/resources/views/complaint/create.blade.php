@extends('layouts.app')
@section('content')
<div class="container">
<h1><center>Register complaint</h1>
{!! Form::open(['action' => 'ComplaintController@store','method'=>'POST']) !!}
<div class="form-group">
<b>{{Form::label('title', 'Title')}}</b>
{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>  
<div class="form-group">
<b>{{Form::label('complaint', 'Complaint')}}</b>
{{Form::textArea('complaint','',['class'=>'form-control','placeholder'=>'Enter Your omplaint'])}}
</div>    
{{Form::submit('Submit!',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}</div>
@endsection