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
        $kejadians = [
            [
                'siswa_id' =>Siswa::inRandomOrder()->first()->id,
                'pelanggaran_id' => Pelanggaran::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the 'kejadians' table
        Kejadian::insert($kejadians);
    }
}
