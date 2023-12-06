<?php

namespace App\Http\Controllers;

use App\Models\paketsoal;
use Illuminate\Http\Request;

class PaketSoalController extends Controller
{
    public function paket()
    {
        $data = paketsoal::all();
        return view('guru.paket', compact('data'));
    }

    public function insertpaketsoal(Request $request)
    {
        $data = $request->validate([
            'Nama_Paket_Soal' => 'required',
            'Mata_Pelajaran' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
        ]);
        paketsoal::insert([
            'Nama_Paket_Soal' => $request->Nama_Paket_Soal,
            'Mata_Pelajaran' => $request->Mata_Pelajaran,
            'Kelas' => $request->Kelas,
            'Jurusan' => $request->Jurusan,
        ]);
        return redirect('/datapaket');
    }

    public function update($id, Request $request)
    {
        $data = paketsoal::whereId($id)->first();
        $data->Nama_Paket_Soal = $request->Nama_Paket_Soal;
        $data->Mata_Pelajaran = $request->Mata_Pelajaran;
        $data->Kelas = $request->Kelas;
        $data->Jurusan = $request->Jurusan;
        $data->save();
        return redirect('/datapaket');
    }
}
