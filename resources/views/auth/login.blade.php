@foreach($errors->all() as $error) 
	
	<li>{{ $error }}</li>

@endforeach

{!! Form::open(['url' => 'auth/login']) !!}

	{!! Form::email('email', '', ['class' => 'form-control']) !!}
	{!! Form::password('password', ['class' => 'form-control']) !!}

	{!! Form::submit('log in', ['class' => 'btn btn-primary pull-right']) !!}

{!! Form::close() !!}