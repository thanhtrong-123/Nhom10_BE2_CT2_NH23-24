<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.products.all_products', ['data' => Product::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create product
        return  view('admin.products.add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Product;
        $data->product_name = $request->product_name;
        $data->product_qty = $request->product_qty;
        $data->product_slug = $request->product_slug;
        $data->product_price = $request->product_price;
        $data->product_image = $request->product_image;
        $data->product_desc = $request->product_desc;
        $data->product_content = $request->product_content;
        $data->product_status = $request->product_status;
        $data->save();
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.products.edit_products', ['data' => Product::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data->product_name = $request->product_name;
        $data->product_qty = $request->product_qty;
        $data->product_slug = $request->product_slug;
        $data->product_price = $request->product_price;
        $data->product_image = $request->product_image;
        $data->product_desc = $request->product_desc;
        $data->product_content = $request->product_content;
        $data->product_status = $request->product_status;
        $data->save();
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete San Pham
        Product::destroy($id);
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('product');
    }
}
