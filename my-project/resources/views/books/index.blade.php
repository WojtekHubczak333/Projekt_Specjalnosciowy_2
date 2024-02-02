@extends('layouts.app')

@section('content')

    <h1>List of Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Publish Year</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->publish_year }}</td>
                    <td>{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $books->links('pagination::bootstrap-5') }}
    </div>
    <form action="{{ route('books.index') }}" method="GET" class="form-inline">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by book name">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
    
@endsection
