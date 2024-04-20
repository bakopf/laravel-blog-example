<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    public function getPosts()
    {
        $posts = Post::all();
        Log::info('createPost endpoint called');
        return response()->json($posts);
    }

    public function getPostById($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    public function getPostsByAuthor($author)
    {
        $posts = Post::where('author', $author)->get();
        return response()->json($posts);
    }


}
