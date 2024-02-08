<?php

namespace App\Http\Controllers\Petugas\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kejadian;
use App\Models\Siswa;
class SiswaResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'siswa_id' => 'required|exists:siswa,id',
        'pelanggaran_id' => 'required|exists:pelanggaran,id',
        'category_id' => 'required|exists:category,id',
        'alasan' => 'required|string',
    ]);

     Kejadian::create([
        'siswa_id' => $request->input('siswa_id'),
        'pelanggaran_id' => $request->input('pelanggaran_id'),
        'category_id' => $request->input('category_id'),
        'alasan' => $request->input('alasan'),
     ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $barcode = $request->input('barcode');

        $siswa = Siswa::where('barcode_code', $barcode)->first();

        if ($siswa) {
            return redirect()->route('kejadian.create', ['siswa_id' => $siswa->id]);
        } else {
            return redirect()->back()->with('error', 'Siswa not found for the given barcode.');
        }
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    $record = Kejadian::findOrFail($id);

    
    $twoHoursAgo = Kejadian::now()->subHours(2);
    if ($record->updated_at < $twoHoursAgo) {
        return back()->with('error', 'Sorry, you cannot update this record after 2 hours.');
    }


    $record->update($request->all());

    return back()->with('success' ,'has been update succesfully');
    }

    
}
