<?php

namespace App\Http\Controllers;

use App\Models\kisikisiguru;
use Illuminate\Http\Request;

class KisikisisiswaController extends Controller
{
    public function KisiKisisiswa(Request $request){
        $data = $request->all();
        kisikisiguru::create($data);

    }
}
