@extends('layouts.layout')
@section('title', 'Affichage | Classe')
@section('content')

        <div class="w-full max-w-4xl p-6 m-6 mx-auto bg-white shadow-md rounded-xl">
        <h1 class="mb-6 text-2xl font-bold text-center text-blue-700 uppercase">
            Liste de toutes les classes existantes
        </h1>

        <!-- Bouton ajouter qui va nous servir à ajouter les libellé -->

        <div class="flex justify-end mb-4">
            <a href="{{ route('create.libelle') }}"
               class="px-6 py-2 font-semibold text-white transition duration-300 bg-blue-600 rounded-lg shadow hover:bg-blue-700">
                    Ajouter une classe
            </a>
        </div>

        <!-- Table d'affichage de bos différentes listes -->
        <div class="overflow-x-auto">
            <table class="min-w-full overflow-hidden border border-gray-200 rounded-lg">
                <thead class="text-white bg-blue-600">
                    <tr>
                        <th class="px-4 py-3 text-left">ID</th>
                        <th class="px-4 py-3 text-left">Libellé</th>
                        <th class="px-4 py-3 text-left">Enseignant_ID</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($libelle as $libelles)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $libelles->id }}</td>
                            <td class="px-4 py-3 font-medium">{{ $libelles->libelle }}</td>
                            <td class="px-4 py-3 font-medium">{{ $libelles->enseignant_id }}</td>
                            <td class="px-4 py-3 space-x-2 text-center">
                                <a href="/classes/{{ $libelles->id }}/edit" 
                                     class="px-4 py-1
                                      text-white 
                                      transition 
                                      bg-green-500 
                                      rounded-md 
                                      hover:bg-green-600">
                                        Modifier
                                </a>

                                <a  href="/delete/classe/{{ $libelles->id }}"
                                    class="px-4 py-1 
                                    text-white 
                                    transition 
                                    bg-red-500 
                                    rounded-md 
                                    hover:bg-red-600"
                                    >
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection