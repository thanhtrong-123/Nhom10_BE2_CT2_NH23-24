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
        $this->AuthLogin();
        $data = Category::where('category_id', '>', 0)->paginate(4);
        return view('admin.category.all_category_product', ['data' => $data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->AuthLogin();
        return  view('admin.category.add_category_product');
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
        $this->AuthLogin();
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
        $this->AuthLogin();
        return view('admin.category.edit_category_product', ['data' => Category::find($id)]);
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
        $this->AuthLogin();
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
        $this->AuthLogin();
        Category::destroy($id);
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('categoryProduct');
    }
    public function unactive_category_product($category_product_id){
        $this->AuthLogin();
        $data = new Category;
        $data->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Không hiển thị danh mục sản phẩm thành công!');
        return Redirect::to('categoryProduct');

    }
    public function active_category_product($category_product_id){
        $this->AuthLogin();
        $data = new Category;
        $data->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Hiển thị danh mục sản phẩm thành công!');
        return Redirect::to('categoryProduct');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function order(){
        return view('admin.view_order');
    }
}
