<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function articlesByCategory(Category $articlesByCategory)
    {
        $articles = $articlesByCategory->articles();
        $firstArticle = $articles->first();
        $otherArticles = $articles->skip(1)->paginate(2);
        // $articles = $articlesByCategory->articles()->get();
        // dd( $articles);
        $topViews      = Article::orderBy('views', 'desc')->take(6)->get();
        return view('pages.Article.articleByCategory', compact('articlesByCategory', 'articles','topViews','firstArticle','otherArticles'));
    }


    public function show(Article $articleDetails)
    {
        // return $articleDetails;
        $articleDetails->increment('views');
        $topViews      =  Article::orderBy('views', 'desc')->take(5)->get();
        $readAlso = Article::orderBy('views', 'desc')->skip(5)->inRandomOrder()->take(4)->get();
        return view('pages.Article.articleDetails',compact('articleDetails','topViews','readAlso') );
    }

    // public function show(Category $articlesByCategory, Article $articleDetails)
    // {
    //     // زيادة عدد المشاهدات للمقالة
    //     $articleDetails->increment('views');

    //     return view('pages.Article.articleDetails',compact('articlesByCategory','articleDetails') );
    // }
}
