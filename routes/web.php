<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;



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
Route::get('/all-product', [AdminController::class, 'all_product'])->name('all_product');
// Route::get('/all-product','ProductController@all_product');

// //Danh muc san pham trang chu
// Route::get('/danh-muc/{slug_category_product}','CategoryProduct@show_category_home');
// Route::get('/thuong-hieu/{brand_slug}','BrandProduct@show_brand_home');
// Route::get('/chi-tiet/{product_slug}','ProductController@details_product');


// //Category Product
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product'])->name('add_category_product');
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product'])->name('all_category_product');
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product'])->name('save_category_product');
Route::get('/edit-category-product/{category_product_id}',[CategoryProduct::class , 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[CategoryProduct::class, 'delete_category_product']);
Route::post('/update-category-product/{category_product_id}',[CategoryProduct::class, 'update_category_product']);
Route::get('/unactive-category-product/{category_product_id}',[CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryProduct::class, 'active_category_product']);



Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product'])->name('add_brand_product');
Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product'])->name('all_brand_product');
Route::get('/edit-brand-product/{brand_product_id}',[BrandProduct::class , 'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProduct::class, 'delete_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[BrandProduct::class, 'update_brand_product']);

// //Brand Product
// Route::get('/add-brand-product','BrandProduct@add_brand_product');
// Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
// Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');
// Route::get('/all-brand-product','BrandProduct@all_brand_product');

// Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
// Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

// Route::post('/save-brand-product','BrandProduct@save_brand_product');
// Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');

// Customers
Route::resource('customer', CustomerController::class);

// Sliders
Route::resource('slider', SliderController::class);