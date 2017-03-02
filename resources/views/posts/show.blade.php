@extends('partials.master')

@section('content')

	<div class="col-sm-8">

		<h1>{{ $post->title }}</h1>

		<p>

			{{ $post->body }}

		</p>

	</div>
@endsection