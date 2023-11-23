<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa;

class DatasiswaController extends Controller
{
    public function datasiswa(){
        $datasiswa=data_siswa::all();
        return view('layout.datasiswa', compact(['datasiswa']));

    }
}
