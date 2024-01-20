<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggaran;
class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::first();
        $pelanggaranData = [
            [
                'name' => 'Cheating',
                'penjelasan' => 'Using unauthorized materials during exams.',
                'pelanggaran_score' => 5,
                'category_id' => $categoryIds->id,
            ],
            [
                'name' => 'Skipping Class',
                'penjelasan' => 'Absent without permission.',
                'pelanggaran_score' => 3,
                'category_id' =>$categoryIds->id,
            ],
            // Add more sample data as needed
        ];

        // Insert data into the Pelanggaran table
        Pelanggaran::insert($pelanggaranData);
    }
}
