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
        $data = $request->validate([
            'Hari'=>'required',
            'Tanggal'=>'required',
            'Jam'=>'required',
            'Mata_Pelajaran'=>'required',
            'Kelas'=>'required',
            'Jurusan'=>'required',

        ]);
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
    public function hapus($id){
        $data=jadwal::find($id);
        $data->delete();
        return redirect('/jadwal');

    }
    public function update($id,Request $request){
        $data=jadwal::whereId($id)->first();
        $data->Hari=$request->Hari;
        $data->Tanggal=$request->Tanggal;
        $data->Jam=$request->Jam;
        $data->Mata_Pelajaran=$request->Mata_Pelajaran;
        $data->Kelas=$request->Kelas;
        $data->Jurusan=$request->Jurusan;
        $data->save();
        return redirect('/jadwal');
    }
}
