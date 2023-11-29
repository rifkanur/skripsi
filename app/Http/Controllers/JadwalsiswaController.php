<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalsiswaController extends Controller
{
    public function jadwalsiswa(){
        $jadwalsiswa=jadwal::get();

        return view ('siswa.jadwalsiswa',compact('jadwalsiswa') );
    }
}
