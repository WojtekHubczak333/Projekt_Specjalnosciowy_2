@extends('layouts.app')

@section('content')
    <h1>List of Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Add Author</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->first_name }}</td>
                <td>{{ $author->last_name }}</td>
                <td>
                    <a href="{{ route('authors.show', $author) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('authors.showWithBooks', $author) }}" class="btn btn-outline-info">Show with books</a>
                    <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
