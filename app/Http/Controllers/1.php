<?php

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

public function index()
{
    $posts = Post::where('user_id', auth()->id())->paginate(10);
    return view('posts.index', compact('posts'));
}

public function create()
{
    return view('posts.create');
}

public function store(StorePostRequest $request)
{
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'user_id' => auth()->id(),
    ]);
    return redirect()->route('posts.index')->with('success', 'Post created.');
}

public function show(Post $post)
{
    $this->authorize('view', $post);
    return view('posts.show', compact('post'));
}

public function edit(Post $post)
{
    $this->authorize('update', $post);
    return view('posts.edit', compact('post'));
}

public function update(StorePostRequest $request, Post $post)
{
    $this->authorize('update', $post);
    $post->update($request->validated());
    return redirect()->route('posts.index')->with('success', 'Post updated.');
}

public function destroy(Post $post)
{
    $this->authorize('delete', $post);
    $post->delete();
    return redirect()->route('posts.index')->with('success', 'Post deleted.');
}
