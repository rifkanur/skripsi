<?php

namespace App\Http\Controllers;

use App\Models\soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function datasoal($id)
    {
        $datasoal = soal::where('id_paketsoal', $id)->get();

        return view('guru.datasoal', compact('datasoal', 'id'));
    }

    public function tambahdatasoal($id)
    {
        return view('guru.soal', compact('id'));
    }

    public function insertsoal(Request $request)
    {
        $data = $request->validate([
            'Soal' => 'required',
        ]);
        soal::insert([
            'id_paketsoal' => $request->id_paketsoal,
            'Soal' => $request->Soal,
        ]);
        return redirect('/datapaket/'.$request->id_paketsoal.'/soal');
    }

    public function hapus($id){
        $data=soal::find($id);
        $data->delete();
        return redirect('/datasoal');

    }
}
