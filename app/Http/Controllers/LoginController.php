<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function LoginHalaman(){
        
        return view('halaman_5.login');
    }

    public function postlogin(Request $request){
        
        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
            ]
                
        )) {
            return redirect('Dasboard');
        }
        return redirect('Login');

    }

    public function LogOut(){
        Auth::logout();
        return redirect('Login');
    }

    public function registrasi(){

        return view('halaman_5.registrasi');
    }

    public function simpanRegistrasi(Request $request){

        User::create([
            'name'=> $request->nama,
            'level'=>  'Admin',
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        return redirect('Login');

    }
}
