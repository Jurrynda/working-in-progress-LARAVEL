<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * controll if we have user
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'post_id' => 'required|integer|exists:App\Models\Post,id',
        ]);   

        $newComment = Comment::create(
            $request->all()
        );

        return redirect('/posts/' . $newComment->post->slug . '#comments');
    }

    public function show(Comment $comment)
    {

        // $post->load('comments', 'comments.user');

        return view('comments\delete', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $comment->text = $request->text;
        $comment->save();

        return redirect('/');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return redirect('/');
    }
}
