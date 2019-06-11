@extends('layouts.admin')

@section('content')

    Pseudonym - {{ $author->pseudonym }} <br>
    Slug - {{ $author->slug }} <br>
    Email - {{ $author->email }}

<a href="{{ route('authors.edit', $author->id) }}">Edit</a>

@endsection