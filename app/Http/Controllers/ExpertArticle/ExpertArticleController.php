<?php

namespace App\Http\Controllers\ExpertArticle;

use App\Models\Expert;
use Illuminate\Http\Request;
use App\Models\ExpertArticle;
use App\Http\Controllers\Controller;

class ExpertArticleController extends Controller
{
    public function index()
    {
        $experts = Expert::with('experts_articles')->get();

        return view('pages.ExpertArticle.expertArticle',compact('experts'));
    }


    public function show(ExpertArticle $expertArticleDetails)
    {
        return view('pages.ExpertArticle.expertArticleDetails',compact('expertArticleDetails'));
    }

}
