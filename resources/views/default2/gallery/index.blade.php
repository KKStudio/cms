@extends('default.template')

@section('content')


	<div class="container pt">

		@foreach($albums as $album)

		<a href="gallery/{{$album->slug}}">

			<img src="{{$album->getThumb()}}">

			<h4>{{$album->name}}</h4>

		</a><br><br>

		@endforeach

	</div>

@stop