@extends('layouts.master')
@section('title','AdminView')

@section('content')

	@if(session('info'))
		<li class="alert alert-success col-md-6 m-5" style="list-style: none;">{{ session('info') }}</li>
	@endif

	<div class="row">
		<div class="col-md-8">
				<table class="table m-5">
						<thead>
							<tr>
								<th>ID</th>
								<th>Category</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							@if(count($admins)>0)
								@foreach($admins->all() as $admin)
				
							<tr>
								<td>{{ $i++ }}</td>
								<td>{{ $admin->Category }}</td>
								<td><a href='{{ url("adminread/{$admin->id}") }}' class="btn btn-outline-info">Read</a>
									<a href='{{ url("adminupdate/{$admin->id}") }}' class="btn btn-outline-primary">Edit</a>
									<a href='{{ url("admindelete/{$admin->id}") }}' class="btn btn-outline-danger">Delete</a></td>
							</tr>
				
								@endforeach
							@endif
						</tbody>
					</table>
		</div>
	</div>

	

@stop