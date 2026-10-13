<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ContactController;
use App\Models\Visit;
use App\Http\Controllers\AnalyticsController;



/*
Route::middleware('auth')->group(function () {
    Route::get('/analytics', [AnalyticsController::class, 'index'])
        ->name('analytics.index');
});
*/

Route::get('/', function () {

    if (!Session::has('lang')) {
        Session::put('lang', "fr");
    }
    if (session('lang') == 'en'){
        return view('pages.home1');
    }
    return view('pages.home');
    
})->name('home');

Route::get('/services', function () {

    if (!Session::has('lang')) {
        Session::put('lang', "fr");
    }
    if (session('lang') == 'en'){
        return view('pages.services1');
    }
    return view('pages.services');

})->name('services');

Route::get('/contact', function () {

    if (!Session::has('lang')) {

        Session::put('lang', "fr");
    }

    if (session('lang') == 'en'){

        return view('pages.contact1');
    }
    return view('pages.contact');
 
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
    
Route::get('/fr', function () {

    Session::put('lang', "fr");

    return redirect()->back();

})->name('fr');

Route::get('/en', function () {

    Session::put('lang', "en");

    return redirect()->back();

})->name('en');

/*
Route::get('/test-statistiques', function () {
    return [
        'pages_vues' => Visit::count(),

        'sessions' => Visit::distinct('session_id')
            ->count('session_id'),
    ];
});
*/


Route::get('/dashboard', [AnalyticsController::class, 'index']
    )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';