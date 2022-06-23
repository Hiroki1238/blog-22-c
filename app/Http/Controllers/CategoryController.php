<?php

namespace App\Http\Controllers;
use App\Category;

class CategoryController extends Controller
{
    
   public function index(Category $category)
   {
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
    } 
    
    public function show(Category $category)
    {
        //dd($post);
        return view('categories/show')->with(['category' => $category]);
    }
   
}