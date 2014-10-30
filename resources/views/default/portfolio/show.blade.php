@extends('default.template')

@section('content')


	<div class="container pt">

		<img src="{{$project->getThumb()}}">

			<h4>{{$project->name}}</h4>

	</div>

@stop