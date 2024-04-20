<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Display frontpage with blog post teaser list.
     */
    public function frontPage()
    {
        $posts = Post::all();
        return view('frontpage', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'publish_date' => 'required|date',
            'text' => 'required|string',
        ]);
    
        Post::create($request->all());
    
        return redirect()->route('posts.index')->with('success', 'Article created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'publish_date' => 'required|date',
            'text' => 'required|string',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index')->with('success', 'Article updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')->with('success', 'Article deleted successfully!');
    }



    public function indexApi()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function showApi($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    public function showByAuthor($author)
    {
        $posts = Post::where('author', $author)->get();
        return response()->json($posts);
    }
}
