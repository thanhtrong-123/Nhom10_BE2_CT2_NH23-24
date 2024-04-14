<?php
namespace App\Providers;

class Wishlist
{
    private $items = [];

    public function __construct()
    {
        $this->items = session('wishlist') ? session('wishlist') : [];
    }

    // Phuong thuc lay ve wishlist
    public function list()
    {
        return $this->items;
    }

    // Phuong thuc lay tong san pham co trong wishlist
    public function getTotalQty()
    {
        $totalQty = 0;
        foreach ($this->items as $item) {
            $totalQty++;
        }
        return $totalQty;
    }

    // Them moi san pham vao wishlist
    public function addWishlist($product)
    {
        if (!array_key_exists($product->product_id, $this->items)) {
            $item = [
                'product_id' => $product->product_id,
                'product_name' => $product->product_name,
                'product_image' => $product->product_image,
                'product_price' => $product->product_price
            ];
            $this->items[$product->product_id] = $item;
            session(['wishlist' => $this->items]);
        }
    }

    // Xoa san pham khoi wishlist
    public function deleteWishlist($product_id)
    {
        unset($this->items[$product_id]);
        session(['wishlist' => $this->items]);
    }

    // Xoa het san pham khoi wishlist
    public function deleteAllWishlist()
    {
        unset($this->items);
        session()->forget('wishlist');
    }
}