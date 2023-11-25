<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\data_siswa;
use App\Models\User;


class RegistersiswaController extends Controller
{
    public function registersiswa(){
        $registersiswa=data_siswa::get();

        return view('layout.datasiswa', compact('datasiswa'));
    }

    public function insertregisterdatasiswa(Request $request){
        $data = $request->all();
        $user = new User();

        $user->name = $request->Nama;
        $user->email = $request->Email;
        $user->password = bcrypt($request->Password);
        $user->role = 'siswa';

        $user->save();

        data_siswa::insert([
            'NIS'=> $request->NIS,
            'Nama'=> $request->Nama,
            'Tanggal_Lahir'=> $request->Tanggal_Lahir,
            'Jenis_Kelamin'=> $request->Jenis_Kelamin,
            'Agama'=> $request->Agama,
            'Kelas'=> $request->Kelas,
            'Jurusan'=> $request->Jurusan,
            'Email'=> $request->Email,
            'Password'=> $request->Password,
        ]);
        return redirect('/datasiswa');
    }

}
