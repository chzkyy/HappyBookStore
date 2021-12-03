<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller
{   
    public function index(){   
        return view('pages.home',[
            "title" => "Home",
            "books" => Book::latest()->paginate(10),
            'categories' => Category::all(),
        ]);
    }
}
