<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index(Request $request)
{
    $query = Book::query();

    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('title', 'like', "%$searchTerm%")
              ->orWhere('description', 'like', "%$searchTerm%");
    }

    $books = $query->paginate(5);

    return view('books.index', compact('books'));
}
    public function addRandomBook()
    {
        $faker = \Faker\Factory::create();
    
    
        $authors = Author::all();
    
       
        $randomAuthor = $authors->random();
    
        
        $newBook = new Book([
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'publish_year' => $faker->year,
            'author_id' => $randomAuthor->id,
        ]);
    
       
        $newBook->save();
    
        
        return redirect()->route('books.index');
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
    public function showWithAuthor(Book $book)
    {
        return view('books.show_with_author', compact('book'));
    }
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
