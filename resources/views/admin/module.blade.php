@extends('admin.template')

@section('content')

	<a href="{{ url('admin/' . strtolower($module)) }}" class="btn btn-warning pull-right">{{ tr('admin.back') }}</a>
	
	<h3>{{ tr('admin.module_settings') }}</h3>

	<div class=""> 

	{!! Form::open([ 'url' => 'admin/'.$module.'/settings' ]) !!}

		{!! Form::submit(tr('admin.save_changes'), [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

		<div class="clearfix"></div>

		@foreach(m($module)->settings as $key => $value)
	
		<h3>{!! Form::label($key, $key) !!}</h3>

		{!! Form::text($key , $value, [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}

		@endforeach

		@if(!count(m($module)->settings ))

			<p class="text-muted">
				{{ tr('admin.no_settings')}}
			</p>

		@endif

	{!! Form::close() !!}

		<br><br>

	</div>

@stop
