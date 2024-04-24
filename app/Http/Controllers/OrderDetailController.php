<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($order_id)
    {
        //
        //dd($order_id);
        $this->AuthLogin();
        return view ('admin.orderdetail.all_orderdetail',['data' => OrderDetail::all()]);
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
        $order_orderdetail = DB::table('orders')->orderby('order_id','desc')->get();
        $product_orderdetail = DB::table('products')->orderby('product_id','desc')->get();
        return view('admin.orderdetail.add_orderdetail')->with('order_orderdetail', $order_orderdetail, 'product_orderdetail', $product_orderdetail);
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
        $data = new OrderDetail;

        $data->order_details_id = $request->order_details_id;
        $data->order_id = $request->order_orderdetail;
        $data->product_id = $request->product_orderdetail;
        $data->product_name = $request->product_name;
        $data->product_price = $request->product_price;
        $data->product_sales_quantily = $request->product_sales_quantily;
        
        $data->save();
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('orderdetail');
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
        $order_orderdetail = DB::table('orders')->orderby('order_id','desc')->get();
        $product_orderdetail = DB::table('products')->orderby('product_id','desc')->get();
        return view('admin.orderdetail.edit_orderdetail')->with('order_orderdetail', $order_orderdetail, 'product_orderdetail', $product_orderdetail);
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
        $data = OrderDetail::find($id);

        $data->order_details_id = $request->order_details_id;
        $data->order_id = $request->order_orderdetail;
        $data->product_id = $request->product_orderdetail;
        $data->product_name = $request->product_name;
        $data->product_price = $request->product_price;
        $data->product_sales_quantily = $request->product_sales_quantily;
        
        $data->save();
        Session::put('message', 'cập nhật sản phẩm thành công');
        return Redirect::to('orderdetail');
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
        $this->AuthLogin();
        //Delete Don hang
        OrderDetail::destroy($id);
        Session::put('message', 'Xóa đơn hàng thành công');
        return Redirect::to('orderdetail');
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
