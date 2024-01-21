<?php

namespace App\Http\Controllers\Admin\Dashboard\Resources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\Category;
class PelanggaranController extends Controller
{

    public function __construct(){
        $this->middleware('IsAdmin');
    }
    /**
     * Display a listing of the resource.
     */
    public function create()
    {

        $categories= Category::all();

        return view('Admin.components.Api.create',compact('categories'));
    }

    // public function edit(string $id){

    //     $pelanggarans = Pelanggaran::findOrFail($id);

    //     return view('Admin.components.Api.edit' ,compact('pelanggarans'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'penjelasan' => 'required|string',
            'pelanggaran_score' => 'required|integer',
            'category_id' => 'required|exists:categories,id'
        ]);

        Pelanggaran::create([
            'name' => $request->input('name'),
            'penjelasan' => $request->input('penjelasan'),
            'pelanggaran_score' => $request->input('pelanggaran_score'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('list.pelanggaran')->with('success', 'Has Been Added');
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
        $request->validate([
            'name' => 'sometimes|string',
            'penjelasan' => 'sometimes|string',
            'pelanggaran_score' => 'sometimes|integer',
            'category_id' => 'sometimes|exists:categories,id',
        ]);


        $pelanggarans = Pelanggaran::findOrFail($id);

        if ($request->has('name')) {
            $pelanggarans->name = $request->input('name');
        }

        if ($request->has('penjelasan')) {
            $pelanggarans->penjelasan = $request->input('penjelasan');
        }

        if ($request->has('pelanggaran_score')) {
            $pelanggarans->pelanggaran_score = $request->input('pelanggaran_score');
        }

        if ($request->has('category_id')) {
            $pelanggarans->category_id = $request->input('category_id');
        }

        $pelanggarans->save();

        return to_route('list.pelanggaran')->with('success','Has been Updated');
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
