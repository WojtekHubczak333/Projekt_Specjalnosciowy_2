<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
public function index(Request $request)
{
    $query = Author::query();

    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('first_name', 'like', "%$searchTerm%")
              ->orWhere('last_name', 'like', "%$searchTerm%");
    }

    $authors = $query->paginate(5);

    return view('authors.index', compact('authors'));
}
public function addRandomAuthor()
{
    $faker = \Faker\Factory::create();

   
    $newAuthor = new Author([
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ]);

   
    $newAuthor->save();

   
    return redirect()->route('authors.index');
}

public function create()
{
    return view('authors.create');
}

public function store(Request $request)
{
    Author::create($request->all());
    return redirect()->route('authors.index');
}

public function showWithBooks(Author $author)
{
    $books = $author->books; 

    return view('authors.author_with_books', compact('author', 'books'));
}
public function show(Author $author)
{
    return view('authors.show', compact('author'));
}

public function edit(Author $author)
{
    return view('authors.edit', compact('author'));
}

public function update(Request $request, Author $author)
{
    $author->update($request->all());
    return redirect()->route('authors.index');
}

public function destroy(Author $author)
{
    $author->delete();
    return redirect()->route('authors.index');
}


}
