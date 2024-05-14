<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        // Validaciones
        $request->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'max:1024']
        ]);

        $post->title =$request->input('title');
        $post->body =$request->input('body');
        $post->save();

        session()->flash('status', 'Publicación actualizada con exito!');
        return to_route('posts.show', $post);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validaciones
        $request->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'max:1024']
        ]);

        $post = new Post();
        $post->title =$request->input('title');
        $post->body =$request->input('body');
        $post->save();

        session()->flash('status', 'Publicación creada con exito!');

        return to_route('posts.index');
    }
}
