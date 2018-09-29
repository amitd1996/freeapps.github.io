@extends('layouts.master')
@section('title','Create')

@section('content')

	<div class="mt-5">
		@if(count($errors)>0)
			@foreach($errors->all() as $error)
				<li style="list-style: none;" class="alert alert-danger col-md-6 ml-4">{{ $error }}</li>
			@endforeach
		@endif
	</div>

	<div class="row">
		<div class="col-md-8">
				<form action="{{ url('postinsert') }}" id="register-form" method="post" class="ml-5 mb-5" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">Name</label>
						<input type="name" name="Name" class="form-control col-md-6" required>
					</div>
					<div class="form-group">
						<label for="">Post</label>
						<input type="text" name="Post" class="form-control col-md-6" required>
					</div>
					<div class="form-group">
						<label for="">Date</label>
						<input type="text" id="datepicker" name="Date" class="form-control col-md-6" required autocomplete="off">
					</div>
					<div class="form-group">
						<label for="">Download Link</label>
						<input type="text" name="Dlink" class="form-control col-md-6" required>
					</div>
					<div class="form-group">
							<label for="">Download Link Name</label>
							<input type="text" name="Dlinkname" class="form-control col-md-6" required>
					</div>
					<div class="form-group">
						<label for="">Download Link Size</label>
						<input type="text" name="Dlinksize" class="form-control col-md-6" required>
					</div>
					<div class="form-group">
						<label for="">Image</label>
						<input type="file" name="Image" required>
					</div>
					<div class="form-group">
						<select name="admin_id" id="" required>
							
							<option value="1">Browser</option>
							<option value="2">Emulator</option>
							<option value="3">Antivirus</option>
							<option value="4">Programming Software</option>
							<option value="5">Android Apps</option>
							<option value="6">Uninstaller</option>
							<option value="7">Anti Malware</option>
							<option value="8">Games Emulator</option>
						</select>
					</div>
			
						<button class="btn btn-success" type="submit" name="submit">Submit</button>
					</div>
				</form>
		</div>
	</div>

@stop