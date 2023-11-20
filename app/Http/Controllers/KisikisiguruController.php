<?php

namespace App\Http\Controllers;

use App\Models\kisikisiguru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class KisikisiguruController extends Controller
{
    public function registerGuru(Request $request){
        $data = $request->all();
        kisikisiguru::create($data);

    }
}
