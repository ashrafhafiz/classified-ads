<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
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
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/auth', function () {
    return view('backend.admin.index');
});


Route::get('/test-bootstrap', function () {
    return view('test-bootstrap');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::prefix('auth')->name('auth.')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('childcategory', ChildCategoryController::class);

    Route::get('subcategories_per_category/{level_id}', [ChildCategoryController::class, 'subcategories_per_category'])->name('subcategories_per_category');
});
