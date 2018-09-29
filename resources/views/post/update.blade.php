@extends('layouts.master')
@section('title','Update')

@section('content')

	@if(count($errors)>0)
		@foreach($errors->all() as $error)
			<li style="list-style: none;" class="alert alert-danger col-md-6 mt-5">{{ $error }}</li>
		@endforeach
	@endif

	<form action="{{ url('postedit',array($posts->id)) }}" method="get" class="mt-5" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Name</label>
			<input type="name" name="Name" value="{{ $posts->Name }}" class="form-control col-md-6">
		</div>
		<div class="form-group">
			<label for="">Post</label>
			<input type="name" name="Post" value="{{ $posts->Post }}" class="form-control col-md-6">
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="text" id="datepicker" name="Date" class="form-control col-md-6" value="{{ $posts->Date }}">
		</div>
		<div class="form-group">
				<label for="">Download Link</label>
				<input type="text" name="Dlink" value="{{ $posts->Dlink }}" class="form-control col-md-6">
		</div>
		<div class="form-group">
				<label for="">Download Link Name</label>
				<input type="text" name="Dlinkname" value="{{ $posts->Dlinkname }}" class="form-control col-md-6">
		</div>
		<div class="form-group">
			<label for="">Download Link Size</label>
			<input type="text" name="Dlinksize" value="{{ $posts->Dlinksize }}" class="form-control col-md-6">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="Image" value="{{ $posts->Image }}">
		</div>
		<div class="form-group">
			<select name="admin_id" id="">
				<option value="1" <?php if ($posts->admin_id == '1') {
					echo "selected";
				} ?> >Browser</option>
				<option value="2" <?php if ($posts->admin_id == '2') {
					echo "selected";
				} ?> >Emulator</option>
				<option value="3" <?php if ($posts->admin_id == '3') {
					echo "selected";
				} ?> >Antivirus</option>
				<option value="4" <?php if ($posts->admin_id == '4') {
					echo "selected";
				} ?> >Programming Software</option>
				<option value="5" <?php if ($posts->admin_id == '5') {
					echo "selected";
				} ?> >Android Apps</option>
				<option value="6" <?php if ($posts->admin_id == '6') {
					echo "selected";
				} ?> >Uninstaller</option>
				<option value="7" <?php if ($posts->admin_id == '7') {
					echo "selected";
				} ?> >Anti Malware</option>
				<option value="8" <?php if ($posts->admin_id == '8') {
						echo "selected";
					} ?> >Games Emulator</option>
			</select>
		</div>
		<div>
			<button class="btn btn-success" type="submit" name="submit">Submit</button>
		</div>
	</form>	

@stop