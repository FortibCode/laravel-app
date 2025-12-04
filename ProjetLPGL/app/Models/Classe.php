<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $fillable = ['libelle', 'enseignant_id'];

    // Relation : une classe appartient à un enseignant
    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'enseignant_id');
    }

    // Relation : une classe peut avoir plusieurs étudiants
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class, 'classe_id');
    }
}
