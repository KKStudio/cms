@extends('admin.template')

@section('content')

	<h3 class="pull-left">{{ tr('admin.themes') }}</h3>

	<a href="{{ url('install') }}" class="btn btn-lg pull-right btn-success">{{ tr('admin.install') }}</a>

	<div class="clearfix"></div>

	<hr>

	<div class=""> 

	@foreach($themes as $theme)

		<div class="col-sm-6 col-md-4 col-lg-3">

		<a href="{{ url('admin/theme/' . $theme->slug) }}">

			<img src="{{ asset('themes/' . $theme->slug . '/theme.png') }}" class="img-thumbnail"  style="width: 100%; height: auto;"> 

			<h5>{{ $theme->name }}</h5>

		</a>

		{!! Form::open([ 'url' => 'admin/themes/change']) !!}

			{!! Form::hidden('theme', $theme->slug) !!}

			@if(s('theme') == $theme->slug)

				<button class="btn btn-secondary">
					{{ tr('admin.selected') }}
				</button> 

			@else

				{!! Form::submit(tr('admin.select'), [ 'class' => 'btn btn-primary']) !!}

			@endif

			<a href="{{ url('admin/theme/' . $theme->slug) }}" class="btn btn-default pull-right">
				<i class="glyphicon glyphicon-cog"></i>
			</a> 

		{!! Form::close() !!}

		</div>

	@endforeach

	</div>

@stop
