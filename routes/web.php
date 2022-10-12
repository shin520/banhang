<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [ClientController::class, 'home'])->name('client.home');
Route::get('/client-product', [ClientController::class, 'product'])->name('client.product');
Route::get('/client-product_detail', [ClientController::class, 'product_detail'])->name('client.product_detail');
Route::get('/cart', [ClientController::class, 'cart'])->name('client.cart');
Route::get('/client-blog', [ClientController::class, 'blog'])->name('client.blog');
Route::get('/client-blog_detail', [ClientController::class, 'blog_detail'])->name('client.blog_detail');

Route::get('/guest', [MainController::class, 'guest'])->name('guest');

Route::get('403', [MainController::class, 'page403'])->name('page403');

Auth::routes();

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/create-category', [CategoryController::class, 'create'])->name('category.create');

Route::middleware('mw-checkrole:1')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
}); 
Route::middleware('mw-checkrole:9')->group(function () {
    Route::get('/user-list', [UserController::class, 'list'])->name('user.list');
    Route::post('/user-create', [UserController::class, 'create'])->name('user.create');
    Route::delete('/user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/user-edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user-update', [UserController::class, 'update'])->name('user.update');
});

Route::middleware('mw-checkrole:7')->group(function () {
    Route::get('/country-list', [CountryController::class, 'list'])->name('country.list');
    Route::get('/customer-list', [CustomerController::class, 'list'])->name('customer.list');
    Route::post('/customer-create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('/customer-edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/product-update/{id}', [CustomerController::class, 'update'])->name('product.update');
});
