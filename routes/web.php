<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bulma', function () {
    return view('bulma');
});

Route::get('/sell', [SiswaController::class, 'index']);