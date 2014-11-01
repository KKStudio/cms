@extends('admin.template')

@section('content')

	<h3 class="pull-left">Global settings</h3>

	<div class=""> 

	{!! Form::open([ 'url' => 'admin/settings' ]) !!}

		{!! Form::submit('Save changes', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}


		<div class="clearfix"></div>

		<hr>

	
		<h3>{!! Form::label('language', 'Admin panel language') !!}</h3>
		<p class="text-muted">Choose a language for this panel</p>

		{!! Form::select('language', [ 'en' => 'english', 'pl' => 'polish'], \App\Settings::value('language', 'english'), [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}



	
		<h3>{!! Form::label('disqus', 'Disqus app key') !!}</h3>
		<p class="text-muted">When <a href="http://disqus.com" target="__blank">Disqus</a> key is valid, some modules use it for comments</p> 

		{!! Form::text('disqus', \App\Settings::value('disqus', ''), [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}


	{!! Form::close() !!}

		<br><br>

	</div>

@stop
