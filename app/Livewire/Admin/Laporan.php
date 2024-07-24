<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use Livewire\WithPagination;

class Laporan extends Component
{
    use WithPagination;
    
    public function render()
    {
        $kelass= Kelas::all();
        $siswas = Siswa::with(['kelas' ,'jurusan','kejadian'])->paginate(15);
        $jurusans= Jurusan::all();
        return view('livewire.admin.laporan',compact('kelass','siswas','jurusans'));
    }
}
