@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}">
        </div>
        <!-- Other fields similar to create.blade.php -->
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
