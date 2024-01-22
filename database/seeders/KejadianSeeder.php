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
        $categoryids = Category::first();
        $pelanggaranid = Pelanggaran::first();
        $siswaids = Siswa::first();
        $kejadians = [
            [
                'siswa_id' => $siswaids->id,
                'pelanggaran_id' => $pelanggaranid->id,
                'category_id' => $categoryids->id,
                'created_at' => now()->addWeek(2),
                'updated_at' => now()->addWeek(2),


            ],
            // Add more data as needed
        ];

        // Insert data into the 'kejadians' table
        Kejadian::insert($kejadians);
    }
}
