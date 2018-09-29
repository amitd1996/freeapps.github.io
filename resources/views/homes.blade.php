@extends('master')
@section('title','Home')

@section('content')

	<div class="row mt-3">
		<div class="col-sm-9">
			@if(count($posts)>0)
				@foreach( $posts->all() as $post )

			<div class="card border-info mt-3" style="background-color: #3498db;">
			  <div class="card-header text-white"><span class="sm-text font-weight-bold">[{{ ucwords(trans($post->admins->Category))}}] [{{ $post->Date}}] [LATEST VERSION]
				</span></div>
				{{-- status latest version --}}
			  <div class="card-body" style="background-color: #fff;">
			    <h4 class="card-title"><a href='{{ url("posts/{$post->id}") }}' style="text-decoration:none;">{{ ucwords(trans($post->Name))}} !</a></h4>
			    <blockquote class="blockquote mb-0">
						<p style="line-height:1.2em;height:3.6em;overflow:hidden;">{{ ucfirst(trans($post->Post)) }}</p>
						<a href="{{ url("posts/{$post->id}") }}" style="font-size:15px;">continue reading...</a>
					</blockquote>
			  </div>
			</div>
			<hr>
				@endforeach
			@endif
		{{ $posts->links() }}

		</div>
		<div class="col-md-3 mt-3 mb-3">
			<div>
				<div class="card border-success">
			  <div class="card-header"><h3>Popular Post</h3></div>
			  <div class="card-body">
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
			    <p>1.jdjjdjdjd</p>
					<p>1.jdjjdjdjd</p>

					
				{{-- dd(asset('/public/images/{{ $post->Images}}'))
			<img src="asset('/public/images/{{ $post->Images}}')" rel="stylesheet">" alt=""> --}}
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
