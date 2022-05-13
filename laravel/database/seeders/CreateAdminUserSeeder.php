<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'MUHAMMAD AMIN',
            'email' => 'amin@mail.com',
            'password' => bcrypt('123456')
        ],
        [
            'name' => 'zaki',
            'email' => 'zaki@mail.com',
            'password' => bcrypt('123456')
        ],
        [
            'name' => 'imam',
            'email' => 'imam@mail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}