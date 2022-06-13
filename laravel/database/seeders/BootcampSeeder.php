<?php

namespace Database\Seeders;

use App\Models\Bootcamp\AdvantageBootcamp;
use App\Models\Bootcamp\BenefitBootcamp;
use App\Models\Bootcamp\Bootcamp;
use App\Models\Bootcamp\DetailBootcamp;
use App\Models\Bootcamp\DetailMateriBootcamp;
use App\Models\Bootcamp\MainMateriBootcamp;
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
            // id 1
            [
                'user_id'           => 1,
                'title'             => 'Complete UI|UX Designer with Figma 2022',
                'description'       => 'UI atau User Interface adalah proses dimana menampilkan sebuah hasil dalam bentuk tampilan yang dapat dilihat oleh pengguna (user). Lebih tepatnya adalah bagian visual dari website, software, maupun hardware untuk user dapat berinteraksi. Tujuan dari User Interface sendiri adalah untuk meningkatkan fungsionalitas serta user experience dari pengguna.',
                'thumbnail_bootcamp'=> 'assets/bootcamp/bootcamp/1.jpeg',
                'title_study_case'  => 'Mamikos Community App',
                'description_study_case' => 'Kos Andalan adalah kos yang dijamin keamanannya oleh Mamikos, sehingga kos tersebut nantinya bisa diandalkan, baik dalam proses sewa di awal maupun sampai akhirnya ngekos di dalamnya. Banyak faktor yang harus diperhatikan saat mencari dan memilih kos untuk disewa, karena bagaimanapun juga kenyamanan adalah nomor satu.',
                'thumbnail_bootcamp_study_case' => 'assets/bootcamp/study-case/1.1.jpeg',
                'price' => '550000',
                'is_active' => 1,
                'mentor_id' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 2
            [
                'user_id'           => 1,
                'title'             => 'Full-Stack Web Dev Laravel ',
                'description'       => 'Laravel merupakan framework yang dapat membantu web developer dalam memaksimalkan penggunaan PHP dalam proses pengembangan website. Seperti diketahui, PHP sendiri merupakan bahasa pemograman yang cukup dinamis. Dimana kehadiran Laravel kemudian membuat PHP menjadi lebih powerful, cepat, aman, dan simple.',
                'thumbnail_bootcamp'=> 'assets/bootcamp/bootcamp/2.jpg',
                'title_study_case'  => 'Membangun Website Freelancer',
                'description_study_case' => 'Dengan membuat aplikasi freelancer  kamu akan mempelajari pemrograman web melalui real world project. Project akan dibangun dari awal hingga tahap deployment ke server, sehingga cocok untuk kamu gunakan sebagai portofolio.',
                'thumbnail_bootcamp_study_case' => 'assets/bootcamp/study-case/2.png',
                'price' => '850000',
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
            //bootcamp id 1
            [
                'bootcamp_id' => 1,
                'registration' => '02 Januari 2022 - 02 Maret 2022',
                'duration' => '2 Bulan (12 Sesi)',
                'media' => 'Zoom',
                'schedule' => 'Senin - Kami - Jumat 19:30 WIB',
                'start_bootcamp' => '13 April 2022',
                'participant' => '35',
            ],
            //bootcamp id 2
            [
                'bootcamp_id' => 2,
                'registration' => '17 Januari 2022 - 17Maret 2022',
                'duration' => '3 Bulan (16 Sesi)',
                'media' => 'Google Meet',
                'schedule' => 'Senin-Rabu 19:30 WIB',
                'start_bootcamp' => '22 April 2022',
                'participant' => '45',
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
            // bootcamp id 1
            [
                'bootcamp_id' => 2,
                'description' => 'Mempelajari Laravel sebagai framework Back-End',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Memahami implementasi Integrasi API',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Membangun sebuah Real-World Project',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Siap berkarir sebagai Full-Stack Developer',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Mempelajari cara Deployment aplikasi',
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
            //bootcamp id 2
            [
                'bootcamp_id' => 2,
                'description' => 'Source code & design project',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Workflow Prosess UI/UX Design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Konsultasi secara real-time',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Portofolio untuk modal kerja',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Rekaman ulang materi Bootcamp',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'bootcamp_id' => 2,
                'description' => 'Dan masih banyak lagi',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($advantage_bootcmap as $key => $value) {
            AdvantageBootcamp::create($value);
        }

        $main_materi = [
            // bootcamp id 1
            [
                'bootcamp_id' => 1,
                'description' => 'Perkenalan Mentor (Day 1)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 2
            [
                'bootcamp_id' => 1,
                'description' => 'Pengenalan Figma (Day 2)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 3
            [
                'bootcamp_id' => 1,
                'description' => 'Figma (Day 3)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 4
            [
                'bootcamp_id' => 1,
                'description' => 'Figma (Day 4)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 5
            [
                'bootcamp_id' => 1,
                'description' => 'Prinsip Design (Day 5)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 6
            [
                'bootcamp_id' => 1,
                'description' => 'Design Thinking (Day 6)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 7
            [
                'bootcamp_id' => 1,
                'description' => 'Visual Design (Day 7)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 8
            [
                'bootcamp_id' => 1,
                'description' => 'Testing (Day 8)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id bootcamp id 2 || id 9
            [
                'bootcamp_id' => 2,
                'description' => 'Perkenalan Mentor (Day 1)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 10
            [
                'bootcamp_id' => 2,
                'description' => 'Pengenalan Laravel (Day 2)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 11
            [
                'bootcamp_id' => 2,
                'description' => 'Laravel (Day 3)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 12
            [
                'bootcamp_id' => 2,
                'description' => 'Laravel (Day 4)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 13
            [
                'bootcamp_id' => 2,
                'description' => 'Backend (Day 5)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 14
            [
                'bootcamp_id' => 2,
                'description' => 'API & Deployment (Day 6)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 15
            [
                'bootcamp_id' => 2,
                'description' => 'Integration  (Day 7)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 16
            [
                'bootcamp_id' => 2,
                'description' => 'Integration & Deployment (Day 8)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($main_materi as $key => $value) {
            MainMateriBootcamp::create($value);
        }

        $detail_materi_bootcamp = [
            // main materi id 1 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 1,
                'description' => 'Pengenalan Mentor Azharu',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 1,
                'description' => 'Workflow Proses UI/UX',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 1,
                'description' => 'Intro Design Thinking',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 1,
                'description' => 'Intro Tools Figma',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 2 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 2,
                'description' => 'Warm Up Figma',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 2,
                'description' => 'Mempelajari Tools Figma',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 2,
                'description' => 'Membuat Simple Design Screen Figma',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 3 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 3,
                'description' => 'Figma Komponent dan Variant',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 3,
                'description' => 'Mempelajari Fitur Component Figma',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 3,
                'description' => 'Membuat Design Screen dengan Auto Layout',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 4 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 4,
                'description' => 'Going Deep into Figma Component & Variant',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 4,
                'description' => 'Mempelajari Variants sebagai bagian dari Component',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 4,
                'description' => 'Memahami Penerapan Interactive Component',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 5 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 5,
                'description' => 'Gestalt Principle',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 5,
                'description' => 'Belajar Prinsip Gestalt pada UI',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 5,
                'description' => 'Memahami Prinsip Hirarki UI',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 5,
                'description' => 'Memahami Visual Haraki UI',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 6 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 6,
                'description' => 'Mempelajari Whimsical sebagai tools ideation and Wireframe',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 6,
                'description' => 'Membuat Sitemap',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 6,
                'description' => 'Membuat Wireframe',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 7 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 7,
                'description' => 'Micro Interaction/Prototype - Mencari Asset Design',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 7,
                'description' => 'Membuat UI Screen (Profile, Wallet, Success)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 7,
                'description' => 'Animating Screen (On Boarding, Splash Screen, Sign Up)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 8 on bootcamp id 1
            [
                'main_materi_bootcamp_id' => 8,
                'description' => 'Reading Report Usability',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 8,
                'description' => 'Memahami Metric dari Hasil Report Usability Testing',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 8,
                'description' => 'Kesimpulan Akhir Seluruh Materi Bootcamp',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 9 on bootcamp id 2
            [
                'main_materi_bootcamp_id' => 9,
                'description' => 'Introduction Akhmad Fauzi',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 9,
                'description' => 'Demo Project',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 9,
                'description' => 'Roadmap Pembelajaran',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 10
            [
                'main_materi_bootcamp_id' => 10,
                'description' => 'Pengenalan Materi Dasar Laravel',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 10,
                'description' => 'Mempelajari Tools Laravel',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 10,
                'description' => 'Membuat Simple Design Screen Figma',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 10,
                'description' => 'Sesi QnA Bersama Akhmad Fauzi',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 11
            [
                'main_materi_bootcamp_id' => 11,
                'description' => 'Penjelasan Materi Lanjutan Laravel',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 11,
                'description' => 'Pengenalan Konsep Dasar',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 11,
                'description' => 'Pengenalan Fitur Migration',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 12
            [
                'main_materi_bootcamp_id' => 12,
                'description' => 'Penjelasan Materi Lanjutan Laravel',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 12,
                'description' => 'Pengolahan Data Dengan Controllers (CRUD)',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 12,
                'description' => 'Menerapkan Clean Code Architecture',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 13
            [
                'main_materi_bootcamp_id' => 13,
                'description' => 'Pengenalan Coding Awal',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 13,
                'description' => 'Membuat SetUp Codebase',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 13,
                'description' => 'Mengelola Database Migration',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 14
            [
                'main_materi_bootcamp_id' => 14,
                'description' => 'Penerapan Coding API',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 14,
                'description' => 'Penerapan Module Team API',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 14,
                'description' => 'Read Data API',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 15
            [
                'main_materi_bootcamp_id' => 15,
                'description' => 'Integrasi Authentication Module',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 15,
                'description' => 'Membuat Page Module Team',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 15,
                'description' => 'Create Module Team',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // main materi id 16
            [
                'main_materi_bootcamp_id' => 16,
                'description' => 'Finalizing dan Proses Deployment',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'main_materi_bootcamp_id' => 16,
                'description' => 'Sesi QnA Bersama Mentor Akhmad Fauzi',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($detail_materi_bootcamp as $key => $value) {
            DetailMateriBootcamp::create($value);
        }

    }
}
