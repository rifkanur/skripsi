<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;
    protected $table ="id_Paketsoal";
    protected $fillable=[
        'id',
        'id_Paketsoal',
        'Mata_Pelajaran',

    ];
}
