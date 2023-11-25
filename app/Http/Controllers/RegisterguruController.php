<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\User;

class RegisterguruController extends Controller
{
    public function registerGuru(){
        $registerguru=Guru::get();

        return view('template.login', compact('login'));
    }

    public function insertregisterguru(Request $request){
        $data = $request->all();
        $user = new User();

        $user->name = $request->Nama;
        $user->email = $request->Email;
        $user->password = bcrypt($request->Password);
        $user->role = 'guru';

        $user->save();

        Guru::insert([
            'user_id'=>$user->id,

            'Nama'=> $request->Nama,
            'Tanggal_Lahir'=> $request->Tanggal_Lahir,
            'Jenis_Kelamin'=> $request->Jenis_Kelamin,
            'Agama'=> $request->Agama,
            'Email'=> $request->Email,
            'Password'=> $request->Password,
        ]);
        return redirect('/login');
    }

}
