<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public $primaryKey = "order_details_id";
    protected $fillable = ['order_id', 'product_id', 'product_name', 'product_price', 'product_sales_quantily'];
}
