<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    use HasFactory;
    protected $table ="data_siswa";
    protected $fillable=[
        'id',
        'NIS',
        'Nama',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Agama',
        'Kelas',
        'Jurusan',
        'Email',
        'Password',
    ];
}
