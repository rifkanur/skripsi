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
    public function hapus($id){
        $data=data_siswa::whereId($id);
        $data->delete();
        return redirect('/datasiswa');
        }
    public function edit($id){
        $datasiswa=data_siswa::whereId($id)->first();
        return view('siswa.updatedatasiswa', compact(['datasiswa']));
    }
    public function update($id,Request $request){
      //  dd($request);
        $data=data_siswa::whereId($id)->first();
        $data->NIS=$request->NIS;
        $data->Nama=$request->Nama;
        $data->Tanggal_Lahir=$request->Tanggal_Lahir;
        $data->Jenis_Kelamin=$request->Jenis_Kelamin;
        $data->Agama=$request->Agama;
        $data->Kelas=$request->Kelas;
        $data->Jurusan=$request->Jurusan;
        $data->Email=$request->Email;
        $data->Password=$request->Password;
        $data->save();
        return redirect('/datasiswa');
    }
}
