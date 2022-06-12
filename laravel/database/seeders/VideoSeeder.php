<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = [
            [
                'title'             => 'KALKULUS 1: Pendahuluan Kalkulus - Bilangan Real, Estimasi, dan Logika',
                'cover'              => 'public/assets/cover-images/1.jpeg',
                'link'              =>    'https://www.youtube.com/embed/4lgPiAITfuk',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'title'             => 'KALKULUS 1: Pendahuluan Kalkulus - Pertidaksamaan dan Nilai Mutlak',
                'cover'              => 'public/assets/cover-images/2.jpeg',
                'link'              =>    'https://www.youtube.com/embed/amI0Xqav9gA',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'title'             => 'KALKULUS 1: Pendahuluan Kalkulus - Sistem Koordinat Kartesian',
                'cover'              => 'public/assets/cover-images/3.jpeg',
                'link'              =>    'https://www.youtube.com/embed/CtDy2IZL1Go',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'title'             => 'Matematika Diskrit - Graf (Graph) - Konsep Umum Graf',
                'cover'              => 'public/assets/cover-images/4.jpeg',
                'link'              =>    'https://www.youtube.com/embed/7OgJ6lJ8cMk',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'title'             => 'Teorema Dasar Kalkulus Pertama',
                'cover'              => 'public/assets/cover-images/5.jpeg',
                'link'              =>    'https://www.youtube.com/embed/FLcxdTkg1cU',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'title'             => 'Algoritma Pemrograman (DASAR PEMROGRAMAN #1)',
                'cover'              => 'public/assets/cover-images/6.jpeg',
                'link'              =>    'https://www.youtube.com/embed/fv2ZQD8-JwI',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($video as $key => $value) {
            DB::table('belajars')->insert($value);
        }
    }
}
