<?php

namespace App\Exports;

use App\Models\Kejadian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class TotalPelanggaranExport implements FromView
{
    public function view(): View
    {

        return view('Import.Exceel.TotalKejadianExcel',[
            'total' => Kejadian::with(['siswa','pelanggaran','category' ])
        ]);
    }
}
