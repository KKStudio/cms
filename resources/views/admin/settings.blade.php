@extends('admin.template')

@section('content')

	<h3>Global settings</h3>

	<div class=""> 

	{!! Form::open([ 'url' => 'admin/settings' ]) !!}

		{!! Form::submit('Save changes', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

		<div class="clearfix"></div>

	
		<h3>{!! Form::label('test', 'Test') !!}</h3>

		{!! Form::text('test', \App\Settings::value('test', 'tak'), [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}


	{!! Form::close() !!}

		<br><br>

	</div>

@stop
