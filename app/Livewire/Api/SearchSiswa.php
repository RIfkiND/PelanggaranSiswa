<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class SearchSiswa extends Component
{
    public $search = '';

    public function render()
    {
        $siswa = Siswa::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('nis', 'like', '%' . $this->search . '%')
            ->orWhereHas('kelas', function ($kelasQuery) {
                $kelasQuery->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('jurusan', function ($jurusanQuery) {
                $jurusanQuery->where('name', 'like', '%' . $this->search . '%');
            })
            ->get();

        return view('', ['siswa' => $siswa]);
    }
}