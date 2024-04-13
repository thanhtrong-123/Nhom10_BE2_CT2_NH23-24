<?php
namespace App\Providers;
class Cart{
    private $items = [];
    private $totalQty = 0;
    
    public function __construct() {
        $this->items = session('cart') ? session('cart') : [];
    }

    // Phuong thuc lay ve danh sach san pham trong gio
    public function list() {
        return $this->items;
    }
    
    // Phuong thuc lay tong tien
    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item['product_price'] * $item['qty'];
        }
        return $totalPrice;
    }

    // Them moi san pham vao gio hang
    public function add($product, $qty = 1) {
        $item = [
            'product_id'=> $product->product_id,
            'product_name'=> $product->product_name,
            'product_image' => $product->product_image,
            'product_price' => $product->product_price,
            'qty' => $qty
        ];
        $this->items[$product->product_id] = $item;
        session(['cart' => $this->items]);
    }
}