<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->AuthLogin();
        return view('admin.coupon.list_coupon', ['data' => Coupon::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->AuthLogin();
        return  view('admin.coupon.insert_coupon');
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
        // $this->AuthLogin();
        $data = new Coupon;
        $data->coupon_name = $request->coupon_name;
        $data->coupon_code = $request->coupon_code;
        $data->coupon_qty = $request->coupon_quantity;
        $data->coupon_condition = $request->coupon_condition;
        $data->coupon_number = $request->coupon_number;
        $data->save();
        Session::put('message','Thêm phiếu giảm giá thành công');
        return Redirect::to('couponCode');
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
        // $this->AuthLogin();
        $data = Coupon::find($id);
        Coupon::destroy($id);
        Session::put('message','Xóa phiếu giảm giá thành công');
        return Redirect::to('couponCode');
    }
}
