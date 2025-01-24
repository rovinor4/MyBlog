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
            return "Berhasil Login";
        }
        return "Gagal Login";
    }
}
