@extends('partials.master')

@section('content')

	<div class="col-sm-8">

		<h1>Publish A Post</h1>
		
		<hr>

		<form method="POST" action="/posts">

		  <div class="form-group">

		    <label for="title">Title:</label>

		    <input type="text" class="form-control" id="title" name="title">

		  </div>

		  <div class="form-group">

		    <label for="body">Body</label>

			<textarea class="form-control" id="body" name="body">
				
			</textarea>
		  
		  </div>

			@include('partials.errors')

			{{ csrf_field() }}
		  <button type="submit" class="btn btn-primary">Publish</button>

		</form>
		
	</div>

@endsection