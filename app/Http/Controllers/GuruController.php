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
}
