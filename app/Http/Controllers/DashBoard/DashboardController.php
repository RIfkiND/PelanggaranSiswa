<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('IsLogin');
    }
    public function DashboardUser()
    {
        if (Auth::guard('siswa')->check()) {
            $user = Auth::guard('siswa');
            return view('Dasboard.Table');
        }
        return redirect()->route('LoginView')->withErrors('U need to login');
    }
}
