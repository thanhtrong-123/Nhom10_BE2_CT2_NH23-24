<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;


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
        $customer_order = DB::table('customers')->orderby('customer_id', 'desc')->get();
        return view('admin.order.add_order')->with('customer_order', $customer_order);
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
        $data->customer_id = $request->customer_order;
        $data->payment_id = $request->payment_id;
        $data->order_name = $request->order_name;
        $data->order_address = $request->order_address;
        $data->order_phone = $request->order_phone;
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
        $customer_order = DB::table('customers')->orderby('customer_id', 'desc')->get();
        return view('admin.order.edit_order', ['data' => Order::find($id), 'customer_order' => $customer_order]);
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
        
        $data->customer_id = $request->customer_order;
        $data->payment_id = $request->payment_id;
        $data->order_name = $request->order_name;
        $data->order_address = $request->order_address;
        $data->order_phone = $request->order_phone;
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

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

}
    
