<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'user_id'           => 1,
                'photo'             => '',
                'occupation'        => 'Back-End Developer',
                'sex'               => 'Laki-Laki',
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
//            [
//                'user_id'           => 2,
//                'photo'             => '',
//                'occupation'        => 'UI Designer',
//                'sex'               => 'Laki-Laki',
//                'created_at'        => date('Y-m-d h:i:s'),
//                'updated_at'        => date('Y-m-d h:i:s'),
//            ],
//            [
//                'user_id'           => 3,
//                'photo'             => '',
//                'occupation'        => 'Front-End Developer',
//                'sex'               => 'laki-Laki',
//                'created_at'        => date('Y-m-d h:i:s'),
//                'updated_at'        => date('Y-m-d h:i:s'),
//            ],
        ];

        foreach ($detail_user as $key => $value) {
            DB::table('detail_user')->insert($value);
        }

////        $role = Role::create(['name' => 'Admin']);
//
//        $role = Role::findById(1);
//        $permissions = Permission::pluck('id','id')->all();
//
//        $role->syncPermissions($permissions);
//
//        $detail_user->assignRole($role);
    }
}
