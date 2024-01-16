<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\Category;
class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {

        $categories= Category::all();

        return view('Admin.components.Api.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'alasan' => 'required|string',
            'pelanggaran_score' => 'required|integer',
            'category_id' => 'required|exists:categories,id'
        ]);

        Pelanggaran::create([
            'name' => $request->input('name'),
            'alasan' => $request->input('alasan'),
            'pelanggaran_score' => $request->input('pelanggaran_score'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('list.pelanggaran')->with('success', 'Berhasil ditambah'); // Corrected the method name here
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggarans = Pelanggaran::FindOrfail($id);

        $pelanggarans->delete();

        return to_route('list.pelanggaran')->with('success','Has been Deleted');
    }
}
