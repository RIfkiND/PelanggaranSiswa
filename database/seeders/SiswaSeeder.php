<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Assuming you have existing Jurusan and Kelas records
      $jurusanId = Jurusan::first()->id;
      $kelasId = Kelas::first()->id;

        Siswa::create([
            'name' => 'John Doe',
            'nis' => 123456,
            'image' => null,
            'status' => 'active',
            'tanggal_lahir' => '2000-01-01',
            'barcode_code' => 987654,
            'gender' => 'male',
            'no_telp' => '123456789',
            'jurusan_id' => $jurusanId, // Replace with the appropriate jurusan_id
            'kelas_id' => $kelasId,   // Replace with the appropriate kelas_id
        ]);




    }
}
