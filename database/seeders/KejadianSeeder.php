<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kejadian;
use App\Models\Pelanggaran;
use App\Models\Category;

class KejadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Kejadian::create([
            'Waktu' => now(),
            'pelanggaran_id' => '1',
            'category_id' => '2',
        ]);
    }
}
