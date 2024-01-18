<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Kelas;
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
        $jurusan = Jurusan::first();

        $kelas = Kelas::first();
        $siswas = [
            [
                'name' => 'John Doe',
                'nis' => '123456',
                'status' => 'active',
                'tanggal-lahir' => '2000-01-01',
                'no_telp' => 123456789,
                'jurusan_id' => $jurusan->id,
                'kelas_id' => $kelas->id,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the 'siswas' table
        DB::table('siswas')->insert($siswas);

    }
}
