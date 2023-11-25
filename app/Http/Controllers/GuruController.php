<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function dataguru(){
        $dataguru=Guru::all();
        return view('layout.dataguru', compact(['dataguru']));

    }
    public function hapus($id){
        $data=Guru::whereId($id);
        $data->delete();
        return redirect('/dataguru');
        }

    public function edit($id){
        $dataguru=Guru::whereId($id)->first();
        return view('layout.updatedataguru', compact(['dataguru']));
        }

        public function update($id,Request $request){
            //  dd($request);
              $data=Guru::whereId($id)->first();
              $data->Nama=$request->Nama;
              $data->Tanggal_Lahir=$request->Tanggal_Lahir;
              $data->Jenis_Kelamin=$request->Jenis_Kelamin;
              $data->Agama=$request->Agama;
              $data->Email=$request->Email;
              $data->Password=$request->Password;
              $data->save();
              return redirect('/dataguru');
          }
}
