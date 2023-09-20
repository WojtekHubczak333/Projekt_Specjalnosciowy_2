@extends('layouts.app')

@section('content')
    <h1>Author Details</h1>
    <p><strong>Author Name:</strong> {{ $author->first_name }} {{ $author->last_name }}</p>
    <h2>Books by {{ $author->first_name }} {{ $author->last_name }}</h2>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
    <a href="{{ route('authors.index') }}" class="btn btn-primary">Back to Authors</a>
@endsection
