<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Storage;
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
        $this->AuthLogin();
        return view('admin.brand.all_brand_product', ['data' => Brand::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return  view('admin.brand.add_brand_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->AuthLogin();
        $data = new Brand;
        $data->brand_name = $request->brand_product_name;
        $data->brand_slug = $request->slug_brand_product;

        // Bổ sung ràng buộc Validate
        $validation = $request->validate([
            'brand_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
        // Kiểm tra xem người dùng có upload hình ảnh hay không?
        if ($request->hasFile('brand_image')) {
            $file = $request->brand_image;

            // Lưu tên hình vào column brand_image
            $data->brand_image = $file->store('profile');

            // Chép file vào thư mục "storate/public/images/brands"
            $fileSaved = $file->storeAs('public/images/brands', $data->brand_image);
        }

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
        $this->AuthLogin();
        return view('admin.brand.edit_brand_product', ['data' => Brand::find($id)]);
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
        $data = Brand::find($id);
        $data->brand_name = $request->brand_product_name;
        $data->brand_slug = $request->slug_brand_product;
        $validation = $request->validate([
            'brand_image' => 'file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
        // Kiểm tra xem người dùng có upload hình ảnh hay không?
        if ($request->hasFile('brand_image')) {
            $file = $request->brand_image;

            // Xóa hình cũ
            Storage::delete('public/images/brands/' . $data->brand_image);   

            // Lưu tên hình vào column brand_image
            $data->brand_image = $file->store('profile');


            // Chép file vào thư mục "storate/public/images/brands"
            $fileSaved = $file->storeAs('public/images/brands', $data->brand_image);

            
        }
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
        $this->AuthLogin();
        $data = Brand::find($id);
        // Xóa image cua brand
        Storage::delete('public/images/brands/' . $data->brand_image);
        // Delete Brand
        Brand::destroy($id);
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');
    }

    public function unactive_brand_product($brand_product_id){
        $this->AuthLogin();
        $data = new Brand;
        $data->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Không hiển thị thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');

    }

    public function active_brand_product($brand_product_id){
        $this->AuthLogin();
        $data = new Brand;
        $data->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Hiển thị thương hiệu sản phẩm thành công');
        return Redirect::to('brandProduct');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
}
