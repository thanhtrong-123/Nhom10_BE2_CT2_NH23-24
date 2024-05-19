<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class ChangePassword extends Controller
{
    public function updatepassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Get current logged in user
        $customer = Customer::where('customer_email', $request->emailpw)->first();

        if (!$customer) {
            return back()->with('error', 'User not found.');
        }

        // Verify current password
        if (!Hash::check($request->current_password, $customer->customer_password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        // Update password
        $customer->customer_password = Hash::make($request->new_password);
        $customer->save();

        return back()->with('status', 'Password has been changed successfully.');
        // $data = new Customer();
        // $data->customer_name = $request->namepw;
        // $data->customer_email = $request->emailpw;
        // $data->customer_phone = $request->phonepw;
        // $data->customer_password = Hash::make($request->new_password);
        // $data->save();
    }
}
