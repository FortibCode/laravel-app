@extends('layouts.layout')
@section('title', 'Modifier | Classe')
@section('content')
    <div class="flex justify-center w-full mt-10">
        <div class="w-full  max-w-[800px] bg-white p-6 rounded-xl shadow-lg">

            <h2 class="mb-6 text-2xl font-bold text-center text-blue-900 uppercase">
                Modification de la classe
            </h2>

            <form method="POST" action="/update/traitement/{{ $libelles->id }}">
                @csrf

                <input type="text" name="id" value="{{ $libelles->id }}">

                <!-- Champ pour créer notre libellé -->

                <div class="mb-4">
                    <label for="libelle" class="flex 
                            items-center 
                            gap-4 text-sm 
                            font-medium 
                            text-blue-900">
                        <span class="whitespace-nowrap">Libellé :</span>
                        <input type="text" name="libelle" id="libelle" placeholder="Entrer le nom de la classe"
                            value="{{ $libelles->libelle }}" required class="flex-1 px-4 py-2 border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    </label>
                    <!-- Affichage de l'erreur -->

                    @error('libelle')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="enseignant_id" 
                        class="block 
                        text-sm 
                        font-medium 
                        text-gray-700">
                        Enseignant :
                    </label>

                    <select name="enseignant_id" id="enseignant_id" required 
                        class="block w-full 
                            px-4 py-2 
                            mt-1 border 
                            border-gray-300 
                            rounded-lg 
                            focus:outline-none 
                            focus:ring-2 
                            focus:ring-blue-500 
                            focus:border-blue-500">
                        <option value="">-- Choisir un enseignant --</option>

                        @foreach($enseignants as $enseignant)
                            <option value="{{ $enseignant->id }}">
                                {{ $enseignant->nom }}
                            </option>
                        @endforeach
                    </select>

                    @error('enseignant_id')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Boutons Ajouter et Annuler-->

                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="px-6 py-2 
                        font-semibold
                      text-white 
                        transition 
                        duration-300 
                        bg-green-600 
                        rounded-lg 
                        shadow 
                        hover:bg-green-700">
                        Modifier
                    </button>

                    <a href="{{ url()->previous() }}"
                        class="font-semibold 
                            text-gray-600 
                            transition duration-300 
                            hover:text-red-600">
                            Annuler
                    </a>
                </div>

            </form>

            <div class="mt-10 mb-3">
                <a href="{{ route('index') }}" 
                    class="px-4 py-2 
                    font-semibold 
                    text-center 
                    text-white 
                    transition 
                    duration-300 
                    bg-blue-900 
                    rounded 
                    hover:text-blue-600">
                    Revenir vers la page des classes
            </a>
            </div>
        </div>
    </div>


@endsection