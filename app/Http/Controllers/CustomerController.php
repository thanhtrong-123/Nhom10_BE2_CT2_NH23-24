<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all customers
        $this->AuthLogin();
        $data = Customer::where('customer_id', '>', 0)->paginate(4);
        return view('admin.users.all_users', ['data' => $data]);
    }

    public function searchcustomer(Request $request){
        $searchcustomer = $request->searchcustomer;

        $data =Customer::where(function($query) use ($searchcustomer){

            $query->where('customer_name','like',"%$searchcustomer%")
            ->orWhere('customer_email','like',"%$searchcustomer%")
            ->orWhere('customer_phone','like',"%$searchcustomer%");
            })
            ->paginate(10);
            return view('admin.users.all_users', ['data' => $data, 'searchcustomer']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create customer
        $this->AuthLogin();
        return view('admin.users.add_users');
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
        $data = new Customer;
        $data->customer_name = $request->customer_name;
        $data->customer_email = $request->customer_email;
        $data->customer_password = $request->customer_password;
        $data->customer_phone = $request->customer_phone;
        $data->save();
        Session::put('message','Thêm user thành công');
        return Redirect::to('customer');
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
        return view('admin.users.edit_users', ['data' => Customer::find($id)]);
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
        // Edit customer
        $this->AuthLogin();
        $data = Customer::find($id);
        $data->customer_name = $request->customer_name;
        $data->customer_email = $request->customer_email;
        $data->customer_password = $request->customer_password;
        $data->customer_phone = $request->customer_phone;
        $data->save();
        Session::put('message','Cập nhật user thành công');
        return Redirect::to('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete user
        $this->AuthLogin();
        Customer::destroy($id);
        Session::put('message','Xóa user thành công');
        return Redirect::to('customer');
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
