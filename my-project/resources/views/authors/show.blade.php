@extends('layouts.app')

@section('content')
    <h1>Author Details</h1>
    <p><strong>First Name:</strong> {{ $author->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $author->last_name }}</p>
    <a href="{{ route('authors.index') }}" class="btn btn-primary">Back to List</a>
@endsection
