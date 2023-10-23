<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'kategori' => 'Games'
        ]);
        Kategori::create([
            'kategori' => 'Gadgets'
        ]);
        Kategori::create([
            'kategori' => 'Tips'
        ]);
        Kategori::create([
            'kategori' => 'Software'
        ]);
    }
}
