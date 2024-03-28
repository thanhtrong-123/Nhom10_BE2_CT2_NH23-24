<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandProduct extends Controller
{
    public function add_brand_product(){
        return  view('admin.add_brand_product');
    }
    public function all_brand_product(){
        return view('admin.all_brand_product');
    }
}