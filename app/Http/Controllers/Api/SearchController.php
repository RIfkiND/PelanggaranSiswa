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

    public function search2( Request $request){
            // Get the search term and category filter from the request
            $searchTerm = $request->input('search_term');
            $categoryId = $request->input('category_id');

            // Query to fetch Pelanggarans
            $pelanggaransQuery = Pelanggaran::query();

            // Apply search term filter if provided
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

