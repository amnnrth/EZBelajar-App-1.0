<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name' => 'user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'mentor',
                'guard_name' => 'web',
            ],
        ];

        foreach ($role as $key => $value) {
            DB::table('roles')->insert($value);
        }

        $has_permission = [
            [
                'permission_id' => 1,
                'role_id' => 2,
            ],
        ];

        foreach ($has_permission as $key => $value) {
            DB::table('role_has_permissions')->insert($value);
        }


    }
}
