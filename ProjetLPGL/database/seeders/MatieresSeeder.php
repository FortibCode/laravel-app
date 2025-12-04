<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matiere;

class MatieresSeeder extends Seeder
{
    public function run()
    {
        Matiere::insert([
            ['nom' => 'Mathématiques'],
            ['nom' => 'Physique'],
            ['nom' => 'SVT'],
            ['nom' => 'Français'],
            ['nom' => 'Anglais'],
        ]);
    }
}
