@extends('admin.template')

@section('content')

	<h3 class="pull-left">Strony</h3>

	<div class=""> 

		<a href="{{ url('admin/page/settings') }}" class="btn btn-default btn-lg pull-right" style="margin-left: 10px;">
			<i class="glyphicon glyphicon-cog"></i>
		</a>

		<a href="{{ url('admin/page/create') }}" class="btn btn-lg btn-success pull-right">
			Stwórz nową stronę
		</a>

		<div class="clearfix"></div>
		@if(count($pages))

		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Skrót</th>
				<th>Nazwa</th>
				<th></th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				@foreach($pages as $page)
				<tr>
					<td>{{ $page->id }}</td>
					<td>{{ $page->slug }}</td>
					<td>{{ $page->name }}</td>
					<td>
						<a href="{{ url('admin/page/' . $page->slug . '/edit') }}" class="btn btn-sm btn-primary">edytuj</a>
					</td>
					<td>
						<a href="{{ url('admin/page/' . $page->slug . '/delete') }}" class="btn btn-sm btn-danger">usuń</a>
					</td>
					<td>
						{!! Form::open([ 'url' => 'admin/menu/create']) !!}

							{!! Form::hidden('display_name', $page->name) !!}
							{!! Form::hidden('route', '{$slug}') !!}
							{!! Form::hidden('params', json_encode(['slug' => $page->slug])) !!}

							{!! Form::submit('Dodaj do menu', [ 'class' => 'btn btn-sm btn-warning']) !!}

						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p class="text-muted">Brak dodanych stron.</p>
		@endif

	</div>

@stop