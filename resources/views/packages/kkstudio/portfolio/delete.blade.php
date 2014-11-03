@extends('admin.template')

@section('content')

	<h3 class="pull-left">Usuń projekt</h3>

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/portfolio/' . $project->slug . '/delete']) !!}

			{!! Form::submit('Potwierdź usunięcie', [ 'class' => 'btn btn-lg btn-danger pull-right']) !!}

			<div class="clearfix"></div>

			<p>Potwierdź usunięcie projektu <b>{{ $project->name }}</b> klikając na przycisk powyżej.</p>

		{!! Form::close() !!}

	</div>

@stop