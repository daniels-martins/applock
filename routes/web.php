<?php

use App\Http\Controllers\WebpageController;
use Illuminate\Support\Facades\Route;

// landingpage
Route::get('/', [WebpageController::class,'index']);


Route::get('/about', function () {
    return 'about page ';
    // return view('welcome');
});


Route::get('/services', function () {
    return 'services page';
    // return view('welcome');
});


Route::get('/faq', function () {
    return 'FAQs page';
    // return view('welcome');
})->middleware('auth');


Route::get('/faqs', function () {
    return 'FAQs page';
    // return view('welcome');
})->middleware('guest');


Route::get('/contact', function () {
    return 'contact page';
    // return view('welcome');
});



Route::get('/testimonial', function () {
    return 'this is the testimonial page';
    // return view('welcome');
});

Route::get('/support',function(){
 'welcome to our support page';
});