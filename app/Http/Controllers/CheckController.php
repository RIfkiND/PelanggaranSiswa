<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check(){
        return view('Dasboard.Card');
    }
    public function bnav(){
        return view('Dasboard.bottomNavbar');
    }
}
