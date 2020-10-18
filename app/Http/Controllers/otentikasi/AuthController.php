<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('layouts.login');
    }

    public function Auth(Request $request)
    {
        //dd($request->all());
        $data = User::where('email', $request->email)->firstOrFail();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session(['berhasil_login' => true]);
                return redirect()->route('cr');
            }
        } else {
            echo "email atau password salah";
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
