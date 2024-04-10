<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DB;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('slider_status', 0)->get();
        $categories = Category::where('category_status', 0)->get();
        $products = Product::where('product_status', 0)->get();
        return view('index')->with('sliders', $sliders)->with('categories', $categories)->with('products', $products);
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

    public function product($product_id)
    {
        $product = Product::find($product_id);
        $same_products = Product::where([
            ['product_id', '<>', $product_id],
            ['category_id', '=', $product->category_id]
        ])->get();
        return view('product')->with('product', $product)->with('same_products', $same_products);
    }

    public function contact()
    {
        return view('contact');
    }

    public function store()
    {
        $categories = Category::where('category_status', 0)->get();
        $totals = DB::table('products')
            ->selectRaw("count(case when category_id = '1' then 1 end) as confirmed")
            ->selectRaw("count(case when category_id = '2' then 1 end) as unconfirmed")
            ->selectRaw("count(case when category_id = '3' then 1 end) as cancelled")
            ->selectRaw("count(case when category_id = '4' then 1 end) as rejected")
            ->first();
        $brands = Brand::where('brand_status', 0);
        $products = Product::where('product_status', 0)->get();
        return view('store')->with('categories', $categories)->with('brands', $brands)->with('products', $products);
    }

    public function about()
    {
        return view('about');
    }

    public function error404()
    {
        return view('error404');
    }
    public function blog()
    {
        return view('blog');
    }
    public function elements()
    {
        return view('elements');
    }
}
