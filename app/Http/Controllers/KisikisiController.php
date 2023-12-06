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


}
