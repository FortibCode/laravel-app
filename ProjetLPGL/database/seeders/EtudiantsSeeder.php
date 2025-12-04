<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class EtudiantsSeeder extends Seeder
{
    public function run()
    {
       Etudiant::insert([
            [
                'classe_id' => 1,
                'nom' => 'Ngoma',
                'prenom' => 'Pierre',
                'email' => 'ngoma.pierre@mail.com',
                'tel' => '0654123456',
                'adresse' => 'Brazzaville',
                'date_naissance' => null, // nullable
            ],
            [
                'classe_id' => 1,
                'nom' => 'Moussavou',
                'prenom' => 'Sophie',
                'email' => 'moussavou.sophie@mail.com',
                'tel' => '0654123457',
                'adresse' => 'Pointe-Noire',
                'date_naissance' => null,
            ],
            [
                'classe_id' => 2,
                'nom' => 'Okombi',
                'prenom' => 'Fortune',
                'email' => 'okombi.fortune@mail.com',
                'tel' => '0654123458',
                'adresse' => 'Nkayi',
                'date_naissance' => null,
            ],
            [
                'classe_id' => 3,
                'nom' => 'Mbemba',
                'prenom' => 'Alice',
                'email' => 'mbemba.alice@mail.com',
                'tel' => '0654123459',
                'adresse' => 'Dolisie',
                'date_naissance' => null,
            ],
        ]);


    }
}
