@extends('layouts.app')

@section('content')
    <h1>Edit Author</h1>
    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $author->first_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $author->last_name }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
