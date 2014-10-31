@extends('admin.template')

@section('content')

	<h3>Themes available</h3>

	<hr>

	<div class=""> 

	@foreach($themes as $theme)

		<div class="col-sm-6 col-md-4 col-lg-3">

		<img src="{{ asset('themes/' . $theme->slug . '/theme.png') }}" class="img-thumbnail"> 

		<h5>{{ $theme->name }}</h5>

		{!! Form::open([ 'url' => 'admin/themes/change']) !!}

			{!! Form::hidden('theme', $theme->slug) !!}

			@if(s('theme') == $theme->slug)

				<button class="btn btn-secondary">
					selected
				</button> 

			@else

				{!! Form::submit('select theme', [ 'class' => 'btn btn-primary']) !!}

			@endif

		{!! Form::close() !!}

		</div>

	@endforeach

	</div>

@stop
