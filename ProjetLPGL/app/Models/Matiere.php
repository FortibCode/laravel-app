<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignant;

class Matiere extends Model
{
    use HasFactory;

    protected $table = 'matieres';
    protected $fillable = ['nom'];

    // Relation : une matière peut avoir plusieurs enseignants
    public function enseignants()
    {
        return $this->hasMany(Enseignant::class, 'matiere_id');
    }
}
