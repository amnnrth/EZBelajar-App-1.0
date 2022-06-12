<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artikel = [
            [
                'title'             => 'Apa itu Algorithm?',
                'slug'             => 'apa-itu-algorithm-1',
                'imagePath'        => 'public/assets/blog/1.jpg',
                'body'              =>    '<div>Pengertian Algoritma</div><div><strong><em>Algorithm</em></strong><strong> </strong>(diucapkan AL-go-rith-um)<strong> </strong>atau <strong>algoritma</strong> adalah prosedur atau rumus untuk menyelesaikan masalah, berdasarkan pada melakukan serangkaian tindakan tertentu. Program yang ada pada komputer dapat dilihat sebagai algoritma yang rumit. Dalam matematika dan ilmu komputer, algoritma biasanya berarti prosedur kecil yang memecahkan masalah berulang berdasarkan simpulan yang Kami ambil dari <strong>Situs </strong><a href="https://rifqimulyawan.com/blog/pengertian-algoritma/?link=https%3A%2F%2Fwhatis.techtarget.com%2Fdefinition%2Falgorithm"><strong>Techtarget</strong></a>.</div><div>Algoritme enkripsi mengubah data sesuai dengan tindakan yang ditentukan untuk melindunginya. Algoritme kunci rahasia, misalnya seperti Standar Enkripsi Data atau <em>Data Encryption Standard</em> (DES) departemen pertahanan yang ada di negara A.S. Amerika Serikat, mereka menggunakan kunci yang sama untuk mengenkripsi dan mendekripsi data.</div><div><br></div><div>Apa itu <em>Algorithm</em>?</div><div>Kata Algoritma berasal dari nama ahli matematika, <strong>Mohammed Ibn-Musa Al-Khwarizmi</strong>, yang merupakan bagian dari pengadilan kerajaan di Baghdad dan yang hidup dari sekitar 780 hingga 850. Karya Al-Khwarizmi adalah dimana kata aljabar juga berasal.</div><div><strong>Algoritma </strong>adalah logika, metode dan tahapan “urutan” sistematis yang digunakan untuk memecahkan suatu permasalahan. Secara spesifik, <strong>algoritma</strong> adalah sebuah metode khusus yang tepat dan terdiri dari serangkaian langkah yang terstruktur, dituliskan secara matematis yang akan dikerjakan untuk menyelesaikan suatu masalah dengan bantuan komputer. Jadi berdasarkan definisi dari ini, dapat dikatakan algoritma merupakan langkah penyelesaian suatu masalah yang menghasilkan solusi dalam bentuk program komputer.</div><div>&nbsp;</div><div><strong>Algoritma, mempunyai tujuan dan fungsi yang berkaitan, adapun beberapa tujuan dan fungsi algoritma yang perlu kalian ketahui adalah sebagai berikut:<br></strong><br></div><ul><li><strong><br>Memecahkan masalah rumit</strong>; Dengan menggunakan fungsi algoritma, maka akan lebih mudah untuk memecahkan masalah yang rumit.</li><li><strong>Menjadikan masalah menjadi lebih sederhana</strong>; Dengan menggunakan fungsi algoritma, maka kita dapat menjadikan masalah yang besar menjadi Masalah yang lebih sederhana.</li><li><strong>Algoritma dapat digunakan berulang kali</strong>; Tujuan dan fungsi algoritma juga dapat digunakan untuk penggunaan secara berulang atau lebih dari satu kali.</li><li><strong>Memudahkan dalam pembuatan program</strong>; Algoritma dapat memudahkan kita untuk membuat program, salah satu cara untuk mempermudahnya yaitu dengan membuat <em>flow chart</em> terlebih dahulu sebelum membuat program.</li><li><strong>Mengatasi masalah dengan logika</strong>; Dengan algoritma, maka kita dapat mengatasi segala masalah dengan logika.</li><li><strong>Meminimalisir penulisan program yang berulang-ulang</strong>; Algoritma dapat digunakan untuk memudahkan kita menulis program yang berulang-ulang.<br><br></li></ul><div>&nbsp;<br><br></div><div><br></div>',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'title'             => 'Apa itu Data Structure??',
                'slug'             => 'apa-itu-algorithm-1',
                'imagePath'              => 'public/assets/blog/1.jpg',
                'body'              =>    'https://www.youtube.com/embed/4lgPiAITfuk',
                'user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
        ];
    }
}
