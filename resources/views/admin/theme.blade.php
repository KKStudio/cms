@extends('admin.template')

@section('content')

	<h3 class="pull-left"><b>{{ $theme->name }}</h3>

	{!! Form::open([ 'url' => 'admin/themes/change']) !!}

		{!! Form::hidden('theme', $theme->slug) !!}

		@if(s('theme') == $theme->slug)

			<button class="btn btn-secondary pull-right">
				{{ tr('admin.selected') }}
			</button> 

		@else

			{!! Form::submit(tr('admin.select'), [ 'class' => 'btn btn-primary pull-right']) !!}

		@endif

	{!! Form::close() !!}

	<div class="clearfix"></div>

	<hr>

	<div class=""> 

		<img src="{{ asset('themes/' . $theme->slug . '/theme.png') }}" class="img-thumbnail pull-left" >

		<div class="pull-left" style="margin-left: 20px;">

			<h4>{{ tr('admin.modules_provides') }}</h4>

			<ul class="list-unstyled">

				@foreach(explode('|', $theme->provides) as $module)

				<li>{{ tr('admin.' . $module) }}</li>

				@endforeach

			</ul>

		</div>

		<div class="clearfix"></div> 

		<hr>

		<h3 class="pull-left">{{ tr('admin.customization') }}</h3>

		@if(count(json_decode($theme->colors, true)))

		{!! Form::open(['url' => 'admin/theme/' . $theme->slug . '/customize']) !!}

		{!! Form::submit(tr('admin.save_changes'), [ 'class' => 'btn btn-lg btn-primary pull-right'])!!}
		

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

			{{ tr('admin.cannot') }}

			</p>

		@endif

	</div>

@stop
