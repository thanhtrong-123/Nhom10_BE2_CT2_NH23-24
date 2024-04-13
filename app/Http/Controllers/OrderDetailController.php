<?php

namespace App\Http\Controllers;

use App\Models\Order_detail;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all order_detail
        return view('admin.order_details.all_product', ['data' => Order_detail::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create order_details
        $order_order = DB::table('orders')->orderby('order_id','desc')->get();
        $product_order = DB::table('products')->orderby('product_id','desc')->get();
        return view('admin.products.add_product')->with('order_order', $order_order)->with('product_order', $product_order);
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
        $data->product_sales_quantily = $request->product_sales_quantily;
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
        $data->order_id = $request->product_order;
        $data->product_id = $request->product_productt;

       
        $data->save();
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('order-detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Order_detail $order_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_detail $order_detail)
    {
        //
        $order_order = DB::table('orders')->orderby('order_id','desc')->get();
        $product_order = DB::table('products')->orderby('product_id','desc')->get();
        return view('admin.order_details.edit_product', ['data' => Order_detail::find($order_detail), 'order_order' => $order_order, 'product_order' => $product_order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_detail $order_detail)
    {
        //
        $data = Order_detail::find($order_detail);
        $data->product_name = $request->product_name;
        $data->product_sales_quantily= $request->product_sales_quantily;
        
        $data->product_price = $request->product_price;
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
        return Redirect::to('order-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_detail $order_detail)
    {
        //
        $data = Order_detail::find($order_detail);
        // Xóa image cua product
        Storage::delete('public/images/products/' . $data->product_image);
        //Delete San Pham
        Product::destroy($id);
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('order-detail');
    }
}
