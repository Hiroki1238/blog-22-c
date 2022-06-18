<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
      $post = new Post;
       //return $post->get();
       return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]); 
   }                                     //↑index.brade.phpの16行目のposts
   
}
