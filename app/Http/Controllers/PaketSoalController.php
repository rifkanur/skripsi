<?php

namespace App\Http\Controllers;

use App\Models\paketsoalguru;
use Illuminate\Http\Request;

class PaketSoalController extends Controller
{
    public function jadwal(){
        $data = paketsoalguru::all();
        return view ('guru.paketsoal', compact('data'));
    }
}
