@extends('admin.template')

@section('content')

	<h3 class="pull-left">Stwórz nową stronę</h3>

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/page/create']) !!}

			{!! Form::submit('Dodaj stronę', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

			<div class="clearfix"></div>

			<h3>{!! Form::label('name', 'Nazwa strony') !!}</h3>
			{!! Form::text('name', '', [ 'class' => 'form-control' ]) !!}

			<h3>{!! Form::label('content', 'Zawartość strony') !!}</h3>
			{!! Form::textarea('content', '', [ 'class' => 'editor form-control', 'rows' => 10 ]) !!}

		{!! Form::close() !!}

	</div>

@stop