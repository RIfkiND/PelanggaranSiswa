<?php

namespace App\Livewire\Admin;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Pelanggaran;
use App\Models\Kejadian;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {

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
        return view('livewire.admin.dashboard', compact('siswas', 'jurusans', 'kelass','labels', 'data'));
    }
}
