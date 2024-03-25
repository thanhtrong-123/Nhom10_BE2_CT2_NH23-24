<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function dashboard_user()
    {
        return view('dashboard_user');
    }

    public function faq()
    {
        return view('faq');
    }

    public function login()
    {
        return view('login');
    }

    public function product()
    {
        return view('product');
    }

    public function contact()
    {
        return view('contact');
    }

    public function category()
    {
        return view('category');
    }

    public function about()
    {
        return view('about');
    }

    public function error404()
    {
        return view('error404');
    }
}
