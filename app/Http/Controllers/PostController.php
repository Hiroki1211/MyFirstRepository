<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest; // useする
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post, int $id)
    {
        return view('posts/show')->with(['post' => $post -> getSpecific($id)]);
    }
    
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts' . $post->id);
    }
    
    public function edit(Post $post, int $id)
    {
        return view('posts/edit')->with(['post' => $post -> getSpecific($id)]);
    }
    
    public function update(PostRequest $request, Post $post, int $id)
    {
        $input = $request['post'];
        $post = $post -> getSpecific($id);
        $post -> fill($input) ->save();
        
        return redirect('../'. $post->id);
    }
    
    public function delete(int $id, Post $post)
    {
        $post = $post->getSpecific($id);
        $post -> delete();
        return redirect('/');
    }
}
