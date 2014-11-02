@extends('admin.template')

@section('content')

	<h3 class="pull-left"><b>{{ $theme->name }}</h3>

	{!! Form::open([ 'url' => 'admin/themes/change']) !!}

		{!! Form::hidden('theme', $theme->slug) !!}

		@if(s('theme') == $theme->slug)

			<button class="btn btn-secondary pull-right">
				selected
			</button> 

		@else

			{!! Form::submit('select theme', [ 'class' => 'btn btn-primary pull-right']) !!}

		@endif

	{!! Form::close() !!}

	<div class="clearfix"></div>

	<hr>

	<div class=""> 

		<img src="{{ asset('themes/' . $theme->slug . '/theme.png') }}" class="img-thumbnail pull-left" >

		<div class="pull-left" style="margin-left: 20px;">

			<h4>Modules this theme provides:</h4>

			<ul class="list-unstyled">

				@foreach(explode('|', $theme->provides) as $module)

				<li>{{ $module }}</li>

				@endforeach

			</ul>

		</div>

		<div class="clearfix"></div> 

		<hr>

		<h3 class="pull-left">Theme customization</h3>

		@if(count(json_decode($theme->colors, true)))

		{!! Form::open(['url' => 'admin/theme/' . $theme->slug . '/customize']) !!}

		{!! Form::submit('save changes', [ 'class' => 'btn btn-lg btn-primary pull-right'])!!}
		

		<div class="clearfix"></div> 
		<br>

		@foreach(json_decode($theme->colors, true) as $field => $color)

			<h4>{!! Form::label($field, $field) !!}</h4>

			{!! Form::text($field, $color, ['class' => 'color form-control input-lg']) !!}<br>

		@endforeach

		{!! Form::close() !!}

		@else
		<div class="clearfix"></div> 
		<br>

			<p class="text-muted">

			This theme cannot be customized.

			</p>

		@endif

	</div>

@stop
