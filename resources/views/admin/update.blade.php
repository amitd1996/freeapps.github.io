@extends('layouts.master')
@section('title','Update')

@section('content')

	@if(count($errors)>0)
		@foreach($errors->all() as $error)
			<li style="list-style: none;" class="alert alert-danger col-md-6 mt-5">{{ $error }}</li>
		@endforeach
	@endif

	<form action="{{ url('adminedit',array($adins->id)) }}" method="get" class="mt-5">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Category</label>
			<input type="name" name="Category" value="{{ $posts->Category }}" class="form-control col-md-6">
		</div><!--
		<div class="form-group">
			<label for="">Post</label>
			<input type="name" name="Post" value="{{ $posts->Post }}" class="form-control col-md-6">
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="text" id="datepicker" name="Date" class="form-control col-md-6">
		</div> -->
		<div>
			<button class="btn btn-success" type="submit" name="submit">Submit</button>
		</div>
	</form>



@stop
