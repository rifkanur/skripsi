<?php

namespace App\Http\Controllers;

use App\Models\kisikisiguru;
use Illuminate\Http\Request;

class KisiKisiAdminController extends Controller
{
    public function KisiKisiAdmin(Request $request){
        $data = $request->all();
        kisikisiguru::create($data);

    }
}
