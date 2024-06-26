<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\Order;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ChangePassword;
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
Route::get('checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('store', [PageController::class, 'store'])->name('store');
Route::get('fliterBrand/{brand_id}', [PageController::class, 'fliterBrand'])->name('fliterBrand');
Route::get('filterCategory/{category_id}', [PageController::class, 'filterCategory'])->name('filterCategory');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('dashboard_user', [PageController::class, 'dashboard_user'])->name('dashboard_user');
Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('product/{product_id}', [PageController::class, 'product'])->name('product');
Route::get('error404', [PageController::class, 'error404'])->name('error404');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('search', [PageController::class, 'search'])->name('search');

// Review
Route::get('index-review', [ReviewController::class, 'index']);
Route::post('add-review', [ReviewController::class, 'add']);
Route::get('edit-review/{review_id}', [ReviewController::class, 'edit']);
Route::post('update-review', [ReviewController::class, 'update']);
Route::get('delete-review/{review_id}', [ReviewController::class, 'delete']);


// Cart
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('add-cart', [CartController::class, 'add'])->name('cart.add');
Route::post('update-cart', [CartController::class, 'update'])->name('cart.update');
Route::post('delete-cart', [CartController::class, 'delete'])->name('cart.delete');
Route::get('delete-all-cart', [CartController::class, 'deleteAll'])->name('cart.deleteall');

// Wishlist
Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::get('add-wishlist/{product_id}', [WishlistController::class, 'add'])->name('wishlist.add');
Route::post('delete-wishlist', [WishlistController::class, 'delete'])->name('wishlist.delete');
Route::get('delete-all-wishlist', [WishlistController::class, 'deleteAll'])->name('wishlist.deleteall');

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
Route::get('/searchcate', [CategoryController::class, 'searchcate']);

// //Brand Product
Route::resource('brandProduct', BrandController ::class);
Route::get('/unactive-brand-product/{brand_product_id}',[BrandController::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandController::class, 'active_brand_product']);
Route::get('/searchbrand', [BrandController::class, 'searchbrand']);

// Customers
Route::resource('customer', CustomerController::class);
Route::get('/searchcustomer', [CustomerController::class, 'searchcustomer']);
// Route::get('/changepw', function() {
//     return view('dashboard_user');
// })->middleware('auth');


// Sliders
Route::resource('slider', SliderController::class);
Route::get('/unactive-slider/{slider_id}',[SliderController::class, 'unactive_slider']);
Route::get('/active-slider/{slider_id}',[SliderController::class, 'active_slider']);
Route::get('/searchslider', [SliderController::class, 'searchslider']);

// Products
Route::resource('products', ProductController::class);
Route::get('/unactive-product/{product_id}',[ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class, 'active_product']);
Route::get('/searchproduct', [ProductController::class, 'searchproduct']);

// Order_detail
Route::get('/orderdetails/{order_id}', [OrderDetailController::class, 'index']);
Route::post('/add-orderdetails', [OrderDetailController::class, 'add']);
Route::post('/update-orderdetails', [OrderDetailController::class, 'update']);
Route::post('/delete-orderdetails', [OrderDetailController::class, 'delete']);

//test view order
Route::get('order', [CategoryController::class, 'order']);

//Order
Route::resource('order', OrderController::class);
Route::get('/searchorder', [OrderController::class, 'searchorder']);

//Delivery

Route::get('/delivery', [DeliveryController::class, 'delivery']);
Route::post('/select-delivery',[DeliveryController::class, 'select_delivery']);
Route::post('/insert-delivery',[DeliveryController::class, 'insert_delivery']);
Route::post('/select-feeship',[DeliveryController::class, 'select_feeship']);
Route::post('/update-delivery',[DeliveryController::class, 'update_delivery']);

//Coupon
Route::resource('couponCode', CouponController ::class);
Route::get('/searchcoupon', [CouponController::class, 'searchcoupon']);

//checkout
Route::post('/add-checkout',[CheckoutController::class, 'add_checkout']);
Route::post('/checkcoupon',[CheckoutController::class, 'checkcoupon']);
Route::get('/del-coupon',[CheckoutController::class, 'del_coupon']);
Route::post('calculate-fee', [PageController::class, 'calculate_fee'])->name('calculate_fee');
//change password
Route::post('/changepw', [ChangePassword::class, 'updatepassword']);