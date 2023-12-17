<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Storage;

class BooksApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('book-cover');
        };
        Book::create([
            "cover" => $path ?? null,
            "title"=> $request->title,
            "author"=> $request->author,
            "pages"=> $request->pages,
            "date"=> $request->date,
            "ganre"=> $request->ganre,
            "about"=> $request->about
        ]);
        return response(['success'=>'create']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return response($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        if ($request->hasFile('cover')) {
            if(isset($book->cover)) {
                Storage::delete($book->cover);
            }
            $path = $request->file('cover')->store('book-cover');
        };
        $book->update([
            "cover" => $path ?? null,
            "title" => $request->title,
            "author" => $request->author,
            "pages" => $request->pages,
            "date" => $request->date,
            "ganre" => $request->ganre,
            "about" => $request->about
        ]);
        return response(["success"=> "edit"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        if(isset($book->photo)) {
            Storage::delete($book->photo);
        }
        return response(["success"=> "delete"]);
    }
}
