<?php

namespace App\Http\Controllers\Siswa\SiswaAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function SiswaLogin(Request $request)
    {

        $credntials = $request->validate([
            'nis' => 'required|integer',
            'password' => 'required|string'
        ]);

        if(Auth::guard('siswa')->attempt($credntials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
}
