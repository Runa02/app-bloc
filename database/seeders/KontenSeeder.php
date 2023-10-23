<?php

namespace Database\Seeders;

use App\Models\Front;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Front::create([
            'kategori_id' => 1,
            'judul' => 'Dead Island 2 Hadirkan Fitur Gore System dengan Prosedural yang Presisi!',
            'sumber' => 'thelazy.media',
            'konten' => 'Setelah lama tidak terdengar kabar tentang sequel Dead Island sejak kurang lebih delapan tahun lalu, nama Dead Island 2 akhirnya kembali digaungkan melalui event game tahunan Gamescom 2022! Tidak hanya menampilkan trailer pembunuhan zombie saja, ternyata Dead Island 2 juga membawa Gore System, yang mereka beri kode nama FLESH, dalam game ini ke level selanjutnya. Dikutip dari IGN, David Stenton, game director dari Dead Island 2, menjelaskan “(Sistem Gore tersebut) memungkinkan para pemain untuk mengiris, memotong, memutilasi, melelehkan, menghancurkan, dan merusak zombie melalui berbagai macam cara yang spektakuler dan juga penuh dengan gaya. Ia pun menambahkan, “Semuanya juga bersifat prosedural secara penuh.”',
        ]);
    }
}
