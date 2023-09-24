<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Event;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return view('books.index', [
            'books' => Book::latest()->filter($request->all())->paginate(15)
        ]);
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'genres' => 'required',
            'release_date' => 'required',
            'is_available' => 'boolean',
            'description' => 'required'
        ]);

        $formFields['is_available'] = $request->has('is_available');

        Book::create($formFields);

        return redirect('/books');
    }

    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book
        ]);
    }

    public function update(Request $request, Book $book) 
    {
        $formFields = $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'genres' => 'required',
            'release_date' => 'required',
            'is_available' => 'boolean',
            'description' => 'required'
        ]);

        $formFields['is_available'] = $request->has('is_available');

        $book->update($formFields);

        return back();
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
