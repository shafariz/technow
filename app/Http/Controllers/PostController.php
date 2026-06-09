<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get();

        return view('home', compact('posts'));
    }

    public function showUser($id)
    {
        $post = Post::findOrFail($id);

        return view('detail', compact('post'));
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('title', 'like', "%$search%")
            ->latest()
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('posts', 'public');

        Post::create([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
            'author' => $request->author,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('posts', 'public');
            $post->image = $image;
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}