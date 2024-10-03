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
        $jurusans = Jurusan::with(['siswa', 'kelas'])->get();
        $kelass = Kelas::with(['siswa'])->get();

        
        $pelanggaranperbulan = Kejadian::selectRaw("MONTHNAME(created_at) as month, COUNT(*) as total")
            ->groupByRaw("MONTHNAME(created_at)")
            ->orderByRaw("MIN(created_at)")
            ->get();

        $labels = $pelanggaranperbulan->pluck('month')->toArray();
        $data = $pelanggaranperbulan->pluck('total')->toArray();

        return view('livewire.admin.dashboard', compact('siswas', 'jurusans', 'kelass', 'labels', 'data'));
    }

}
