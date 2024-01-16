<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Charts\WeaklyKejadianCharts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Pelanggaran;
use App\Models\Siswa;
use App\Models\Category;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Http\Controllers\Admin\Dashboard\Chart\KejadianChartController;
class DashboardController extends Controller
{

    public function AdminDashboard(WeaklyKejadianCharts $chart)
{
    if (Auth::guard('admin')->check()) {

        $charts= $chart->build();
        $siswas = Siswa::all();
        $jurusans = Jurusan::all();
        $kelass = Kelas::all();

        return view('Admin.Dashboard.main.MainDashboard', compact('siswas', 'jurusans', 'kelass','charts'));
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
