<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function AdminDashboard(){
        if (Auth::guard('admin')->check()){
            $admin = Auth::guard('admin');
            return view('Admin.AdminDashboard');
        }
        
    }
}
