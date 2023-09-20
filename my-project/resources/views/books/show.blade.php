@extends('layouts.app')

@section('content')
    <h1>Book Details</h1>
    <p><strong>Title:</strong> {{ $book->title }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
    <p><strong>Publish Year:</strong> {{ $book->publish_year }}</p>
    <p><strong>Author:</strong> {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-primary">Back to List</a>
@endsection
