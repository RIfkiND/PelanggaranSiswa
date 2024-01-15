<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLogoutController extends Controller
{
    /**
     * Logout logic
     *
     * @param Request $request
     *
     */
    public function AdminLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('succes','You Have Logout');
    }
}
