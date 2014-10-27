@extends('admin.template')

@section('header')
    Info
@stop

@section('small')
    information about You and your company
@stop

@section('content')

	<div class=""> 

		{!! Form::open([ 'url' => 'admin/page/' . $page->slug . '/edit']) !!}

			{!! Form::submit('Edit page', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

			<div class="clearfix"></div>

			<h3>{!! Form::label('name', 'Name') !!}</h3>
			{!! Form::text('name', $page->name, [ 'class' => 'form-control' ]) !!}

			<h3>{!! Form::label('content', 'Page content') !!}</h3>
			{!! Form::textarea('content', $page->content, [ 'class' => 'form-control', 'rows' => 10 ]) !!}

		{!! Form::close() !!}

	</div>

@stop