<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact2' , [FormController::class, 'contact2']);
Route::post('/contact22' , [FormController::class, 'submitForm'])->name('contact2-submit');




Route::get('/about', function () {
     return ["about", "about page", "wordpress", "fixing database"];
    // return view('about');
});

