<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kejadian;
use App\Models\Pelanggaran;
use App\Models\Category;
use App\Models\Siswa;


class KejadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryids = 1;
        $pelanggaranid = 1;
        $siswaids = 9;
        $kejadians = [
            [
                'siswa_id' => $siswaids,
                'pelanggaran_id' => $pelanggaranid,
                'category_id' => $categoryids,
                'created_at' => now(),
                'updated_at' => now(),


            ],
            // Add more data as needed
        ];

        // Insert data into the 'kejadians' table
        Kejadian::insert($kejadians);
    }
}
