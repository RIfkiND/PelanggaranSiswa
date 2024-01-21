<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Charts\KelasChart;
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
use App\Models\Kejadian;

class DashboardController extends Controller
{

    public function AdminDashboard(WeaklyKejadianCharts $chart, KelasChart $kelasChart)
    {
        if (Auth::guard('admin')->check()) {
            $charts2 = $kelasChart->build();
            $charts = $chart->build();
            $siswas = Siswa::all();
            $jurusans = Jurusan::all();
            $kelass = Kelas::all();

            return view('Admin.Dashboard.main.MainDashboard', compact('siswas', 'jurusans', 'kelass', 'charts', 'charts2'));
        }
    }

    /**
     *  Tampilakn tiap pelanggaran
     *
     * @return
     */
    public function list()
    {

        $pelanggarans = Pelanggaran::with('category')->orderBy('category_id')->paginate(10);

        $categories = Category::all();
        return view('Admin.Dashboard.content.Listpelanggaran', compact('pelanggarans' ,'categories'));
    }

    public function table(){
        $kelass= Kelas::all();
        $siswas = Siswa::all();
        $jurusans= Jurusan::all();

        return view('Admin.Dashboard.Content.table' ,compact('siswas', 'jurusans', 'kelass'));
    }
    /**
     * Tampilakn tiap siswa
     *
     *
     */
    public function siswashow()
    {

        $siswas = Siswa::with(['kejadians', 'kelas', 'jurusan'])->paginate(12);

        return view('Admin.Dashboard.Content.Siswa', compact('siswas'));
    }

    public function history()
    {

        $historys = Kejadian::with(['siswa', 'pelanggaran', 'category'])->paginate(10);

        return view('Admin.Dashboard.Content.history', compact('historys'));
    }
}
