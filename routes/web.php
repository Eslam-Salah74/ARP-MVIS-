<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Team\TeamController;
use App\Http\Controllers\Aboutus\AboutusController;
use App\Http\Controllers\Contactus\ContactusController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ExpertArticle\ExpertArticleController;



// Route::get('/', function () {
//     return view('pages.index');
// });


// Artisan Route
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('migrate');

    return "Cache Cleared Successfully";
});


Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');

    return "Optimize Cleared Successfully";
});


Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "Storage Linked";
});


/***** mcmara */
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {


    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get(LaravelLocalization::transRoute('routetrans.team'), [TeamController::class, 'index'])->name('team');
    Route::get(LaravelLocalization::transRoute('routetrans.aboutus'), [AboutusController::class, 'index'])->name('aboutus');
    Route::get(LaravelLocalization::transRoute('routetrans.contactus'), [ContactusController::class, 'index'])->name('contactus');
    Route::get(LaravelLocalization::transRoute('routetrans.expertArticle'), [ExpertArticleController::class, 'index'])->name('expertArticle');
    Route::get(LaravelLocalization::transRoute('routetrans.expertArticleDetails'), [ExpertArticleController::class, 'show'])->name('expertArticleDetails');
    Route::get(LaravelLocalization::transRoute('routetrans.expertProfile'), [ExpertArticleController::class, 'profile'])->name('expertProfile');





});

