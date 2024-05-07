<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;



class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showOrderDetail($order_id)
    {
        //
        
        // Retrieve the order details from the database
        $orders = OrderDetail::where('order_id', $order_id)->get();
        $products = Product::where('product_status', 0)->get();
       
        // Pass the order details to the view

        return view('admin.order.order_detail')->with('orders', $orders)->with('products', $products);
        // return view('admin.order.order_detail', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function saveOrderDetail(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_name' => 'required|string|max:100',
            'product_price' => 'required|numeric',
            'product_sales_quantity' => 'required|integer',
        ]);

        // Create a new OrderDetail instance
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $validatedData['order_id'];
        $orderDetail->product_name = $validatedData['product_name'];
        $orderDetail->product_price = $validatedData['product_price'];
        $orderDetail->product_sales_quantity = $validatedData['product_sales_quantity'];

        // Save the order detail to the database
        $orderDetail->save();

        // Redirect back to the order detail page
        return redirect()->back()->with('success', 'Chi tiết đơn hàng đã được thêm thành công.');
    }

    public function showAddOrderDetailForm()
    {
        return view('admin.order.add_order_detail');
    }

    public function updateOrderDetail(Request $request,  $id)
    {
        // Validate the incoming request data
       
            //
          
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
            
        

        // Redirect back to the order detail page with a success message
        return redirect()->back()->with('success', 'Chi tiết đơn hàng đã được cập nhật thành công.');
    }
    public function editOrderDetail(Order $orderDetail)
    {
        return view('admin.order.update_order_detail', compact('orderDetail'));
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
   
        $orderDetail = OrderDetail::create($request->all());
        return response()->json($orderDetail, 201);
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
        $orderDetail = OrderDetail::findOrFail($id);
        return response()->json($orderDetail);
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
     
        $orderDetail = OrderDetail::findOrFail($id);
        $orderDetail->update($request->all());
        return response()->json($orderDetail, 200);
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
   
        OrderDetail::destroy($id);
        return response()->json(null, 204);
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
    }
}
