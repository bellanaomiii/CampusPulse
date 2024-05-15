<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Models\Admin;

// EVENT CATEGORIES
Route::prefix('manage-categories')->name('manage-categories.')->group(function(){
    Route::controller(CategoriesController::class)->group(function(){
        Route::get('/','catSubcatList')->name('cats-subcast-list');
    });
});

?>