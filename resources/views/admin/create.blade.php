@extends('layouts.master')
@section('title','Create')

@section('content')

	@auth

	@if(count($errors)>0)
		@foreach($errors->all() as $error)
			<li style="list-style: none;" class="alert alert-danger col-md-6 mt-5">{{ $error }}</li>
		@endforeach
	@endif

	<div class="row">
		<div class="col-md-9">
				<form action="{{ url('admininsert') }}" id="register-form" method="post" class="m-5">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Category</label>
							<input type="name" name="Category" class="form-control col-md-6" required>
						</div><!--
						<div class="form-group">
							<label for="">Post</label>
							<input type="text" name="Post" class="form-control col-md-6"">
						</div>
						<div class="form-group">
							<label for="">Date</label>
							<input type="text" id="datepicker" name="Date" class="form-control col-md-6"">
						</div>
						<div class="form-group">
							<label for="">Download Link</label>
							<input type="text" name="Dlink" class="form-control col-md-6"">
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="Image">
						</div>
						<div class="form-group">
							<select name="admin_id" id="">
								<option value="1">Browser</option>
								<option value="2">Emulator</option>
								<option value="3">Antivirus</option>
								<option value="4">Programming Software</option>
							</select>
						</div> -->
						<div>
							<button class="btn btn-success" type="submit" name="submit">Submit</button>
						</div>
					</form>
		</div>
	</div>

	@else
	<script>window.location='{{ url('homes') }}'</script>
	@endauth
@stop
