<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    public function show(Category $category){
        return view('pages.category',[
            'title' => $category->category,
            'categories' => Category::all(),
            'books' => $category->books
        ]);  
    }
}
