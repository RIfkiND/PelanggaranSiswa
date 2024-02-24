<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Pelanggaran;
use App\Models\Kejadian;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DashboardController extends Controller
{

    public function AdminDashboard()
    {
        if (Auth::guard('admin')->check()) {
            $siswas = Siswa::all();
            $jurusans = Jurusan::with(['siswa','kelas'])->get();
            $kelass = Kelas::with(['siswa'])->get();

            $pelanggaranperbulan = Kejadian::select(
                DB::raw("DATE_FORMAT(created_at, '%b') as month"),
                DB::raw("COUNT(*) as total")
            )
            ->groupBy('month')
            ->orderBy('created_at')
            ->get();
            $labels = $pelanggaranperbulan->pluck('month')->toArray();
            $data = $pelanggaranperbulan->pluck('total')->toArray();
            return view('Admin.Dashboard.Pages.Dashboard', compact('siswas', 'jurusans', 'kelass','labels', 'data'));
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
        $siswas = Siswa::with(['kelas' ,'jurusan','kejadian'])->paginate(15);
        $jurusans= Jurusan::all();

        return view('Admin.Dashboard.Pages.laporan' ,compact('siswas', 'jurusans', 'kelass'));
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
