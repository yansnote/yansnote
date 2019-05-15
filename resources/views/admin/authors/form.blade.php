@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('authors.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Author Name</label>
			<input type="text" name="name" class="form-control">
		</div> <!-- end of form-group -->
		<div class="form-group">
			<label for="slug">Slug</label>
			<input type="text" name="slug" class="form-control">
		</div> <!-- end of form-group -->
		<div class="form-group">
			<label for="bio">Biography</label>
			<textarea name="bio" cols="30" rows="10" class="form-control"></textarea>
		</div> <!-- end of form-group -->

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection