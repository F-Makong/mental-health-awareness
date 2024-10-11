<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/insurance', function () {
    return view('insurance');
});

Route::get('/videoconference', function () {
    return view('videoconference');
});

Route::get('/newsletter', function () {
    return view('newsletterignup');
});