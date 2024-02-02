<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/books/{book}/show-with-author', 'App\Http\Controllers\BookController@showWithAuthor')->name('books.showWithAuthor');
Route::get('/authors/{author}/show-with-books', 'App\Http\Controllers\AuthorController@showWithBooks')->name('authors.showWithBooks');
Route::get('/add-random-author', [AuthorController::class, 'addRandomAuthor']);
Route::get('/add-random-book', [BookController::class, 'addRandomBook']);
Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);

