<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold bg-gray-800 text-4xl p-4 font-bold text-white leading-tight text-center">
            Gestion des horaires
        </h2>

        <a href="{{ route('schedule.create') }}" class="border bg-red m-8 text-black-400 rounded-2xl shadow-lg py-2 px-3">Ajouter un nouvel horaire</a>
    </x-slot>
    <div class="flex justify-center items-center ">
        <div class="bg-gray-500 border-8 w-3/4  ">
            <div class="m-4">
                
                {{-- formulaire de filtrage de saison --}}
                <form action="{{ route('schedule.index') }}" method="GET">
                    <label class=" rounded-xl" for="season">Saison :</label>
                    <select name="season" id="season">
                        <option value="">Toutes les saisons</option>
                        @foreach ($seasons as $season)
                        <option value="{{ $season->id }}" @if ($selectedSeason==$season->id) selected @endif>{{ $season->nom }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="bg-white p-2 m-4 rounded-xl">Filtrer</button>
                </form>
            </div>
            {{-- tableau + nom des colonnes --}}
            <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8 pb-36 shadow-xl">
                <table class="w-full text-sm text-left text-black dark:text-gray-400 ">
                    <thead class="text-xs text-white text-gray-700 bg uppercase bg-topaz border-2">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center border-2">id</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">jour</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">heure ouverture matin</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">heure fermeture matin</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">heure ouverture après-midi</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">heure fermeture après-midi</th>
                            <th scope="col" class="px-6 py-3 text-center border-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- le foreach permet de traiter chaque horaire un à un --}}
                        @foreach ($schedules as $schedule)
                        <tr class="bg-white border-b  dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $schedule->id }}
                            </th>
                            <td class="px-6 py-4 bg-gray-300 border-2">{{ $schedule->jour }}</td>
                            <td class="px-6 py-4 border-2 "> {{ $schedule->opening_am }}</td>
                            <td class="px-6 py-4  border-2">{{ $schedule->closing_am }}</td>
                            <td class="px-6 py-4 border-2"> {{ $schedule->opening_pm }}</td>
                            <td class="px-6 py-4 border-2">{{ $schedule->closing_pm }}</td>

                            <td class="px-6 py-4 flex items-center gap-2">
                                <a href="{{ route('schedule.edit', $schedule) }}" class="rounded-2xl bg-red-200 text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer bg-yellow-300 transition-all duration-200">modifier</a>
                                <form action="{{ route('schedule.destroy', $schedule) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $schedule est utilisé pour identifier l'élément à supprimer --}}
                                    <button type="submit" onclick="return confirm ('etes-vous sûr ?')" class="rounded-2xl bg-red  shadow-xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 cursor-pointer transition-all duration-200">supprimer</button>
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
