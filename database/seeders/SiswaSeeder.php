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

        // You may want to adjust the data according to your needs
        $jurusan = Jurusan::first();
        $kelas = Kelas::first();

        // Insert sample data into the siswas table
        DB::table('siswas')->insert([
            [
                'name' => 'John Doe',
                'nis' => '123456',
                'image' => 'sample_image.jpg',
                'tanggal_lahir' => '1990-01-01',
                'no_telp' => 123456789,
                'score_pelanggaran' => 0,
                'jurusan_id' => $jurusan->id,
                'kelas_id' => $kelas->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ]);

    }
}
