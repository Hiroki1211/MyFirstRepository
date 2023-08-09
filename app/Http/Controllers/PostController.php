<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post, $id)
    {
        return view('posts/show')->with(['post' => $post -> getSpecific($id)]);
    }
    
    public function create(Post $post)
    {
        return view('posts/create');
    }
    
    
}
