<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\Slider;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Feeship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DB;
use Mail;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('slider_status', 0)->get();
        $categories = Category::where('category_status', 0)->get();
        $brands = Brand::where('brand_status', 0)->get();
        $products = Product::where('product_status', 0)->get();
        return view('index')->with('sliders', $sliders)->with('categories', $categories)->with('brands', $brands)->with('products', $products);
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function checkout()
    {
        $city = City::orderby('matp','ASC')->get();
        // $province = Province::orderby('maqh','ASC')->get();
        // $wards = Wards::orderby('xaid','ASC')->get();
        return view('checkout')->with('city',$city);
        //->with('province',$province)->with('wards',$wards);
    }

    public function dashboard_user()
    {
        $orders = Order::where('customer_id', Session::get('customer_id'))->get()->sortByDesc('created_at')->all();
        return view('dashboard_user')->with('orders', $orders);
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
        $reviews = Review::where('product_id', $product_id)->get();
        return view('product')->with('product', $product)->with('same_products', $same_products)->with('reviews', $reviews);
    }

    public function contact()
    {
        return view('contact');
    }

    public function store()
    {
        $categories = Category::where('category_status', 0)->get();
        foreach ($categories as $key => $category) {
            $categories[$key]['total_product'] = Product::where([
                ['category_id', $category->category_id],
                ['product_status', 0]
            ])->count();
        }
        $brands = Brand::where('brand_status', 0)->get();
        $products = Product::where('product_status', 0)->paginate(6);
        return view('store')->with('categories', $categories)->with('brands', $brands)->with('products', $products);
    }
    
    public function fliterBrand($brand_id)
    {
        $categories = Category::where('category_status', 0)->get();
        foreach ($categories as $key => $category) {
            $categories[$key]['total_product'] = Product::where([
                ['category_id', $category->category_id],
                ['product_status', 0]
            ])->count();
        }
        $brands = Brand::where('brand_status', 0)->get();
        $products = Product::where([
            ['product_status', 0],
            ['brand_id', $brand_id]
            ])->paginate(6);
        return view('store')->with('categories', $categories)->with('brands', $brands)->with('products', $products);
    }
    public function filterCategory($category_id)
    {
        $categories = Category::where('category_status', 0)->get();
        foreach ($categories as $key => $category) {
            $categories[$key]['total_product'] = Product::where([
                ['category_id', $category->category_id],
                ['product_status', 0]
            ])->count();
        }
        $brands = Brand::where('brand_status', 0)->get();
        $products = Product::where([
            ['product_status', 0],
            ['category_id', $category_id]
            ])->paginate(6);
        return view('store')->with('categories', $categories)->with('brands', $brands)->with('products', $products);
    }

    public function about()
    {
        $brands = Brand::where('brand_status', 0)->get();
        return view('about')->with('brands', $brands);
    }

    public function error404()
    {
        return view('error404');
    }
    public function blog()
    {
        return view('blog');
    }

    public function search(Request $request)
    {
        $products = Product::where([
            ['product_status', 0],
            ['product_name', 'like', '%' . $request->q . '%'] 
        ])->paginate(6)->withQueryString();
        return view('search')->with('products', $products);
    }
    public function calculate_fee(Request $request){
        $data = $request->all();
        if($data['matp']){
            $feeship = Feeship::where('fee_matp',$data['matp'])->where('fee_maqh',$data['maqh'])->where('fee_xaid',$data['xaid'])->get();
            if($feeship){
                $count_feeship = $feeship->count();
                if($count_feeship>0){
                     foreach($feeship as $key => $fee){
                        Session::put('fee',$fee->fee_feeship);
                        Session::save();
                    }
                }else{ 
                    Session::put('fee',25000);
                    Session::save();
                }
            }
           
        }
    }
}
