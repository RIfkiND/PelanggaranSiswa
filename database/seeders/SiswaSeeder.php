<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
          'name' => 'Rifki',
          'nis' => '123456',
          'status' => 'active',
          'tanggal_lahir' => '1990-01-01',
          'no_telp' => 123456789,
          'jurusan_id' => 1,
          'kelas_id' => 1,
      ]);



    }
}
