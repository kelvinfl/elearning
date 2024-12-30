<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data default untuk tabel levels
        Level::create(['name' => 'admin']);
        Level::create(['name' => 'member']);
    }
}
