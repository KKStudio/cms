@extends('admin.template')

@section('content')

	<a href="{{ url('admin/' . strtolower($module)) }}" class="btn btn-warning pull-right">back to module</a>
	
	<h3>Module settings</h3>

	<div class=""> 

	{!! Form::open([ 'url' => 'admin/'.$module.'/settings' ]) !!}

		{!! Form::submit('Save changes', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

		<div class="clearfix"></div>

		@foreach(m($module)->settings as $key => $value)
	
		<h3>{!! Form::label($key, $key) !!}</h3>

		{!! Form::text($key , $value, [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}

		@endforeach


	{!! Form::close() !!}

		<br><br>

	</div>

@stop
