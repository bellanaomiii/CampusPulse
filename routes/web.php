<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\Admin\CategoriesController;
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
    return view('Dashboard', [
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

Route::get('/dbconn', function () {
    return view('dbconn');
});


Route::middleware(['guest'])->group(function() {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/logout', [SesiController::class, 'logout']);

});


Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');

Route::get('/register', [SesiController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [SesiController::class, 'register']);



Route::view('/example-page','example-page');
Route::view('/example-auth','example-auth');


// routes/web.php

Route::prefix('admin')->name('admin.')->group(function() {
    Route::prefix('manage-categories')->name('manage-categories.')->group(function(){
        Route::get('/', [CategoriesController::class, 'catSubcatList'])->name('cats-subcat-list');
    });
});