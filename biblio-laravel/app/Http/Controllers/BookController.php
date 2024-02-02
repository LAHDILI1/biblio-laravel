<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        // dd($books); // Uncomment for debugging
        return view("books.index", compact('books'));
        //, compact('books')
    }
    public function reservation(){
        $books = Book::all();
        // dd($books); // Uncomment for debugging
        return view("reservations.index", compact('books'));
        //, compact('books')
    }

    public function create(){
        return view("books.create");
    }
    public function store(Book $book , Request $request){
        
        $data = $request->validate([
            'title' => "required",
            'author' => "required",
            'genre' => "required",
            'description' => "required",
            'price' => "required|decimal:0,2",
            'publication_year' => "required",
            'total_copies' => "required",
            'available_copies' => "required"
        ]);

        $book::create($data);
        return redirect()->route("books");
    }
    public function edit(Book $book) {
       
        return view('books.edit', ['book' => $book]);
    }
    public function update(Book $book, Request $request) {
        $data = $request->validate([
            'title' => "required",
            'author' => "required",
            'genre' => "required",
            'description' => "required",
            'price' => "required|decimal:0,2",
            'publication_year' => "required",
            'total_copies' => "required",
            'available_copies' => "required"
        ]);

        $book->update($data);
        return redirect(route("books"))->with('success', "Book successfully updated");
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect(route("books"))->with('success', "Book successfully deleted"); 
    }
    
    
}
