<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classe;

class ClassesSeeder extends Seeder
{
    public function run()
    {
        Classe::insert([
            ['libelle' => 'LPGL', 'enseignant_id' => 1],
            ['libelle' => 'LPASR', 'enseignant_id' => 2],
            ['libelle' => 'LPDB', 'enseignant_id' => 3],
        ]);
    }
}
