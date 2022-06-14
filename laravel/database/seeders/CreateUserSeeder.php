<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Bagus Dwi',
                'email' => 'bagus@mail.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Bambang Susanto',
                'email' => 'bambang@mail.com',
                'password' => bcrypt('123456')
            ],
        ];

        foreach ($user as $key => $value) {
            $user = User::create($value);
            $user->assignRole('user');
        }

        $user_mentor = [
            [
                'name' => 'Azharu Anwar',
                'email' => 'azharu@mail.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Akhmad Fauzi',
                'email' => 'akhmad@mail.com',
                'password' => bcrypt('123456')
            ],
        ];

        foreach ($user_mentor as $key => $value) {
            $user = User::create($value);
            $user->assignRole('mentor');
        }

    }
}
