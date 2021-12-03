<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class SearchController extends Controller
{   
    public function index(){   
        return view('pages.search',[
            "title" => "Search",
            "books" => Book::latest()->filter(request(['search'])) 
                ->paginate(10)->withQueryString(),
            'categories' => Category::all(),
        ]);
    }
}
