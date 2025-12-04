<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';
    protected $fillable = ['nom', 'prenom', 'classe_id'];

    // Relation : un étudiant appartient à une classe
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }
}
