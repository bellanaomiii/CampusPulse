<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
    ]);
});

Route::get('/event', function () {
    return view('event', [
        "title" => "Event"
    ]);
});

Route::get('/community', function () {
    return view('community', [
        "title" => "Community"
    ]);
});

Route::get('/competitions', function () {
    return view('competitions', [
        "title" => "Competitions"
    ]);
});

Route::get('/scholarships', function () {
    return view('scholarships', [
        "title" => "Scholarships"
    ]);
});

Route::get('/internships', function () {
    return view('internships', [
        "title" => "Internships"
    ]);
});