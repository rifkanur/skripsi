<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalguruController extends Controller
{
    public function jadwalguru(){
        $jadwalguru=jadwal::get();

        return view ('guru.jadwalguru',compact('jadwalguru') );
    }
}
