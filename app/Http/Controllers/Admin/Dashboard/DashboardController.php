<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Pelanggaran;
use App\Models\Siswa;
use App\Models\Category;
use App\Models\Jurusan;
use App\Models\Kelas;
class DashboardController extends Controller
{

    public function AdminDashboard(){
        if (Auth::guard('admin')->check()){

            $siswas = Siswa::all();
            $jurusans = Jurusan::all();
            $kelass = Kelas::all();
            return view('Admin.Dashboard.main.MainDashboard' ,compact('siswas','jurusans','kelass'));
        }
        abort(403);
    }

    /**
     *  Tampilakn tiap pelanggaran
     *
     * @return
     */
        public function list()
        {

            $pelanggarans = Pelanggaran::with('category')->orderBy('category_id')->paginate(10);

            return view('Admin.Dashboard.content.Listpelanggaran' ,compact('pelanggarans'));

        }

        /**
         * Tampilakn tiap siswa
         *
         *
         */
    public function siswashow(){

        $siswas = Siswa::withCount('pelanggaran')->get();

        return view('' ,compact('siswas'));
    }
}
