<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paketsoal extends Model
{
    use HasFactory;
    protected $table ="paketsoalgurus";
    protected $fillable=[
        'Nama_Paket_Soal',
        'Mata_Pelajaran',
        'Kelas',
        'Jurusan',

    ];

    public $timestamps=false;
}
