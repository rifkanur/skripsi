<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JadwalController extends Controller
{
    public function jadwal(){
        $jadwal=jadwal::get();

        return view ('layout.jadwal',compact('jadwal') );
    }

    public function insertjadwal(Request $request){
        $data = $request->all();
        jadwal::insert([
            'Hari'=> $request->Hari,
            'Tanggal'=> $request->Tanggal,
            'Jam'=> $request->Jam,
            'Mata_Pelajaran'=> $request->Mata_Pelajaran,
            'Kelas'=> $request->Kelas,
            'Jurusan'=> $request->Jurusan,

        ]);
        return redirect('/jadwal');
    }
}
