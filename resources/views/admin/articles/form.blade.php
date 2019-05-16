@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('articles.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
		</div> <!-- end of form-group -->
		<div class="form-group">
			<label for="slug">Slug</label>
			<input type="text" name="slug" class="form-control">
		</div> <!-- end of form-group -->
		<div class="form-group">
			<label for="excerpt">Excerpt</label>
			<textarea name="excerpt" cols="30" rows="10" class="form-control"></textarea>
		</div> <!-- end of form-group -->
		<div class="form-group">
			<label for="content">Content</label>
			<textarea name="content" cols="40" rows="20" class="form-control"></textarea>
		</div> <!-- end of form-group -->

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection