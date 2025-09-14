<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-services', function () {
    return view('our-services');
});

Route::get('/our-team', function () {
    return view('our-team');
});

Route::get('/upcoming-events', function () {
    return view('upcoming-events');
});

Route::get('/past-events', function () {
    return view('past-events');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
