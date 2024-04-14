<?php
namespace App\Providers;

class Cart
{
    private $items = [];

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }

    // Phuong thuc lay ve danh sach san pham trong gio
    public function list()
    {
        return $this->items;
    }

    // Phuong thuc lay tong tien
    public function getTotalMoney()
    {
        $totalMoney = 0;
        foreach ($this->items as $item) {
            $totalMoney += $item['product_price'] * $item['qty'];
        }
        return $totalMoney;
    }
    // Phuong thuc lay tong loai san pham
    public function getTotalQty()
    {
        $totalQty = 0;
        foreach ($this->items as $item) {
            $totalQty += $item['qty'];
        }
        return $totalQty;
    }

    // Them moi san pham vao gio hang
    public function addCart($product, $qty = 1)
    {
        if (!array_key_exists($product->product_id, $this->items)) {
            $item = [
                'product_id' => $product->product_id,
                'product_name' => $product->product_name,
                'product_image' => $product->product_image,
                'product_price' => $product->product_price,
                'qty' => $qty
            ];
            $this->items[$product->product_id] = $item;
            session(['cart' => $this->items]);
        } else {
            $this->items[$product->product_id]['qty'] += $qty;
            session(['cart' => $this->items]);
        }
    }

    // Cap nhat gio hang
    public function updateCart($product_id, $qty)
    {
        $this->items[$product_id]['qty'] = $qty;
        session(['cart' => $this->items]);
    }

    // Xoa san pham khoi gio hang
    public function deleteCart($product_id)
    {
        unset($this->items[$product_id]);
        session(['cart' => $this->items]);
    }

    // Xoa het san pham khoi gio hang
    public function deleteAllCart()
    {
        unset($this->items);
        session()->forget('cart');
    }
}