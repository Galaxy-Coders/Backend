<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;

class PageController extends Controller
{
    // public function __construct() {
    //     $this->middleware("auth")->except('index');
    // }
    public function adminPage(){
        return view("adminPage.index");
    }
    public function index(){
        $books = Book::all();
        $authors = count(Author::all());
        $users = User::all();
        $files = Storage::allFiles('books-audio');
        return view("index")->with(compact('books', 'authors', 'users', 'files'));
    }
    public function authorsPage(){
        $authors = Author::all();
        return view("authors")->with('authors', $authors);
    }
    public function booksPage(){
        $books = Book::all();
        return view("booksPage")->with('books', $books);
    }
    public function signin(){
        return view("signin");
    }
    public function signup(){
        return view("signup");
    }
    public function bookShelf($id){
        $book = Book::find($id);
        return view("bookShelf")->with('book', $book);
    }
    public function profileEdit($id){
        $user = Book::find($id);
        return view("profileEdit")->with('user', $user);
    }
}