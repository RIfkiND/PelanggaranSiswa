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
        //admin only
        Permission::create([
            'name' => 'delete-pealanggaran',
            'guard_name'=>'admins',
        ]);

        Permission::create([
            'name'=> 'add-role',
            'guard_name'=> 'admins',
        ]);

        Permission::create([
            'name'=>'manage-siswa',
            'guard_name'=>'admins',
        ]);

        //khusus pks
        Permission::create([
            'name'=>'view-dashboard',
            'guard_name'=>'siswa'
        ]);

        Permission::create([
            'name'=>'beri_hukuman',
            'guard_name'=>'siswa',
        ]);
    }
}
