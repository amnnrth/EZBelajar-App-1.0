<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'belajar-list',
            'belajar-create',
            'belajar-edit',
            'belajar-delete',
            'bank_soal-list',
            'bank_soal-create',
            'bank_soal-edit',
            'bank_soal-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
