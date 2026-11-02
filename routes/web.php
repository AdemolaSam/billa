<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


// Parameter route
Route::get('/test/{username}/{userId}', function ($username, $userId){
    return $username . " " . $userId;
});

Route::get('/home', function() {
   return view('home');
});

// Named Routes
Route::get('/test', function(){
    return "This is a test route";
})->name("testpage");

Route::get("/portfolio", function(){
    return view('portfolio');
});

Route::get('/contact', function(){
    return view('contact');
})->name("contact");

// Grouped Routes
Route::prefix("/portfolio")->group(function(){
    Route::get('/company', function(){
        return "This is the company page";
    })->name('company');

    Route::get('/profile', function(){
        return "This is my profile page";
    })->name('profile');
});

// POST REQUESTS

Route::post("/formsubmitted", function(Request $request){

    $request->validate([
        'fullname'=> 'required|min:3|max:30',
        'email' => 'required|email'
    ]);

    $fullname = $request->input('fullname');
    $email = $request->input('email');


    return "Your fullname is $fullname and your email is $email";
})->name("formsubmitted");
