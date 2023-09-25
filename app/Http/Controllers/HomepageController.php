<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Post;
use App\Models\Event;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('index',[
            'books' => Book::latest()->take(4)->get(),
            'events' => Event::latest()->take(5)->get(),
            'posts' => Post::latest()->take(2)->get(),
        ]);
    }
}
