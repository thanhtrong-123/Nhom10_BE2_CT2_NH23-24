<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public $primaryKey = 'brand_id';
    protected $table = 'brands';

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}
