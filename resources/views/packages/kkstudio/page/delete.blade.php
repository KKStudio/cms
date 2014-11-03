@extends('admin.template')

@section('content')

	<h3 class="pull-left">Usuń stronę</h3>

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/page/' . $page->slug . '/delete']) !!}

			{!! Form::submit('Potwierdź usunięcie', [ 'class' => 'btn btn-lg btn-danger pull-right']) !!}

			<div class="clearfix"></div>

			<p>Potwierdź usunięcie strony <b>{{ $page->name }}</b> klikając przycisk powyżej.</p>

		{!! Form::close() !!}

	</div>

@stop