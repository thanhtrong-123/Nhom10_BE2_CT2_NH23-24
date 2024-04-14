<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.all_category_product', ['data' => Category::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('admin.add_category_product');
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
        $data = new Category;
        $data->category_name = $request->category_product_name;
        $data->category_slug = $request->slug_category_product;
        $data->category_desc = $request->category_product_desc;
        $data->category_keywords = $request->category_product_keywords;
        $data->category_status = $request->category_product_status;
        $data->save();
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('categoryProduct');
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
        return view('admin.edit_category_product', ['data' => Category::find($id)]);
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
        $data = Category::find($id);
        $data->category_name = $request->category_product_name;
        $data->category_slug = $request->slug_category_product;
        $data->category_desc = $request->category_product_desc;
        $data->category_keywords = $request->category_product_keywords;
        $data->save();
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('categoryProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('categoryProduct');
    }
    public function unactive_category_product($category_product_id){
        //$this->AuthLogin();
        $data = new Category;
        $data->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Không hiển thị danh mục sản phẩm thành công!');
        return Redirect::to('categoryProduct');

    }
    public function active_category_product($category_product_id){
        //$this->AuthLogin();
        $data = new Category;
        $data->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Hiển thị danh mục sản phẩm thành công!');
        return Redirect::to('categoryProduct');
    }
}
