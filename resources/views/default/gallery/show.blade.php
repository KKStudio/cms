@extends('default.template')

@section('content')


	<div class="container pt">

		<img src="{{$album->getThumb()}}">

			<h4>{{$album->name}}</h4>

	</div>
	<div class="container pt">

		@foreach($pictures as $picture)

			<img src="{{$picture->getThumb()}}">

			<br><br>

		@endforeach

	</div>

@stop