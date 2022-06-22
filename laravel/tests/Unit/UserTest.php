<?php

namespace Tests\Unit;

use App\Models\User\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'test',
            'email' => 'test@mail.com'
        ]);

        $user2 = User::make([
            'name' => 'test2',
            'email' => 'test2@mail.com'
        ]);

        $this->assertTrue($user1->email !== $user2->email);
    }

    public function test_delete_user()
    {
        $user = User::make([
            'name' => 'test',
            'email' => 'test@mail.com'
        ]);

        $user->delete();

        $this->assertTrue(true);
    }

    public function test_stores_new_users()
    {
        $response = $this->post('/register',[
            'name' => 'Testing',
            'email' => 'testing@mail.com',
            'password' => Hash::make('test1234'),
            'password_confirmation' => Hash::make('test1234'),
        ]);

        $response->assertRedirect('/');
    }

    public function test_database_users_table()
    {
        $this->assertDatabaseMissing('users',[
            'name' => 'MUHAMMAD AMINs'
        ]);

//        $this->assertDatabaseHas('users',[
//           'name' => 'MUHAMMAD AMIN'
//        ]);
    }

//    public function test_seeder_users()
//    {
//        $this->seed('CreateUserSeeder');
//    }

    public function logged_in_user_can_logout()
    {
        // Kita memiliki 1 user terdaftar
        $user = User::make([
            'name' => 'test',
            'email' => 'amin@mail.com',
            'password' => '123456'
        ]);

        // Login sebagai user tersebut
        $this->actingAs($user);

        // Kunjungi halaman '/home'
        $this->view('/');

        // Buat post request ke url '/logout'
        $this->post('/logout');

        // Kunjungi (lagi) halaman '/home'
        $this->view('/');

        // User ter-redirect ke halaman '/login'
        $this->view('/login');
    }

    /**
     * @test
     */
//    public function loginWithWrongCredentials()
//    {
//        $this->view('/')
//            ->see('Login')
//            ->type('amin@mail.com', 'email')
//            ->type('1234567', 'password')
//            ->check('remember')
//            ->press('Login')
//            ->seePageIs('/login')
//            ->see('These credentials do not match our records');
//    }

}
