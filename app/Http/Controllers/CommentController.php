<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'body' => 'required'
        ]);
        
        $comment = new Comment();
        $comment->body = $formFields['body'];
        $comment->post()->associate($post);
        $comment->user()->associate($request->user());
        $comment->save();

        return back();
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        flash('Comment has been deleted.');
        return back();
    }
}
