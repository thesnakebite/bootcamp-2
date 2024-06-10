<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
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

    public function update(SavePostRequest $request, Post $post)
    {
        Post::updated($request->validated());

        // Podemos eliminar sesion()->flash() y usar with() para enviar mensajes a la vista
        // session()->flash('status', 'Publicación actualizada con exito!');
        return to_route('posts.show', $post)->with('status', 'Publicación actualizada con exito!');
    }

    public function create()
    {
        return view('posts.create', [
            'post' => new Post
        ]);
    }

    public function store(SavePostRequest $request)
    {    
        Post::create($request->validated());

        // Podemos eliminar sesion()->flash() y usar with() para enviar mensajes a la vista
        // session()->flash('status', 'Publicación creada con exito!');
        return to_route('posts.index')->with('status', 'Publicación creada con exito!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Publicación eliminada con exito!');
    }
}
