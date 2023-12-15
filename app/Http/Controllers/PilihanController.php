<?php

namespace App\Http\Controllers;

use App\Models\pilihan;
use Illuminate\Http\Request;

class PilihanController extends Controller
{
    public function pilihan(){
        $data=pilihan::get();

        return view ('guru.pilihan',compact('pilihan') );
    }

    public function insertPilihan(Request $request){
        // dd($request->all());
        $pilihan = Pilihan::insert([
            'id_Soal' => $request->id_soal,
            'Pilihan_A' => $request->A,
            'Pilihan_B' => $request->B,
            'Pilihan_C' => $request->C,
            'Pilihan_D' => $request->D,
            'Pilihan_E' => $request->E,
            'pilihan_jawaban' => $request->pilihan_jawaban
        ]);

        return redirect()->back();
    }
}
