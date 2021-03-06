<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Detail;

class BookController extends Controller
{   
    public function show($id){
        return view('pages.book',[
            'title' => 'Book',
            'categories' => Category::all(),
            'books' => Detail::join('books','details.book_id','=','books.id')->where('books.id',$id)
            ->get(['details.*','books.*'])->firstOrFail()
        ]);  
    }
}
