<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

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

Route::post('/contact/send', [

    ContactController::class, 'send'

])->name('contact.send');
    
Route::get('/fr', function () {

    Session::put('lang', "fr");

    return redirect()->back();

})->name('fr');

Route::get('/en', function () {

    Session::put('lang', "en");

    return redirect()->back();

})->name('en');