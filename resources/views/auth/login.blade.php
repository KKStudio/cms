@extends('admin.template')

@section('menu')

@stop

@section('wrapper')

<div class="row"> 

	<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
	<br>
	@foreach($errors->all() as $error) 
		
		<div class="alert alert-danger">{{ $error }}</div>

	@endforeach 

	{!! Form::open(['url' => 'auth/login']) !!}

		{!! Form::label('email', tr('admin.email'), [ 'style' => 'color: #eee; font-weight: bold; font-size: 16px; text-transform:uppercase;']) !!}

		{!! Form::email('email', '', ['class' => 'form-control']) !!}<br>

		{!! Form::label('password', tr('admin.password'), [ 'style' => 'color: #eee; font-weight: bold; font-size: 16px; text-transform:uppercase;']) !!}

		{!! Form::password('password', ['class' => 'form-control']) !!}<br>

		{!! Form::submit(tr('admin.login'), ['class' => 'btn btn-primary pull-right']) !!}

	{!! Form::close() !!}

	<br><br>

	<p style="color: #777; font-size: 16px; text-transform:uppercase;
	font-weight:bold;">KK Studio</p>

	</div>

</div>

@stop