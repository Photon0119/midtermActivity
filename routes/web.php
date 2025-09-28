<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // this points to home.blade.php
});

Route::get('/dashboard', function () {
    return view('dashboard');
}); //for dashboard

Route::get('/chatgpt', function () {
    return view('chatgpt');
}); //dashboard what is chatgpt

Route::get('/future', function () {
    return view('future');
});

Route::get('/access', function () {
    return view('access');
});

Route::get('/happening', function () {
    return view('happening');
});