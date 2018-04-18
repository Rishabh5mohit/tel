@extends('layouts.app')
@section('content')
<div class="container">
<h1><center>Assigning complaint</h1>
{!! Form::open(['action' => ['validatecontroller@update',$validate->id],'method'=>'POST']) !!}
<div class="form-group">
<b>{{Form::label('location', 'Location')}}</b>
{{Form::text('location','',['class'=>'form-control','placeholder'=>'Location'])}}
</div>  
<div class="form-group">
<b>{{Form::label('type', 'worker type required')}}</b>
	{{Form::select('type', array('1' => 'Electrician', '2' => 'Plumber' ,3 => 'Sweeper', '4' => 'Cook'))}}</div>

{{ Form::hidden('title', $validate->title) }}
{{ Form::hidden('complaint_type', $validate->type) }}
{{ Form::hidden('complaint', $validate->complaint) }}
	
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit!',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}</div>
@endsection