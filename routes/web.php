<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;




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

// Page
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('wishlist', [PageController::class, 'wishlist'])->name('wishlist');
Route::get('checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('store', [PageController::class, 'store'])->name('store');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('dashboard_user', [PageController::class, 'dashboard_user'])->name('dashboard_user');
Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('product/{product_id}', [PageController::class, 'product'])->name('product');
Route::get('error404', [PageController::class, 'error404'])->name('error404');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('blog', [PageController::class, 'blog'])->name('blog');

// Cart
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('add-cart', [CartController::class, 'add'])->name('cart.add');

// Users
Route::post('/register-user', [UserController::class, 'register_user'])->name('register_user');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/logoutuser',[UserController::class,'logoutuser'])->name('logoutuser');
Route::post('/user-login',[UserController::class,'user_login'])->name('user_login');
// Admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/dashboard',[AdminController::class,'show_dashboard'])->name('show_dashboard');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');
Route::post('/admin-dashboard',[AdminController::class,'dashboard'])->name('dashboard');
// Send mail
Route::get('/send-mail', [PageController::class, 'send_mail'])->name('send_mail');

// Category Product
Route::resource('categoryProduct',CategoryController ::class);
Route::get('/unactive-category-product/{category_product_id}',[CategoryController::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryController::class, 'active_category_product']);

// //Brand Product
Route::resource('brandProduct', BrandController ::class);
Route::get('/unactive-brand-product/{brand_product_id}',[BrandController::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandController::class, 'active_brand_product']);

// Customers
Route::resource('customer', CustomerController::class);

// Sliders
Route::resource('slider', SliderController::class);

// Products
Route::resource('products', ProductController::class);
Route::get('/unactive-product/{product_id}',[ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class, 'active_product']);

//Order_detail
Route::resource('order-detail', OrderDetailController::class);


