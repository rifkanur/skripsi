<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilihan extends Model
{
    use HasFactory;
    protected $table ="pilihan";
    protected $fillable=[
        'id',
        'Pilihan_A',
        'Pilihan_B',
        'Pilihan_C',
        'Pilihan_D',
        'Pilihan_E',

    ];
}
