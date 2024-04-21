<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;
    public $primaryKey = "xaid";
    protected $table = 'xaphuongthitran';

    public function quanhuyen()
    {
        return $this->belongsTo(Province::class, 'maqh');
    }
}
