<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public $primaryKey = "maqh";
    protected $table = 'quanhuyen';

    public function tinhthanhpho()
    {
        return $this->belongsTo(City::class, 'matp');
    }
    public function xaphuongthitran()
    {
        return $this->hasMany(Wards::class, 'maqh');
    }
}
