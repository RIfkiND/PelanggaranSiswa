<?php

namespace App\Http\Controllers\Export\excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TotalPelanggaranExport;

class TotalPelanggaranController extends Controller
{
    public function ExceelPelanggaran()
    {
        return Excel::download(new TotalPelanggaranExport, 'Total.xlsx');
    }
}
