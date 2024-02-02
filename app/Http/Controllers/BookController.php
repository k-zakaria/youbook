<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();

        return view('book.index', compact('book'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'description' => 'required',
        ]);

        book::create($request->all());  
        return redirect()->route('books.index')->with('success', 'Post created successfully.');
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'description' => 'required',
        ]);

        $book = Book::find($id);
       
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Post updated successfully.');
    }
    
    public function edit($id)
    {
        $book = Book::find($id);

        return view('book.edit', compact('book'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function destroy($id)
    {

        $book = Book::where('id',$id)->first();
        $book->delete();

        return redirect()->route('books.index')->with('success', 'book deleted successfully');
    }


}
