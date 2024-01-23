<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('jurusans')->insert([
            [
                'name' => 'Jurusan D',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
