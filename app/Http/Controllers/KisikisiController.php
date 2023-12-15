<?php

namespace App\Http\Controllers;

use App\Models\kisikisiguru;
use Illuminate\Http\Request;

class KisikisiController extends Controller
{
    public function kisikisi(){
        $kisikisi=kisikisiguru::all();

        return view ('layout.kisikisi',compact('kisikisi') );
    }

    public function edit($id){
        $kisikisi=kisikisiguru::whereId($id)->first();
        return view('guru.editkisikisi', compact(['kisikisi']));
        }

        public function update($id,Request $request){
            //  dd($request);
              $data=kisikisiguru::whereId($id)->first();
              $data->Nama_kisi_kisi=$request->Nama_kisi_kisi;
              $data->Mata_Pelajaran=$request->Mata_Pelajaran;
              $data->Kelas=$request->Kelas;
              $data->Jurusan=$request->Jurusan;
              $data->KIKD=$request->KIKD;
              $data->Tujuan_Pembelajaran=$request->Tujuan_Pembelajaran;
              $data->Materi=$request->Materi;
              $data->Indikator_Soal=$request->Indikator_Soal;
              $data->save();
              return redirect('/kisikisi');
          }

    public function hapuskisikisi($id)
    {
        $data = kisikisiguru::whereId($id);
        $data->delete();
        return redirect('/kisikisi');
    }

}
