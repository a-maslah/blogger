<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('posts.posts')->with('posts', $posts);
    }

    public function add()
    {
        $categories = Category::all();
        return view('posts.add')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::with('category')->with('comments')->find($id);
        // Or you can make a query
        // $post = Post::where('id', $id)->first();

        return view('posts.show')->with('post', $post);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        // Or you can make a query
        // $post = Post::where('id', $id)->first();

        // Make the delete action / SQL query
        $post->delete();
        return redirect('/');
    }
}
