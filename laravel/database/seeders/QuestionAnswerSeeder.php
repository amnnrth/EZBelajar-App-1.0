<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = [
            // id bank soal | id 1
            [
                'question' => '3. K = {3, 4, 5} dan L = {1, 2, 3, 4, 5, 6, 7}, himpunan pasangan berurutan yang menyatakan relasi “dua lebihnya dari” dari himpunan K ke L adalah',
                'explanation' => '” dua lebihnya dari ” dri himpunan K ke L :
3 —> 5, 4 —> 6, 5 —> 7 atau
{(3, 5), (4, 6), (5, 7)}',
                'bank_soal_id' => 1,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 2
            [
                'question' => 'Diketahui : Himpunan A = {factor dari 10} dan B = {factor prima dari 30}. Banyak semua pemetaan yang mungkin dari himpunan A ke himpunan B adalah ...',
                'explanation' => 'A = {1, 2, 5, 10} ⇒ n(A) = 4 dan B = {2, 3, 5} ⇒ n(B) = 3 Banyak pemetaan A ⇒ B adalah 34 = 81',
                'bank_soal_id' => 1,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 3
            [
                'question' => 'Diketahui : P = {x| 11 < x <19, x bil. Prima}, Q = { y| y2< 9, y bil. Cacah}, banyak semua pemetaan yang mungkin dari himpunan P ke himpunan Q adalah ...',
                'explanation' => 'P = {13, 17} ⇒ n(P) = 2 Q = {1, 2} ⇒ n(Q) = 2 n(P ⇒ Q) = 22 = 4',
                'bank_soal_id' => 1,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id bank soal 2 | id 4
            [
                'question' => 'Alat yang berfungsi untuk menghubungkan 2 jaringan dengan segmen yang berbeda adalah ….',
                'explanation' => 'Router adalah sebuah hardware/alat yang befungsi untuk menghubungkan 2 jaringan atau lebih dengan segmen yang berbeda.',
                'bank_soal_id' => 2,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 5
            [
                'question' => 'Satuan dari arus listrik adalah….',
                'explanation' => 'Ampere (A) merupakan satuan dari arus listrik.',
                'bank_soal_id' => 2,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 6
            [
                'question' => 'Jenis topologi yang memiliki node tengah sebagai pusat penghubung dari suatu jaringan adalah topologi….',
                'explanation' => 'Topologi Star atau bintang, pada topologi ini menggunakan switch yang berfungsi sebagai node tengah sekaligus pusatnya jaringan. Apabila switch ini mati/terganggu, maka jaringan tidak dapat berjalan.',
                'bank_soal_id' => 2,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 7
            [
                'question' => 'Dibawah ini merupakan salah satu contoh SOJ pure, kecuali….',
                'explanation' => 'Windows XP Black Edition merupakan salah satu SO bervendor Microsoft. Corp. Didalamya tidak memuat paket-paket untuk servre kecuali kita tambahkan sendiri.',
                'bank_soal_id' => 2,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id bank soal 3 | id 8
            [
                'question' => 'Fungsi yang digunakan untuk mencari informasi yang diinginkan dengan cara mencocokkan informasi yang diinginkan dengan informasi yang tersedia adalah….',
                'explanation' => '',
                'bank_soal_id' => 3,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 9
            [
                'question' => 'Berikut yang bukan termasuk ciri khas program terstruktur adalah….',
                'explanation' => '',
                'bank_soal_id' => 3,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 10
            [
                'question' => 'Program AI pertama yang bekerja ditulis pada 1951 untuk University of Manchester dengan tujuan menjalankan mesin bernama….',
                'explanation' => '',
                'bank_soal_id' => 3,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 11
            [
                'question' => 'Joel Moses mendemonstrasikan kekuatan pertimbangan simbolis untuk mengintergrasikan masalah di dalam program Macsyma, program berbasis pengetahuan yang sukses pertama kali dalam bidang….',
                'explanation' => '',
                'bank_soal_id' => 3,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id bank soal 4 | id 12
            [
                'question' => 'Entity mahasiswa memiliki atribut nama yang terdiri dari nama depan (first name), nama tengah (middle name) dan nama belakang (last name) merupakan contoh ……',
                'explanation' => '',
                'bank_soal_id' => 4,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 13
            [
                'question' => 'Pada pengumpulan kebutuhan dan analisa, Informasi didapatkan dari setiap user view utama KECUALI',
                'explanation' => '',
                'bank_soal_id' => 4,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 14
            [
                'question' => 'Model yang dikembangkan untuk dijadikan sebagai struktur database adalah model …..',
                'explanation' => '',
                'bank_soal_id' => 4,
                'user_id' => 1,
                'is_active' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($question as $key => $value )
        {
            Question::create($value);
        }

        $answer = [
            // id 1
            [
                'answer' => '{(3, 5), (4, 6), (5, 7)}',
                'is_checked' => 0,
                'question_id' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '{(3, 5), (4, 6), (5, 7)}',
                'is_checked' => 1,
                'question_id' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '{(3, 1), (4, 2), (5, 3)}',
                'is_checked' => 0,
                'question_id' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '{(3, 2), (4, 2), (5, 2)}',
                'is_checked' => 0,
                'question_id' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            // id 2
            [
                'answer' => '81',
                'is_checked' => 1,
                'question_id' => 2,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '64',
                'is_checked' => 0,
                'question_id' => 2,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '16',
                'is_checked' => 0,
                'question_id' => 2,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '8',
                'is_checked' => 0,
                'question_id' => 2,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 3
            [
                'answer' => '27',
                'is_checked' => 0,
                'question_id' => 3,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '8',
                'is_checked' => 0,
                'question_id' => 3,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '4',
                'is_checked' => 1,
                'question_id' => 3,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => '2',
                'is_checked' => 0,
                'question_id' => 3,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 4
            [
                'answer' => 'Router',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Switch',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Hub',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Access Point',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 5
            [
                'answer' => 'Ohm (Ω)',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Ampere (A)',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => ' Watt (W)',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Volt (V)',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 6
            [
                'answer' => 'Topologi Bus',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Topologi Ring',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Topologi Tree',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Topologi Star',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 7
            [
                'answer' => 'Linux Debian',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'FreeBSD',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Fedora',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Windows XP Black Edition',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 8
            [
                'answer' => 'Search',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Pivot',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Sorting',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Filtering',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 9
            [
                'answer' => 'Sulit Dikoreksi',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Mudah Dipahami',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Mudah Dibaca',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Memiliki Rancangan Sistem',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 10
            [
                'answer' => 'Rogerian',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Turning Test',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'ELIZA',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => ' Ferranti Mark I',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 10
            [
                'answer' => 'Rogerian',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Turning Test',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'ELIZA',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => ' Ferranti Mark I',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 11
            [
                'answer' => 'Bioinformatika',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Matemaatika',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'farmatika',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => ' Robotika',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 12
            [
                'answer' => 'Dasar',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Komposit',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Atomik',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Salah Semua',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 13
            [
                'answer' => 'Deskripsi data yang digunakan dan dihasilkan',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Relasi antar Data',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Kebutuhan tambahan lainnya untuk aplikasi database yang baru',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Rincian bagaimana data digunakan dan dihasilkan',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            //id 14
            [
                'answer' => 'Konseptual',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Prosedural',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Atribut',
                'is_checked' => 0,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'answer' => 'Fisik',
                'is_checked' => 1,
                'question_id' => 4,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];

        foreach ($answer as $key => $value )
        {
            Answer::create($value);
        }
    }
}
