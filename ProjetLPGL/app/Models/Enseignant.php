<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;

class Enseignant extends Model
{
    use HasFactory;

    protected $table = 'enseignants';
    protected $fillable = ['nom', 'prenom', 'tel', 'email', 'matiere_id', 'specialite'];

    // Relation : un enseignant appartient à une matière
    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'matiere_id');
    }

    // Relation : un enseignant peut avoir plusieurs classes
    public function classes()
    {
        return $this->hasMany(Classe::class, 'enseignant_id');
    }
}
