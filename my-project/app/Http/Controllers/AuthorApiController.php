<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorApiController extends Controller
{
    public function post(Request $request)
    {
        // Walidacja danych wejściowych
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        // Utwórz nowego autora
        $author = Author::create($validatedData);

        return response()->json(['message' => 'Autor został dodany', 'author' => $author], 201);
    }



    public function delete(Request $request,Author $author)
    {
        // Kod do usuwania autora
        $author->delete();

        return response()->json(['message' => 'Autor został usunięty'], 200);
    }

    public function patch(Request $request, Author $author)
    {
        // Walidacja danych wejściowych
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        // Aktualizuj dane autora
        $author->update($validatedData);

        return response()->json(['message' => 'Autor został zaktualizowany', 'author' => $author], 200);
    }

    public function put(Request $request, Author $author)
    {
        // Walidacja danych wejściowych
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        // Aktualizuj dane autora
        $author->update($validatedData);

        return response()->json(['message' => 'Autor został zaktualizowany', 'author' => $author], 200);
    }


    public function get(Request $request)
    {
        $author = Author::get();

        return response()->json(['author' => $author], 200);
    }
    public function getId(Request $request, Author $author)
    {
        return response()->json(['author' => $author], 200);
    }

}
