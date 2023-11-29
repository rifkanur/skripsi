<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use App\Models\User;

class ForgotpasswordController extends Controller
{
    public function forgotpassword($id)
    {
        return view('template.forgetpassword', compact(['id']));
    }

    public function update($id, Request $request)
    {
       // dd($request->Password);
        $data = User::whereId($id)->first();
        $data->password = bcrypt($request->Password);
        $data->save();
        return redirect('/login');
    }

    public function findaccount(Request $request)
    {
        $data = User::whereEmail($request->Email)->first();
        if($data==true){
            return redirect('/forgotpassword/'.$data->id);
        }
        else{
            return redirect('/email');
        }
    }
}
