<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('articles')->has('articles')->get();

        // return $categories;

        return view('pages.index',compact('categories'));
    }

    
}
