<?php

namespace App\Http\Controllers;
use App\Models\Category;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact',[
            'title' => 'Contact',
            'categories' => Category::all(),
        ]);
    }
}
