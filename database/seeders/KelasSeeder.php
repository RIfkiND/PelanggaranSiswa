<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $jurusan = Jurusan::first();

        // Insert sample data into the kelas table
        DB::table('kelas')->insert([
            [
                'name' => '11-PPLG',
                'wali_kelas' => 'Pak Ade',
                'kelas' => 11,
                'jumlah' => 30,
                'jurusan_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ]);




    }
}
