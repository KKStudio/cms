@extends('default.template')

@section('content')


	<div class="container pt">

		@foreach($projects as $project)

		<a href="portfolio/{{$project->slug}}">

			<img src="{{$project->getThumb()}}">

			<h4>{{$project->name}}</h4>

		</a><br><br>

		@endforeach

	</div>

@stop