<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return  view('admin.add_category_product');
    }
    public function all_category_product(){
        $all_category_product = DB::table('categories')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.all_caterory_product',$manager_category_product);
    }
    public function save_category_product(Request $request ){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_slug'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_keywords'] = $request->category_product_keywords;
        $data['category_status'] = $request->category_product_status;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        DB::table('categories')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }
    public function unactive_category_product($category_product_id){
        //$this->AuthLogin();
        DB::table('categories')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');

    }
    public function active_category_product($category_product_id){
        //$this->AuthLogin();
        DB::table('categories')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id){
        //$this->AuthLogin();
        $edit_category_product = DB::table('categories')->where('category_id',$category_product_id)->get();

        $manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);

        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        //$this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_keywords'] = $request->category_product_keywords;
        $data['category_slug'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['updated_at'] = now();
        DB::table('categories')->where('category_id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id){
        //$this->AuthLogin();
        DB::table('categories')->where('category_id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }


}