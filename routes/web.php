<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

Route::get('/service-events', function () {
    return view('/service-events');
});

Route::get('/service-tours', function () {
    return view('/service-tours');
});

Route::get('/service-education', function () {
    return view('/service-education');
});

Route::get('/service-clothing', function () {
    return view('/service-clothing');
});

Route::get('/service-media', function () {
    return view('/service-media');
});

Route::get('/service-photography', function () {
    return view('/service-photography');
});

// =========================
// CONTACT FORM ROUTE
// =========================
Route::post('/contact-send', function (Request $request) {

    $data = $request->validate([
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:2',
        'message' => 'required|min:5',
    ]);

    Mail::raw(
        "Name: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\n\nMessage:\n{$data['message']}",
        function ($msg) use ($data) {
            $msg->to('matheesha27@gmail.com')
                ->subject($data['subject']);
        }
    );

    return response()->json(['success' => true]);
});
