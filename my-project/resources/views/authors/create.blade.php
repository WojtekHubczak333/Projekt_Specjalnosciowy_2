@extends('layouts.app')

@section('content')
    <h1>Add an Author</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
