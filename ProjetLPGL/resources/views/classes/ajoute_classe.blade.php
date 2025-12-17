@extends('layouts.layout')
@section('title', 'Ajout | Classe')
@section('content')
    <div class="w-full  flex justify-center mt-10">
        <div class="w-full  max-w-[800px] bg-white p-6 rounded-xl shadow-lg">

            <h2 class="text-2xl font-bold text-center uppercase text-blue-900 mb-6">
                Création de la classe
            </h2>

            <form method="POST" action="{{ route('store') }}">
                @csrf

                <!-- Champ pour créer notre libellé -->

                <div class="mb-4">
                    <label for="libelle" class="flex items-center gap-4 text-sm font-medium text-blue-900">
                        <span class="whitespace-nowrap">Libellé :</span>
                        <input type="text" name="libelle" id="libelle" placeholder="Entrer le nom de la classe"
                            value="{{ old('libelle') }}" required class="flex-1 px-4 py-2 border-blue-300 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    </label>
                    <!-- Affichage de l'erreur -->
                    @error('libelle')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="enseignant_id" class="block text-sm font-medium text-gray-700">
                        Enseignant :
                    </label>
                    <select name="enseignant_id" id="enseignant_id" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">-- Choisir un enseignant --</option>
                        @foreach($enseignants as $enseignant)
                            <option value="{{ $enseignant->id }}">
                                {{ $enseignant->nom }}
                            </option>
                        @endforeach
                    </select>
                    @error('enseignant_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Boutons Ajouter et Annuler-->
                <div class="flex justify-between items-center mt-6">
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg
                                   hover:bg-green-700 transition duration-300 font-semibold shadow">
                        Ajouter
                    </button>

                    <a href="{{ url()->previous() }}"
                        class="text-gray-600 hover:text-red-600 font-semibold transition duration-300">
                        Annuler
                    </a>
                </div>

            </form>

            <div class="mt-10 mb-3">
                <a href="{{ route('index') }}" class="text-white  px-4 py-2 rounded text-center bg-blue-900 hover:text-blue-600 font-semibold transition duration-300">
                Revenir vers la page des classes
            </a>
            </div>
        </div>
    </div>


@endsection