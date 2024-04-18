<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class OrderController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AuthLogin();
        return view('admin.order.all_order', ['data' => Order::all()]);
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
        return view('admin.order.add_order');
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    }
    public function store(Request $request)
    {
        $this->AuthLogin();
        $data = new Order;

        $data->order_id = $request->order_id;
        $data->customer_id = $request->customer_id;
        $data->payment_id = $request->payment_id;
        $data->shipping_id = $request->shipping_id;
        $data->order_total = $request->order_total;
        $data->order_status = $request->order_status;
        $data->save();
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('order');

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
        return view('admin.order.order');
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
        $data = Order::find($id);
        $data->order_id = $request->order_id;
        $data->customer_id = $request->customer_id;
        $data->payment_id = $request->payment_id;
        $data->shipping_id = $request->shipping_id;
        $data->order_total = $request->order_total;
        $data->order_status = $request->order_status;
        $data->save();
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('order');
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
        //Delete Don hang
        Order::destroy($id);
        Session::put('message', 'Xóa đơn hàng thành công');
        return Redirect::to('order');

    }
    public function unactive_order($order_id){
        $this->AuthLogin();
        $data = new Order;
        $data->where('order_id',$order_id)->update(['order_status'=>1]);
        Session::put('message','Đơn hàng hiển thị không thành công!');
        return Redirect::to('order');

    }
    public function active_order($order_id){
        $this->AuthLogin();
        $data = new Order;
        $data->where('order_id',$order_id)->update(['order_status'=>0]);
        Session::put('message','Hiển thị đơn hàng thành công!');
        return Redirect::to('order');
    }

}
    
