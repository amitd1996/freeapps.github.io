@extends('layouts.master')
@section('title','View')

@section('content')

	@if(session('info'))
		<li class="alert alert-success col-md-6 mt-5 ml-5" style="list-style: none;">{{ session('info') }}</li>
	@endif

	<div class="row">
		<div class="col-sm-8">
			<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Category</th>
				<th>Image Name</th>
				<th>Download Link</th>
				<th>Download Link Name</th>
				<th>Download Link Size</th>
				<th>Date</th>
				<th>Post</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			@if(count($posts)>0)
				@foreach($posts->all() as $post)

			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $post->Name }}</td>
				<td class="animated shake">{{ $post->admins->Category }}</td>
				<td>{{ $post->Date }}</td>
				<td>{{ $post->Dlink }}</td>
				<td>{{ $post->Dlinkname }}</td>
				<td>{{ $post->Dlinksize }}</td>
				<td>{{ $post->Image }}</td>
				<td class="d-inline-block text-truncate" style="max-width: 150px;">{{ $post->Post }}</td>
				<td><a href='{{ url("postread/{$post->id}") }}' class="btn btn-outline-info btn-sm">Read</a>
					<a href='{{ url("postupdate/{$post->id}") }}' class="btn btn-outline-primary btn-sm">Edit</a>
					<a href='{{ url("postdelete/{$post->id}") }}' class="btn btn-outline-danger btn-sm">Delete</a></td>
			</tr>

				@endforeach
			@endif
		</tbody>
	</table>
		</div>
	</div>	

@stop