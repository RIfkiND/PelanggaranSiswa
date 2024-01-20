<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = Siswa::query();

    if ($request->has('search_term')) {
        $searchTerm = $request->search_term;

        $query->where(function ($subquery) use ($searchTerm) {
            // Search by Siswa name
            $subquery->orWhere('name', 'like', '%' . $searchTerm . '%');

            // Search by Kelas name
            $subquery->orWhereHas('kelas', function ($kelasQuery) use ($searchTerm) {
                $kelasQuery->where('name', 'like', '%' . $searchTerm . '%');
            });

            // Search by Jurusan name
            $subquery->orWhereHas('jurusan', function ($jurusanQuery) use ($searchTerm) {
                $jurusanQuery->where('name', 'like', '%' . $searchTerm . '%');
            });
        });
    }


    $siswas = $query->paginate(12);

    return view('Admin.Dashboard.Content.Siswa', compact('siswas'));
}
}
