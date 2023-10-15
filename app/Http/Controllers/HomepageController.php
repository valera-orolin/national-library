<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Post;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomepageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index() 
    {
        return view('index',[
            'books' => Book::latest()->take(4)->get(),
            'events' => Event::latest()->take(5)->get(),
            'posts' => Post::latest()->take(2)->get(),
        ]);
    }

    /**
     * Serve the banner image with caching headers.
     *
     * @return \Illuminate\Http\Response
     */
    public function serveBanner()
    {
        $path = public_path('img/banner.png');
        $file = file_get_contents($path);
        $response = new Response($file, 200);
        $response->header('Content-Type', 'image/png');
        $response->header('Cache-Control', 'public, max-age=31536000, s-maxage=31536000');
        return $response;
    }
}
