<?php

namespace Tests\Feature;

use App\Models\Belajar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
//    public function test_example()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

    public function test_beranda()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_video_belajar()
    {
        $response = $this->get('belajar');
        $response->assertStatus(200);
    }

    public function test_belajar_search()
    {
        $this->assertDatabaseHas('belajars',[
            'title' => 'Matematika Diskrit'
        ]);

    }

    public function test_bank_soal()
    {
        $response = $this->get('banksoal');
        $response->assertStatus(200);
    }

    public function test_tentang_kami()
    {
        $response = $this->get('tentangkami');
        $response->assertStatus(200);
    }

    public function test_artikel()
    {
        $response = $this->get('artikel');
        $response->assertStatus(200);
    }

    public function test_bootcamp()
    {
        $response = $this->get('bootcamp');
        $response->assertStatus(200);
    }

}
