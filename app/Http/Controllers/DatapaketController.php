<?php

namespace App\Http\Controllers;

use App\Models\paketsoal;
use Illuminate\Http\Request;

class DatapaketController extends Controller
{
    public function datapaket()
    {
        $datapaket = paketsoal::get();

        return view('guru.datapaket', compact('datapaket'));
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

    public function hapus($id){
        // $data=paketsoal::find($id);
        // $data->delete();
        // return redirect('/datapaket');

    }
}
