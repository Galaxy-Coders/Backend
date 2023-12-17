<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view("adminPage.index")->with("books", $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminPage.books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('book-cover');
        }
        if ($request->hasFile('document')) {
            $pathD = $request->file('document')->store('books-document');
        }
        if ($request->has('audio')) {
            $file = $request->audio;
            $pathA = $request->file('audio')->storeAs('books-audio', $file->getClientOriginalName());
        }
        Book::create([
            "cover" => $path ?? null,
            "title" => $request->title,
            "author" => $request->author,
            "pages" => $request->pages,
            "date" => $request->date,
            "ganre" => $request->ganre,
            "about" => $request->about,
            "document" => $pathD ?? null,
            "audio" => $pathA ?? null
        ]);
        return redirect()->route("adminPage");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('bookShow')->with(compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view("adminPage.books.edit")->with("book", $book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        if ($request->hasFile('cover')) {
            if(isset($book->cover)) {
                Storage::delete($book->cover);
            };
            $path = $request->file('cover')->store('book-cover');
        }
        if ($request->hasFile('audio')) {
            if(isset($book->audio)) {
                Storage::delete($book->audio);
            };
            $pathA = $request->file('audio')->store('books-audio');
        }
        if ($request->hasFile('document')) {
            if(isset($book->document)) {
                Storage::delete($book->document);
            };
            $pathD = $request->file('document')->store('books-document');
        }
        $book->update([
            "cover" => $path ?? $book->cover,
            "title" => $request->title,
            "author" => $request->author,
            "pages" => $request->pages,
            "date" => $request->date,
            "ganre" => $request->ganre,
            "about" => $request->about,
            "audio" => $pathA ?? $book->audio,
            "document" => $pathD ?? $book->document
        ]);
        return redirect()->route("adminPage");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        if(isset($book->cover)) {
            Storage::delete($book->cover);
        }
        if(isset($book->audio)) {
            Storage::delete($book->audio);
        }
        if(isset($book->document)) {
            Storage::delete($book->document);
        }
        return redirect()->route("adminPage");
    }
}
