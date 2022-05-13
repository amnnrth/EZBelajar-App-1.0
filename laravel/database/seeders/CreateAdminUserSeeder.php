<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
        [
            'name' => 'MUHAMMAD AMIN',
            'email' => 'amin@mail.com',
            'password' => bcrypt('Admin@1234')
        ],
        [
            'name' => 'Zaki',
            'email' => 'zaki@mail.com',
            'password' => bcrypt('Admin@1234')
        ],
        [
            'name' => 'Imam',
            'email' => 'imam@mail.com',
            'password' => bcrypt('123456')
        ],
        );

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
