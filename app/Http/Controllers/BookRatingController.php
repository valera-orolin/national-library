<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookRatingController extends Controller
{
    /**
     * Store a newly created or updated book rating in storage.
     *
     * @param  Request  $request
     * @param  Book     $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Book $book) 
    {
        $formFields = $request->validate([
            'rating' => 'required|integer|min:1|max:5'
        ]);

        $userId = Auth::id();
        $bookId = $book->id;

        $rating = BookRating::where('user_id', $userId)
                            ->where('book_id', $bookId)
                            ->first();

        if ($rating) {
            $rating->rating = $formFields['rating'];
            $rating->save();
        } else {
            $formFields['user_id'] = $userId;
            $formFields['book_id'] = $bookId;
            BookRating::create($formFields);
        }

        flash('Thank you for rating this book! Your rating is ' . $formFields['rating'] . '.');

        return redirect()->back();
    }
}
