<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use App\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        //dd(app()->getLocale());
        //$post = new Post();
        //print("3333333");
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }                                     /*index.blade.phpの16行めのposts*/

    public function show(Post $post)
    {
        //dd($post);
        return view('posts/show')->with(['post' => $post]);
    }

    /*public function create()
    {
        return view('posts/create');
    } */

    public function create(Category $category)
    {
    return view('posts/create')->with(['categories' => $category->get()]);;
    }

    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        //dd($input);
        /* $post->title = $input['title'];
        $post->body= $input['body'];
        $post->save(); */
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
    return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
    $input_post = $request['post'];
    //dd($input_post);
    //$post->fill($input_post)->save(); //filableはfillを使うために書かれてる

    return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
    $post->delete();
    return redirect('/');
    }

}