<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kisikisiguru extends Model
{
    use HasFactory;
    protected $table ="Kisikisiguru";

    protected $fillable=[
        'id',
        'KIKD',
        'Materi',
        'Indikator_Soal',
    ];
}
