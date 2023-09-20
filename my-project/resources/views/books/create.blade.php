@extends('layouts.app')

@section('content')
    <h1>Add a Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="publish_year">Publish Year:</label>
            <input type="text" name="publish_year" id="publish_year" class="form-control">
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select name="author_id" id="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
