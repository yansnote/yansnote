@extends('layouts.admin')

@section('content')
	
	<form action="{{ route('authors.update', $model->id) }}" method="PATCH" enctype="multipart/form-data">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label for="name">Author Name</label>
			<input type="text" name="name" value="{{ $model->pseudonym }}" class="form-control">
		</div> <!-- end of form-group -->

		<div class="form-group">
			<label for="slug">Slug</label>
			<input type="text" name="slug" value="{{ $model->slug }}" class="form-control">
		</div> <!-- end of form-group -->

		<input type="file" name="poster">

		<div class="form-group">
			<label for="bio">Biography</label>
			<textarea name="bio" cols="30" rows="10" class="form-control"></textarea>
		</div> <!-- end of form-group -->

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection