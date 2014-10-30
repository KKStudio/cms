@extends('admin.template')

@section('content')

	<h3 class="pull-left">Delete project</h3>

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/portfolio/' . $project->slug . '/delete']) !!}

			{!! Form::submit('Delete project', [ 'class' => 'btn btn-lg btn-danger pull-right']) !!}

			<div class="clearfix"></div>

			<p>Confirm deleting project <b>{{ $project->name }}</b> by clicking the button above.</p>

		{!! Form::close() !!}

	</div>

@stop