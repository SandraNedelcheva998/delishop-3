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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('products',\App\Http\Controllers\ProductsController::class);
Route::resource('categories', \App\Http\Controllers\CategoriesController::class);
Route::resource('carts', \App\Http\Controllers\CartsController::class);
Route::resource('cartitems', \App\Http\Controllers\CartItemsController::class);
Route::resource('products.comments', \App\Http\Controllers\CommentsController::class);
Route::post('/charge',[\App\Http\Controllers\CheckoutController::class, 'charge']);
Route::get('/charge',[\App\Http\Controllers\CheckoutController::class, 'index']);
Route::get('/contact',[\App\Http\Controllers\ContactsController::class, 'index']);
Route::get('/',[\App\Http\Controllers\CategoriesController::class, 'index']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home']);

