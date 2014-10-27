@extends('admin.template')

@section('header')
    Info
@stop

@section('small')
    information about You and your company
@stop

@section('content')

	<div class=""> 

	<p class="text-muted">Themes can use this data to display information about You. When you're ready save changes anytime you want.</p>

	<div class="clearfix"></div> 

	{!! Form::open([ 'url' => 'admin/info', 'files' => 'true' ]) !!}

		{!! Form::submit('Save changes', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

		<div class="clearfix"></div>

		<br><br>

		<h3>{!! Form::label('avatar', 'Avatar') !!}</h3>

		<div class="fileinput fileinput-new" data-provides="fileinput">
		  <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
		    <img src="{{ m('Info')->getAvatar() }}" >
		  </div>
		  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
		  <div>
		    <span class="btn btn-default btn-file">
			    <span class="fileinput-new">Select image</span>
			    <span class="fileinput-exists">Change</span>		    
			    {!! Form::file('avatar', [ 'class' => 'form-control' ]) !!}
			    </span>
		    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
		  </div>
		</div>
		

		<h3>{!! Form::label('header', 'Header text') !!}</h3>

		{!! Form::textarea('header', module('Info')->header(), [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}

		<h3>{!! Form::label('about', 'About text') !!}</h3>

		{!! Form::textarea('about', module('Info')->about(), [ 'class' => 'form-control input-lg', 'rows' => 3 ]) !!}

		<h3>{!! Form::label('title', 'Page title') !!}</h3>

		{!! Form::textarea('title', module('Info')->title(), [ 'class' => 'form-control input-lg', 'rows' => 1 ]) !!}

		<h3>{!! Form::label('address', 'Your address') !!} <small>optional</small></h3>

		{!! Form::textarea('address', module('Info')->address(), [ 'class' => 'form-control input-lg', 'rows' => 3 ]) !!}

		{!! Form::submit('Save changes', [ 'class' => 'btn btn-lg btn-primary pull-right']) !!}

	{!! Form::close() !!}

		<br><br>

	</div>

@stop
