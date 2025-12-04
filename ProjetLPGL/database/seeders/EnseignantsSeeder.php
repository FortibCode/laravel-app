<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enseignant;

class EnseignantsSeeder extends Seeder
{
    public function run()
    {
        Enseignant::insert([
            ['nom' => 'Koumba', 'prenom' => 'Jean', 'tel' => '0654123456', 'email' => 'jean.koumba@mail.com', 'matiere_id' => 1, 'specialite' => 'Maths'],
            ['nom' => 'Mbala', 'prenom' => 'Alice', 'tel' => '0654123457', 'email' => 'alice.mbala@mail.com', 'matiere_id' => 2, 'specialite' => 'Physique'],
            ['nom' => 'Léon', 'prenom' => 'Paul', 'tel' => '0654123458', 'email' => 'paul.leon@mail.com', 'matiere_id' => 3, 'specialite' => 'SVT'],
        ]);
    }
}
