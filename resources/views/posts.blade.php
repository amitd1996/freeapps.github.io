@extends('master')
@section('title','Post')
@section('content')

	<div class="row mt-5">
		<div class="col-sm-9">

			<div class="card">
				<div style="font-size: 12px;font-weight: bold;" class="mt-3 ml-3">
					<nav>
						<a class="breadcrumb-item">You are here :- </a>
						<a class="breadcrumb-item" href="#">Home</a>
						<!-- <a class="breadcrumb-item" href="#"></a> -->
						<span class="breadcrumb-item active">Post</span>
					</nav>
				</div>
				<hr>

			<div class="mt-2 ml-4">
				{{-- <h3 class="animated slideInDown">Hiii</h3> --}}
					<h3><b>{{ ucwords(trans($posts->Name))}}</b></h3>
			</div>


			<div class="m-3">
					<p>{{ $posts->Post}}</p>
			</div>
			</div>
			<hr>
			<div class="col-md-9">
				<p style="font-weight: bold;font-size: 13px;">Download & Links :-</p>
				<div class="breadcrumb"><a href="{{ $posts->Dlink }}">{{ $posts->Dlinkname }}  [{{ $posts->Dlinksize }}]</a></div>
				<img src="/public/{{ $posts->Image }}" alt="">
				<br>{{ $posts->Image }}
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<div>
				<div class="card border-success">
			  <div class="card-header"><h3>Popular Post</h3></div>
			  <div class="card-body">
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			  </div>
			</div>
			</div>
			<div>
				<div>
				<div class="card border-success mt-3">
			  <div class="card-header"><h3>Latest Post</h3></div>
			  <div class="card-body">
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			  </div>
			</div>
			</div>
			</div>
		</div>
	</div>

@stop
