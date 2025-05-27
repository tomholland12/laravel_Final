<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller {
    public function index() {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(StorePostRequest $request) {
        Post::create($request->validated());
        return redirect()->route('posts.index')->with('success', 'Post created.');
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(StorePostRequest $request, Post $post) {
        $post->update($request->validated());
        return redirect()->route('posts.index')->with('success', 'Post updated.');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted.');
    }
}
