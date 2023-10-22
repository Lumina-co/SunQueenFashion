<x-app-layout>
    <x-slot name="header">
<div class="flex-col items-center">
        <h2 class=" bg-gray-800 p-4 text-3xl w-3/4 font-bold text-white rounded-xl leading-tight text-center">
             Horaires
        </h2>

        <a href="{{ route('schedule.create') }}" class="border bg-red-400 m-8 text-black-400 rounded-2xl shadow-lg py-2 px-3">Ajouter un nouvel horaire</a>
    </x-slot>
    <div class="flex justify-center  ">
        <div class=" w-full  ">
            <div class="m-4">

                {{-- formulaire de filtrage de saison --}}

                <form action="{{ route('schedule.index') }}" method="GET">
                     {{-- method get pour afficher  --}}
                    <label class="m-16  text-xl" for="season">Saison :</label>
                    <select name="season" id="season">
                        {{-- menu déroulant --}}
                        <option value="">Toutes les saisons</option>
                        @foreach ($seasons as $season)
                        <option value="{{ $season->id }}" @if ($selectedSeason==$season->id) selected @endif>{{ $season->nom }}</option>
                        @endforeach
                        {{--  vérifie si l'ID de la saison en cours ($season->id) correspond à la saison sélectionnée ($selectedSeason) pré-sélection de la saison --}}
                    </select>
                    <button type="submit" class="bg-white p-2 m-4 rounded-xl">Filtrer</button>
                </form>
            </div>
            {{-- tableau + nom des colonnes --}}
            <div class=" mt-12   px-8 pb-12 ">
                <table class="w-full  text-md text-left text-black ">
                    <thead class="text-md bg bg-gray-300 border-2">
                        <tr>

                            <th scope="col" class="px-6 py-3 text-center border-2">Jour</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">Heure ouverture matin</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">Heure fermeture matin</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">Heure ouverture après-midi</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">Heure fermeture après-midi</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- le foreach permet de traiter chaque horaire un à un --}}
                        @foreach ($schedules as $schedule)
                        <tr class="bg-white border-b  dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-6 py-4 bg-gray-300 border-2">{{ $schedule->day }}</td>
                            <td class="px-6 py-4 border-2 "> {{ $schedule->opening_am }}</td>
                            <td class="px-6 py-4  border-2">{{ $schedule->closing_am }}</td>
                            <td class="px-6 py-4 border-2"> {{ $schedule->opening_pm }}</td>
                            <td class="px-6 py-4 border-2">{{ $schedule->closing_pm }}</td>

                            <td class="px-6 py-4 flex justify-center gap-2">

                        <a href="{{ route('schedule.edit', $schedule) }}" class="rounded-2xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer bg-yellow-300 transition-all duration-200">
                            <img src="{{ asset('assets/update.svg') }}">
                        </a>
                                <form action="{{ route('schedule.destroy', $schedule) }}" method="post">
                                    {{--  post:stock --}}
                                    @csrf
                                    @method('delete')
                                    {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre la variable $schedule est utilisé pour identifier l'élément à supprimer --}}
                                    <button type="submit" onclick="return confirm ('etes-vous sûr ?')" class="rounded-2xl bg-red-400  shadow-xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 cursor-pointer transition-all duration-200">
                                        <img src="{{ asset('assets/bin.svg') }}">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
