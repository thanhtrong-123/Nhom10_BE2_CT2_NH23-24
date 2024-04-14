<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Providers\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Wishlist $wishlist) {
        return view('wishlist')->with('wishlist', $wishlist);
    }

    public function add($product_id, Wishlist $wishlist) {
        $product = Product::find($product_id);
        $wishlist->addWishlist($product,);
        return redirect()->route('wishlist.index');
    }

    public function delete(Request $request, Wishlist $wishlist) {
        $product_id = $request->product_id;
        $wishlist->deleteWishlist($product_id);
        return redirect()->route('wishlist.index');
    }

    public function deleteAll(Wishlist $wishlist) {
        $wishlist->deleteAllWishlist();
        return redirect()->route('wishlist.index');
    }
}
