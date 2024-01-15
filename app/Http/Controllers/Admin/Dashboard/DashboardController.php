<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Pelanggaran;
use App\Models\Siswa;

class DashboardController extends Controller
{

    public function AdminDashboard(){
        if (Auth::guard('admin')->check()){
            $admin = Auth::guard('admin');

            return view('Admin.AdminDashboard');
        }
    }

    /**
     *  Tampilakn tiap pelanggaran
     *
     * @return
     */
    public function list()
    {

        $pelanggaran = Pelanggaran::latest()->paginate(5);

        return view('Admin.Dashboard.Listpelanggaran' ,compact('pelanggaran'));

    }

    public function Pelanggaranshow(){

        $siswas = Siswa::withCount('pelanggaran')->get();

        return view('' ,compact('siswas'));
    }
}
