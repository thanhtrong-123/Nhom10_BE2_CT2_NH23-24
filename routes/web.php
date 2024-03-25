<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;


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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('wishlist', [PageController::class, 'wishlist'])->name('wishlist');
Route::get('cart', [PageController::class, 'cart'])->name('cart');
Route::get('checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('category', [PageController::class, 'category'])->name('category');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('dashboard_user', [PageController::class, 'dashboard_user'])->name('dashboard_user');
Route::get('faq', [PageController::class, 'faq'])->name('faq');
Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('product', [PageController::class, 'product'])->name('product');
Route::get('error404', [PageController::class, 'error404'])->name('error404');
Route::get('about', [PageController::class, 'about'])->name('about');


//admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/dashboard',[AdminController::class,'show_dashboard'])->name('show_dashboard');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');
Route::post('/admin-dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//product
Route::get('/add-product', [AdminController::class, 'add_product'])->name('add_product');
