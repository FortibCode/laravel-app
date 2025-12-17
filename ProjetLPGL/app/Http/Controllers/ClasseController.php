<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Enseignant;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libelle = Classe::all();

        return view('classes.liste_classes', compact('libelle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

         $enseignants = Enseignant::all();

         return view('classes.ajoute_classe', compact('enseignants'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des champs
            $request->validate([
                'libelle' => 'required|string|max:255',
                'enseignant_id' => 'required|exists:enseignants,id', 
            ]);

    // Création de la classe en utilisant la methode create() avec notre variable $fillable

        Classe::create([
            'libelle' => $request->libelle,
            'enseignant_id' => $request->enseignant_id,
        ]);

        return redirect()->route('index')->with('success', 'Classe ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récuperation des classes modifier

       $libelles = Classe::find($id); 

        //    La récupération des enseignants modifier

        $enseignants = Enseignant::all(); 

        if (!$libelles) {
            return redirect()->route('index')->with('error', 'Classe non trouvée');
        }

        return view('classes.modifier', compact('libelles', 'enseignants'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $classe = Classe::findOrFail($id);

        $classe->libelle = $request->libelle;

        $classe->enseignant_id = $request->enseignant_id;

        $classe->save();

        return redirect()->route('index')->with('success', 'Classe modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $libelles = Classe::find($id);

        $libelles->delete();

        return redirect()->route('index')->with('success', 'Libéllé supprimé avec succès');
    }
}
