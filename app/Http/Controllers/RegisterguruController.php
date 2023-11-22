<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;

class RegisterguruController extends Controller
{
    public function registerGuru(){
        $registerguru=Guru::get();

        return view('layout.dataguru', compact('dataguru'));
    }

    public function insertregisterguru(Request $request){
        $data = $request->all();
        Guru::insert([
            'Nama'=> $request->Nama,
            'Tanggal_Lahir'=> $request->Tanggal_Lahir,
            'Jenis_Kelamin'=> $request->Jenis_Kelamin,
            'Agama'=> $request->Agama,
            'Email'=> $request->Email,
            'Password'=> $request->Password,
        ]);
        return redirect('/dataguru');
    }

}
