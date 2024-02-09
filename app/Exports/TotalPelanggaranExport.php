<?php

namespace App\Exports;

use App\Models\Kejadian;
use Illuminate\Contracts\View\View;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class TotalPelanggaranExport implements FromView ,WithHeadings
{

    /**
     * Take From vie
     *
     * @return View
     */
    public function view(): View
    {

        return view('Import.Exceel.TotalKejadianExcel',[
            'total' => Kejadian::with(['siswa','pelanggaran','category' ])
        ]);
    }
    /**
     * Heading Exceel
     *
     * @return array
     */
    public function headings():array
    {
        return [
        'No',
        'Nama Siswa',
        'Nis',
        'Gender',
        'Kelas',
        'Jurusan',
        'Kelas'

        ];

    }
    
    public function mapping(): array
    {
        return [
            
        ];
    }
}
