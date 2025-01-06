<?php

namespace App\Http\Controllers\Aboutus;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutUs = About::first();

        return view('pages.Aboutus.aboutus',compact('aboutUs'));
    }
}
