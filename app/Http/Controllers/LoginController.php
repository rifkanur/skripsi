<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function registerGuru(Request $request){
        $data = $request->all();
        login::create($data);

    }
}
