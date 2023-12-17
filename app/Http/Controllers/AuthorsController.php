<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Storage;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view("adminPage.authors.index")->with("authors", $authors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminPage.authors.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('authors-img');
        };
        Author::create([
            "image" => $path ?? null,
            "name" => $request->name,
            "birthDay" => $request->birthDay,
            "deathDay" => $request->deathDay,
            "bio" => $request->bio,
            "creativityBio" => $request->creativityBio,
            "country" => $request->country
        ]);
        return redirect()->route("authors.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::find(2);
        return view('authorShow')->with('author', $author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::find($id);
        return view("adminPage.authors.edit")->with("author", $author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        if ($request->hasFile('cover')) {
            if(isset($author->image)) {
                Storage::delete($author->image);
            };
        } else {
            $path = $author->image;
        }
        $author->update([
            "image" => $path ?? null,
            "name" => $request->name,
            "birthDay" => $request->birthDay,
            "deathDay" => $request->deathDay,
            "bio" => $request->bio,
            "creativityBio" => $request->creativityBio,
            "country" => $request->country
        ]);
        return redirect()->route("authors.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);
        $author->delete();
        if(isset($author->image)) {
            Storage::delete($author->image);
        }
        return redirect()->route("authors.index");
    }
}
