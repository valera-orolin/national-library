<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Event;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('books.index', [
            'books' => Book::latest()->filter($request->all())->paginate(15)
        ]);
    }

    /**
     * Display the specified book.
     *
     * @param  Book  $book
     * @return \Illuminate\View\View
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Show the form for editing the specified book.
     *
     * @param  Book  $book
     * @return \Illuminate\View\View
     */
    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified book in storage.
     *
     * @param  Request  $request
     * @param  Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Remove the specified book from storage.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
