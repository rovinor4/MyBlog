<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function LoginPage()
    {
        return view('Pages.login');
    }

    public function LoginProses(Request $request)
    {
        $data = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($data)) {
            request()->session()->regenerate();

            //pembedaan role
            $user = Auth::user();

            // diarahkan ke dashboard admin
            if ($user->role == 'admin') {
                return redirect()->route('artikel.index');
            }

            // diarahkan ke halaman utama
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors([
            "username" => "Username atau password salah"
        ]);
    }
}
