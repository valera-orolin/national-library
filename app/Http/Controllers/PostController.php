<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request) 
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter($request->all())->paginate(6)
        ]);
    }

    /**
     * Display the specified post.
     *
     * @param  Post  $post
     * @return \Illuminate\View\View
     */
    public function show(Post $post) 
    {
        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments()->orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\View\View
     */
    public function create() 
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) 
    {
        $formFields = $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'text' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('img', 'public');
        }

        Post::create($formFields);

        flash('Post has been created.');
        
        return redirect('/posts');
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  Post  $post
     * @return \Illuminate\View\View
     */
    public function edit(Post $post) 
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post) 
    {
        $formFields = $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'text' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('img', 'public');
            self::destroyImage($post);
        }

        $post->update($formFields);

        flash('Post has been updated.');
        
        return back();
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post) 
    {
        self::destroyImage($post);
        $post->delete();
        flash('Post has been deleted.');
        return redirect('/posts');
    }

    /**
     * Remove the image of the post from storage.
     *
     * @param  Post  $post
     */
    private static function destroyImage(Post $post) 
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
    }
}
