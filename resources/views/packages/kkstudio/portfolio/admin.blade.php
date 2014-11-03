@extends('admin.template')

@section('content')

	<h3 class="pull-left">Projekty</h3>

	<div class=""> 

		<a href="{{ url('admin/portfolio/settings') }}" class="btn btn-default btn-lg pull-right" style="margin-left: 10px;">
			<i class="glyphicon glyphicon-cog"></i>
		</a>

		<a href="{{ url('admin/portfolio/create') }}" style="margin-left: 10px;" class="btn btn-lg btn-success pull-right">
			Stwórz nowy projekt
		</a>

		{!! Form::open([ 'url' => 'admin/menu/create']) !!}

			{!! Form::hidden('display_name', 'Portfolio') !!}
			{!! Form::hidden('route', 'portfolio') !!}
			{!! Form::hidden('params', json_encode([])) !!}

			{!! Form::submit('Dodaj do menu', [ 'class' => 'pull-right btn btn-lg btn-warning']) !!}

		{!! Form::close() !!}

		<div class="clearfix"></div>
		@if(count($portfolio))

		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Nazwa</th>
				<th></th>
				<th></th>
				<th>wyżej</th>
				<th>niżej</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($portfolio as $k => $project)
				<tr>
					<td>{{ $project->id }}</td>
					<td>{{ $project->name }}</td>
					<td>
						<a href="{{ url('admin/portfolio/' . $project->slug . '/edit') }}" class="btn btn-sm btn-primary">edytuj</a>
					</td>
					<td>
						<a href="{{ url('admin/portfolio/' . $project->slug . '/delete') }}" class="btn btn-sm btn-danger">usuń</a>
					</td>
					<td>
						@if($k-1 >= 0)
						{!! Form::open(['url' => 'admin/portfolio/swap']) !!}

							{!! Form::hidden('id1', $portfolio[$k-1]->id) !!}
							{!! Form::hidden('id2', $project->id) !!}

							{!! Form::submit('w górę', [ 'class' => 'btn-sm btn btn-success']) !!}

						{!! Form::close() !!}
						@endif
					</td>
					<td>
						@if($k+1 < count($portfolio))
						{!! Form::open(['url' => 'admin/portfolio/swap']) !!}

							{!! Form::hidden('id1', $project->id) !!}
							{!! Form::hidden('id2', $portfolio[$k+1]->id) !!}

							{!! Form::submit('w dół', [ 'class' => 'btn-sm btn btn-success']) !!}

						{!! Form::close() !!}
						@endif

					</td>
					<td>


						{!! Form::open([ 'url' => 'admin/menu/create']) !!}

							{!! Form::hidden('display_name', $project->name) !!}
							{!! Form::hidden('route', 'portfolio/{$slug}') !!}
							{!! Form::hidden('params', json_encode(['slug' => $project->slug])) !!}

							{!! Form::submit('Add to menu', [ 'class' => 'pull-right btn btn-sm btn-warning']) !!}

						{!! Form::close() !!}


					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p class="text-muted">Nie znaleziono projektów.</p>
		@endif

	</div>

@stop