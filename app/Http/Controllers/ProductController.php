<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as FacadesDB;
use Storage;
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
        //phân trang
        // $data = Product::with('category', 'brand')->paginate(5); // Lấy 10 sản phẩm mỗi trang
        $this->AuthLogin();
        $data = Product::where('product_id', '>', 0)->paginate(10);
        return view('admin.products.all_product', ['data' => $data]);
    }

    public function searchproduct(Request $request){
        $searchproduct = $request->searchproduct;

        $data =Product::where(function($query) use ($searchproduct){

            $query->where('product_name','like',"%$searchproduct%")
            ->orWhere('product_desc','like',"%$searchproduct%");
            })
            ->paginate(10);
            return view('admin.products.all_product', ['data' => $data, 'searchproduct']);
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
        $cate_product = DB::table('categories')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('brands')->orderby('brand_id', 'desc')->get();
        return view('admin.products.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
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
        $data = new Product;

        $data->product_name = $request->product_name;
        $data->product_qty = $request->product_quantity;
        $data->product_slug = $request->product_slug;
        $data->product_price = $request->product_price;
        // Ràng buộc Image
        $validation = $request->validate([
            'product_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
        // Kiểm tra xem người dùng có upload hình ảnh hay không?
        if ($request->hasFile('product_image')) {
            $file = $request->product_image;

            // Lưu tên hình vào column slider_image
            $data->product_image = $file->store('profile');

            // Chép file vào thư mục "storate/public/images/products"
            $fileSaved = $file->storeAs('public/images/products', $data->product_image);
        }
        $data->category_id = $request->product_cate;
        $data->brand_id = $request->product_brand;

        $data->product_desc = $request->product_desc;
        $data->product_content = $request->product_content;
        $data->product_status = $request->product_status;
        $data->product_qty = $request->product_quantity;
        $data->save();
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('products');

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
        $cate_product = DB::table('categories')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('brands')->orderby('brand_id', 'desc')->get();
        return view('admin.products.edit_product', ['data' => Product::find($id), 'cate_product' => $cate_product, 'brand_product' => $brand_product]);
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
        $this->AuthLogin();
        $data = Product::find($id);
        $data->product_name = $request->product_name;
        $data->product_qty = $request->product_quantity;
        $data->product_slug = $request->product_slug;
        $data->product_price = $request->product_price;
        $data->product_desc = $request->product_desc;
        $data->product_content = $request->product_content;
        $data->product_status = $request->product_status;
        $validation = $request->validate([
            'product_image' => 'file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);
        // Kiểm tra xem người dùng có upload hình ảnh hay không?
        if ($request->hasFile('product_image')) {
            $file = $request->product_image;

            // Xóa hình cũ
            Storage::delete('public/images/products/' . $data->product_image);   

            // Lưu tên hình vào column slider_image
            $data->product_image = $file->store('profile');


            // Chép file vào thư mục "storate/public/images/products"
            $fileSaved = $file->storeAs('public/images/products', $data->product_image);

            
        }
        $data->save();
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('products');
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
        $data = Product::find($id);
        // Xóa image cua product
        Storage::delete('public/images/products/' . $data->product_image);
        //Delete San Pham
        Product::destroy($id);
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('products');

    }
    public function unactive_product($product_id){
        $this->AuthLogin();
        $data = new Product;
        $data->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Hiển thị sản phẩm không thành công!');
        return Redirect::to('products');

    }
    public function active_product($product_id){
        $this->AuthLogin();
        $data = new Product;
        $data->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Hiển thị sản phẩm thành công!');
        return Redirect::to('products');
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
