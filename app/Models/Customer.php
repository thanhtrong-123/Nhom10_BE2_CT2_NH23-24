<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $primaryKey = 'customer_id';

    public function order()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'customer_id');
    }
}

