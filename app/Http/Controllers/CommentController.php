<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect()->route('show-post', $comment->post_id);
    }
}
