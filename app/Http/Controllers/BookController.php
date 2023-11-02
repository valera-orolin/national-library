<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $books = Book::latest()->filter($request->all())->paginate(15);
    
        foreach ($books as $book) {
            $book->averageRating = $book->userRatings()->avg('rating');
            $book->ratingCount = $book->userRatings()->count();
        }

        return view('books.index', [
            'books' => $books
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
        $book->averageRating = $book->userRatings()->avg('rating');
        $book->ratingCount = $book->userRatings()->count();

        return view('books.show', [
            'book' => $book,
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

        if ($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('img', 'public');
        }

        Book::create($formFields);

        flash('Book has been created.');

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
        $book->averageRating = $book->userRatings()->avg('rating');
        $book->ratingCount = $book->userRatings()->count();

        return view('books.edit', [
            'book' => $book,
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

        if ($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('img', 'public');
            self::destroyCover($book);
        }

        $book->update($formFields);

        flash('Book has been updated.');

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
        self::destroyCover($book);
        $book->delete();
        flash('Book has been deleted.');
        return redirect('/books');
    }

    /**
     * Remove the cover of the book from storage.
     *
     * @param  Book  $event
     */
    private static function destroyCover(Book $book) 
    {
        if ($book->cover) {
            Storage::disk('public')->delete($book->cover);
        }
    }
}
