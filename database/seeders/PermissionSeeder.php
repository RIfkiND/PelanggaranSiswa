<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name'=>'manage users',
            'guard_name'=>'admins',
        ]);



        Permission::create([
            'name'=>'view dashboard',
            'guard_name'=>'siswa'
        ]);

        Permission::create([
            'name'=>'beri_hukuman',
            'guard_name'=>'siswa'
        ]);

    }
}
