<?php

namespace Database\Seeders;

use App\Models\Bootcamp\AdvantageBootcamp;
use App\Models\Bootcamp\BenefitBootcamp;
use App\Models\Bootcamp\Bootcamp;
use App\Models\Bootcamp\DetailBootcamp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bootcamp =[
            [
                'user_id'           => 1,
                'title'             => 'Complete UI|UX Designer with Figma 2022',
                'description'       => 'UI atau User Interface adalah proses dimana menampilkan sebuah hasil dalam bentuk tampilan yang dapat dilihat oleh pengguna (user). Lebih tepatnya adalah bagian visual dari website, software, maupun hardware untuk user dapat berinteraksi. Tujuan dari User Interface sendiri adalah untuk meningkatkan fungsionalitas serta user experience dari pengguna.',
                'thumbnail_bootcamp'=> 'assets/bootcamp/study-case/1.jpeg',
                'title_study_case'  => 'Mamikos Community App',
                'description_study_case' => 'Kos Andalan adalah kos yang dijamin keamanannya oleh Mamikos, sehingga kos tersebut nantinya bisa diandalkan, baik dalam proses sewa di awal maupun sampai akhirnya ngekos di dalamnya. Banyak faktor yang harus diperhatikan saat mencari dan memilih kos untuk disewa, karena bagaimanapun juga kenyamanan adalah nomor satu.',
                'thumbnail_bootcamp_study_case' => 'assets/bootcamp/study-case/1.1.jpeg',
                'price' => '550000',
                'is_active' => 1,
                'mentor_id' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($bootcamp as $key => $value) {
            Bootcamp::create($value);
        }

        $detail_bootcamp =[
            [
                //bootcamp id 1
                'bootcamp_id' => 1,
                'registration' => '02 Januari 2022 - 02 Maret 2022',
                'duration' => '2 Bulan',
                'media' => 'Zoom',
                'schedule' => 'Senin - Kami - Jumat 19:30 WIB',
                'start_bootcamp' => '13 April 2022',
                'participant' => '35',
            ],
        ];

        foreach ($detail_bootcamp as $key => $value) {
            DetailBootcamp::create($value);
        }

        $benefit_bootcamp =[
            // bootcamp id 1
            [
                'bootcamp_id' => 1,
                'description' => 'Mempelajari Figma sebagai tools Visual Design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Memahami alur perancangan product UI/UX Design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Membangun sebuah project design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Mempelajari Figjam sebagai tools Brainstorming',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Mempelajari implementasi ideatation to visual design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Memahami cara Prototyping dan Testing',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($benefit_bootcamp as $key => $value) {
            BenefitBootcamp::create($value);
        }

        $advantage_bootcmap = [
            //bootcamp id 1
            [
              'bootcamp_id' => 1,
                'description' => 'Source code & design project',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Workflow Prosess UI/UX Design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Konsultasi secara real-time',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Portofolio untuk modal kerja',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Rekaman ulang materi Bootcamp',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 1,
                'description' => 'Dan masih banyak lagi',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($advantage_bootcmap as $key => $value) {
            AdvantageBootcamp::create($value);
        }

    }
}
