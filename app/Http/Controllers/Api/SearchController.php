<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pelanggaran;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $pencarian= Siswa::query();


    
        if ($request->has('search_siswa')) {
            $cari = $request->search_siswa;

            $pencarian->where('name', 'like', '%' . $cari. '%')
                ->orWhere('nis', 'like', '%' . $cari . '%')
                ->orWhereHas('kelas', function ($kelasQuery) use ($cari) {
                    $kelasQuery->where('name', 'like', '%' . $cari . '%');
                })
                ->orWhereHas('jurusan', function ($jurusanQuery) use ($cari) {
                    $jurusanQuery->where('name', 'like', '%' . $cari . '%');
                });
        }


        $siswas = $pencarian->paginate(12);

        return view('Admin.Dashboard.Content.Siswa', compact('siswas'));
    }

    public function search2(Request $request)
    {
      
        $searchTerm = $request->input('search_term');
        $categoryId = $request->input('category_id');

        // Query to fetch Pelanggarans
        $pelanggaransQuery = Pelanggaran::query();
        if ($searchTerm) {
            $pelanggaransQuery->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('penjelasan', 'like', '%' . $searchTerm . '%')
                    ->orWhere('pelanggaran_score', 'like', '%' . $searchTerm . '%');
            });
        }


        if ($categoryId) {
            $pelanggaransQuery->whereHas('category', function ($query) use ($categoryId) {
                $query->where('id', $categoryId);
            });
        }


        $pelanggarans = $pelanggaransQuery->with('category')->get();


        $categories = Category::all();

        return view('Admin.Dashboard.Content.Listpelanggaran', compact('pelanggarans', 'categories'));
    }
}
