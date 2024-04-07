<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.all_brand_product', ['data' => Brand::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('admin.add_brand_product');
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
        $data = new Brand;
        $data->brand_name = $request->brand_product_name;
        $data->brand_slug = $request->slug_brand_product;
        $data->brand_desc = $request->brand_product_desc;
        $data->brand_status = $request->brand_product_status;
        $data->save();
        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');
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
        return view('admin.edit_brand_product', ['data' => Brand::find($id)]);
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
        //
        $data = Brand::find($id);
        $data->brand_name = $request->brand_product_name;
        $data->brand_slug = $request->slug_brand_product;
        $data->brand_desc = $request->brand_product_desc;
        $data->save();
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Brand::destroy($id);
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');
    }

    public function unactive_brand_product($brand_product_id){
        //$this->AuthLogin();
        $data = new Brand;
        $data->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Không hiển thị thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');

    }

    public function active_brand_product($brand_product_id){
        //$this->AuthLogin();
        $data = new Brand;
        $data->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Hiển thị thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');
    }
}
