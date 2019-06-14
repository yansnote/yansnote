@extends('admin.layouts.default')

@section('content')
    
<p>Name - {{ $author->name }}</p>
<p>Email - {{ $author->email }}</p>
<p>Pseudonym - {{ $author->authors->pseudonym }}</p>
<p>Slug - {{ $author->authors->slug }}</p>

<a href="{{ route('admin.author.edit', $author->authors->id) }}">Update Profile</a>

@endsection