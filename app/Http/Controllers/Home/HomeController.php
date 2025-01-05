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

    public function articlesByCategory(Category $articlesByCategory)
    {

        $articles = $articlesByCategory->articles();
        // return  $articles;
        $topViews      = Article::orderBy('views', 'desc')->take(6)->get();
        return view('pages.Article.articleByCategory', compact('articlesByCategory', 'articles','topViews'));
    }

    public function show(Category $articlesByCategory, Article $articleDetails)
    {
        // زيادة عدد المشاهدات للمقالة
        $articleDetails->increment('views');

        return view('pages.Article.articleDetails',compact('articlesByCategory','articleDetails') );
    }
}
