@extends('admin.template')

@section('content')

	<h3 class="pull-left">Delete page</h3>

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/page/' . $page->slug . '/delete']) !!}

			{!! Form::submit('Delete page', [ 'class' => 'btn btn-lg btn-danger pull-right']) !!}

			<div class="clearfix"></div>

			<p>Confirm deleting page <b>{{ $page->name }}</b> by clicking the button above.</p>

		{!! Form::close() !!}

	</div>

@stop