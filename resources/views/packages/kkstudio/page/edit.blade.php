@extends('admin.template')

@section('content')

	<h3 class="pull-left">Edycja strony</h3>

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/page/' . $page->slug . '/edit']) !!}

			{!! Form::submit('Edytuj stronę', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

			<div class="clearfix"></div>

			<h3>{!! Form::label('name', 'Nazwa strony') !!}</h3>
			{!! Form::text('name', $page->name, [ 'class' => 'form-control' ]) !!}

			<h3>{!! Form::label('content', 'Zawartość strony') !!}</h3>
			{!! Form::textarea('content', $page->content, [ 'class' => 'editor form-control', 'rows' => 10 ]) !!}

		{!! Form::close() !!}

	</div>

@stop