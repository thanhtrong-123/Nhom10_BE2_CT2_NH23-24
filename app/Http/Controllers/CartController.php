<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Providers\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Cart $cart) {
        return view('cart')->with('cart', $cart);
    }

    public function add(Request $request, Cart $cart) {
        $produc = Product::find($request->product_id);
        $qty = $request->qty;
        $cart->add($produc, $qty);
        return redirect()->route('cart.index');
    }
}
