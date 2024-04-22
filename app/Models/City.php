<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $primaryKey = "matp";
    protected $table = 'tinhthanhpho';

    public function quanhuyen()
    {
        return $this->hasMany(Province::class, 'matp');
    }
}
