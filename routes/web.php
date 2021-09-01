<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilitiesController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\View;

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

Route::get('/', [HomeController::class, 'index']);

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

// View::composer('*', function ($view) {
//     $view->with('categories', App\Models\Category::get());
//     // $view->with(['categories' => App\Models\Category::get()]);
// });

Route::prefix('auth')->name('auth.')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('childcategory', ChildCategoryController::class);


    Route::get('subcategories_per_category/{category_id}', [UtilitiesController::class, 'get_subcategories_per_category'])->name('subcategories_per_category');
    Route::get('childcategories_per_subcategory/{sub_category_id}', [UtilitiesController::class, 'get_childcategories_per_subcategory'])->name('childcategories_per_subcategory');
    Route::get('states_per_country/{country_id}', [UtilitiesController::class, 'get_states_per_country'])->name('states_per_country');
    Route::get('cities_per_state/{state__id}', [UtilitiesController::class, 'get_cities_per_state'])->name('cities_per_state');
});


Route::prefix('ads')->name('ads.')->group(function () {
    Route::get('index', [AdvertisementController::class, 'index'])->name('index');
    Route::get('show/{adv}', [AdvertisementController::class, 'show'])->name('show');
    Route::get('create', [AdvertisementController::class, 'create'])->name('create');
    Route::post('store', [AdvertisementController::class, 'store'])->name('store');
    Route::get('edit/{adv}', [AdvertisementController::class, 'edit'])->name('edit');
    Route::put('update/{adv}', [AdvertisementController::class, 'update'])->name('update');
    Route::delete('destroy/{adv}', [AdvertisementController::class, 'destroy'])->name('destroy');
});

$router->get('users', [UserController::class, 'index']);
