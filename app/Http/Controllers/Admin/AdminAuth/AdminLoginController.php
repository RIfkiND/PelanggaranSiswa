<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except([
            'logout' ,'dashboard'
        ]);
    }
    public function Adminloginview(){
        return view('Admin.AdminAuth.login');
    }
    public function adminlogin(Request $request){

        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=>'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
