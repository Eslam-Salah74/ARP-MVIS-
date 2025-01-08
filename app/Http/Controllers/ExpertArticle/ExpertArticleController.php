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
        $expertArticle = ExpertArticle::with('expert')->get();
        $topViews      = ExpertArticle::orderBy('views', 'desc')->take(3)->get();
        return view('pages.ExpertArticle.expertArticle',compact('expertArticle','topViews'));
    }



    public function show(ExpertArticle $expertArticleDetails)
    {
        $expertArticleDetails->increment('views');

        $relatedArticles = ExpertArticle::where('expert_id', $expertArticleDetails->expert_id)
                                        ->where('id', '!=', $expertArticleDetails->id) // ما عدا المقال المعروض
                                        ->get();

        return view('pages.ExpertArticle.expertArticleDetails', compact('expertArticleDetails', 'relatedArticles'));
    }




    public function profile(Expert $expertProfile)
    {

        $relatedArticles = ExpertArticle::where('expert_id', $expertProfile->id)->paginate(3);
        $topViews = ExpertArticle::orderBy('views', 'desc')->take(3)->get();
        return view('pages.ExpertArticle.expertProfile',compact('expertProfile','relatedArticles','topViews'));
    }









}
