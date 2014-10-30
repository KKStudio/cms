@extends('admin.template')

@section('header')
    Info
@stop

@section('small')
    information about You and your company
@stop

@section('content')

	<h3 class="pull-left">Pages</h3>

	<div class=""> 

		<a href="{{ url('admin/page/create') }}" class="btn btn-lg btn-success pull-right">
			Create new page
		</a>

		<div class="clearfix"></div>
		@if(count($pages))

		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Slug</th>
				<th>Name</th>
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
						<a href="{{ url('admin/page/' . $page->slug . '/edit') }}" class="btn btn-sm btn-primary">edit</a>
					</td>
					<td>
						<a href="{{ url('admin/page/' . $page->slug . '/delete') }}" class="btn btn-sm btn-danger">delete</a>
					</td>
					<td>
						{!! Form::open([ 'url' => 'admin/menu/create']) !!}

							{!! Form::hidden('display_name', $page->name) !!}
							{!! Form::hidden('route', '{$slug}') !!}
							{!! Form::hidden('params', json_encode(['slug' => $page->slug])) !!}

							{!! Form::submit('add to menu', [ 'class' => 'btn btn-sm btn-warning']) !!}

						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p class="text-muted">No pages found.</p>
		@endif

	</div>

@stop