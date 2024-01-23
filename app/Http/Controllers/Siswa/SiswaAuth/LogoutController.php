<?php

namespace App\Http\Controllers\Siswa\SiswaAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request){
        Auth::guard('siswa')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('LoginView')->with('succes','You Have Logout');
    }
}
