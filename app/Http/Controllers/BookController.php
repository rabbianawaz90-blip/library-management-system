<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $books = Book::with('category')->get();

    return view('books.index', compact('books'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
{
    $categories = Category::all();

    return view('books.create', compact('categories'));
}  

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required',
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'price' => 'required|numeric|min:1'
    ]);

    Book::create([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'author' => $request->author,
        'price' => $request->price,
    ]);

    return redirect()->route('books.index')
                     ->with('success', 'Book Added Successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Book $book)
{
    $categories = Category::all();

    return view('books.edit', compact('book', 'categories'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
{
    $request->validate([
        'category_id' => 'required',
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'price' => 'required|numeric|min:1'
    ]);

    $book->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'author' => $request->author,
        'price' => $request->price,
    ]);

    return redirect()->route('books.index')
                     ->with('success', 'Book Updated Successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index')
                     ->with('success', 'Book Deleted Successfully.');
}
}
