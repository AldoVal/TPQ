<?php

namespace App\Http\Controllers;

use App\Models\ModelSantri;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function index()
    {
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request -> validate([
            'email'         => 'required|email:dns',
            'password'      => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard-index');
        };

        return back()->with('loginError', 'Login Gagal!');
    }
}
