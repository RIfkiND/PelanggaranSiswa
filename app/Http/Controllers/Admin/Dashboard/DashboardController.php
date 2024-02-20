<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admindashboard(){
        if(Auth::guard('admin')->check()){
        return view('Admin.Dashboard.Pages.Dashboard');
        }
        else 
        return abort(403);
    }
}
