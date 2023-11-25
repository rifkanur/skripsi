<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validate)){
            $role = auth()->user()->role;
            if ($role == 'admin') {
                return redirect('index');
            }

            if ($role == 'siswa') {
                return redirect('indexsiswa');
            }

            if ($role == 'guru') {
                return redirect('indexguru');
            }
        }
        return redirect()->back();
    }

    public function viewlogin(Request $request)
    {
        return view('template.login');
    }
}
