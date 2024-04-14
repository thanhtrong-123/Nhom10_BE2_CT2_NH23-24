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
        $product = Product::find($request->product_id);
        $qty = $request->qty;
        $cart->addCart($product, $qty);
        return redirect()->route('cart.index');
    }

    public function update(Request $request, Cart $cart) {
        $product_id = $request->product_id;
        $qty = $request->qty;
        $cart->updateCart($product_id, $qty);
        return redirect()->route('cart.index');
    }

    public function delete(Request $request, Cart $cart) {
        $product_id = $request->product_id;
        $cart->deleteCart($product_id);
        return redirect()->route('cart.index');
    }

    public function deleteAll(Cart $cart) {
        $cart->deleteAllCart();
        return redirect()->route('cart.index');
    }
}
