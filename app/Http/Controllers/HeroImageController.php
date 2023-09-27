<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroImageController extends Controller
{
    public function show()
    {
        $file = Storage::get('public/hero.jpg');

        return (new Response($file, 200))
              ->header('Content-Type', 'image/jpeg')
              ->header('Cache-Control', 'public, max-age=31536000');
    }
}
