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
    return view('home#team');
});

Route::get('/upcoming-events', function () {
    return view('upcoming-events');
});

Route::get('/past-events', function () {
    return view('past-events');
});

Route::get('/Ramadan-League-IV', function () {
    return view('Ramadan-League-IV');
});

Route::get('/SLCL-Masters-T10-Fiesta', function () {
    return view('SLCL-Masters-T10-Fiesta');
});

Route::get('/SLCL-Season-VI', function () {
    return view('SLCL-Season-VI');
});

Route::get('/past-events-corporate', function () {
    return view('past-events-corporate');
});

Route::get('/past-events-community', function () {
    return view('past-events-community');
});
