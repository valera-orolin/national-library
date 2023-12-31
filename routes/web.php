<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookRatingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// index - show all items
// show - show single item
// create - show form to create new item
// store - store new item
// edit - show form to edit item
// update - update item
// destroy - delete item

/**
 * Display the homepage.
 */
Route::get('/', [HomepageController::class, 'index']);

/**
 * Serve the banner image with caching headers.
 */
Route::get('/banner', [HomepageController::class, 'serveBanner']);

/**
 * Display the about page.
 */
Route::get('/about', [HomepageController::class, 'about']);

/**
 * Subscribe a user to the newsletter.
 */
Route::put('/newsletter', [NewsletterController::class, 'subscribe']);


/**
 * Display a listing of the books.
 */
Route::get('/books', [BookController::class, 'index']);

/**
 * Show the form for creating a new book.
 */
Route::get('/books/create', [BookController::class, 'create'])->middleware('admin');

/**
 * Store a newly created book in storage.
 */
Route::post('/books', [BookController::class, 'store'])->middleware('admin');

/**
 * Show the form for editing the specified book.
 */
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->middleware('admin');

/**
 * Store a newly created or updated book rating in storage.
 */
Route::post('/books/{book}/ratings', [BookRatingController::class, 'store'])->middleware('auth');

/**
 * Update the specified book in storage.
 */
Route::put('/books/{book}', [BookController::class, 'update'])->middleware('admin');

/**
 * Remove the specified book from storage.
 */
Route::delete('/books/{book}', [BookController::class, 'destroy'])->middleware('admin');

/**
 * Display the specified book.
 */
Route::get('/books/{book}', [BookController::class, 'show']);


/**
 * Display a listing of the events.
 */
Route::get('/events', [EventController::class, 'index']);

/**
 * Show the form for creating a new event.
 */
Route::get('/events/create', [EventController::class, 'create'])->middleware('admin');

/**
 * Store a newly created event in storage.
 */
Route::post('/events', [EventController::class, 'store'])->middleware('admin');

/**
 * Show the form for editing the specified event.
 */
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->middleware('admin');

/**
 * Confirm the attendance of the authenticated user for the specified event.
 */
Route::post('/events/{event}/confirm', [EventUserController::class, 'confirmAttendance'])->middleware('auth');

/**
 * Update the specified event in storage.
 */
Route::put('/events/{event}', [EventController::class, 'update'])->middleware('admin');

/**
 * Remove the specified event from storage.
 */
Route::delete('/events/{event}', [EventController::class, 'destroy'])->middleware('admin');

/**
 * Display the specified event.
 */
Route::get('/events/{event}', [EventController::class, 'show']);


/**
 * Display a listing of the posts.
 */
Route::get('/posts', [PostController::class, 'index']);

/**
 * Show the form for creating a new post.
 */
Route::get('/posts/create', [PostController::class, 'create'])->middleware('admin');

/**
 * Store a newly created post in storage.
 */
Route::post('/posts', [PostController::class, 'store'])->middleware('admin');

/**
 * Show the form for editing the specified post.
 */
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('admin');

/**
 * Store a newly created comment in storage.
 */
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->middleware('auth');

/**
 * Remove the specified comment from storage.
 */
Route::delete('/posts/{comment}/comments', [CommentController::class, 'destroy'])->middleware('admin');

/**
 * Update the specified post in storage.
 */
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('admin');

/**
 * Remove the specified post from storage.
 */
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('admin');

/**
 * Display the specified post.
 */
Route::get('/posts/{post}', [PostController::class, 'show']);


/**
 * Show the user registration form.
 */
Route::get('/register', [UserController::class, 'create']);

/**
 * Store a newly created user in storage.
 */
Route::post('/users', [UserController::class, 'store']);

/**
 * Show the login form.
 */
Route::get('/login', [UserController::class, 'login']);

/**
 * Log the user out of the application.
 */
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

/**
 * Handle ab authentication attempt.
 */
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/**
 * Mark the authenticated user's email as verified.
 */
Route::get('/email/verify/{id}', [UserController::class, 'verify'])->middleware('signed')->name('verification.verify');