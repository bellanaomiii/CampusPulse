<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/community', [LandingController::class, 'community']);
Route::get('/competitions', [LandingController::class, 'competitions']);
Route::get('/scholarships', [LandingController::class, 'scholarships']);
Route::get('/internships', [LandingController::class, 'internships']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);

    Route::get('/register', [SesiController::class, 'showRegistrationForm'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::prefix('/dashboard/admin')->group(function () {
            Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard.admin');

            Route::get('/members', [DashboardAdminController::class, 'members'])->name('dashboard.admin.members');

            Route::get('/categories', [DashboardAdminController::class, 'categories'])->name('dashboard.admin.categories');
            Route::post('/categories/store', [KategoriController::class, 'store'])->name('admin.categories.store');
            Route::put('/categories/update/{category}', [KategoriController::class, 'update'])->name('admin.categories.update');
        });
    });

    Route::group(['middleware' => 'user'], function () {
        Route::get('/dashboard/user', [DashboardUserController::class, 'index'])->name('dashboard.user');
    });



    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});
