<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl font-bold text-gray-800 leading-tight text-center">
            Gestion des horaires
        </h2>

        <a href="{{ route('schedule.create') }}" class="border bg-red-400 text-black-400 rounded-2xl shadow-lg py-2 px-3">Ajouter un nouvel horaire</a>
    </x-slot>
    {{-- tableau + nom des colonnes --}}
    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8 pb-36">
        <table class="w-full text-sm text-left text-black dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-topaz dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">id</th>
                    <th scope="col" class="px-6 py-3">jour</th>
                    <th scope="col" class="px-6 py-3">heure d'ouverture du matin</th>
                    <th scope="col" class="px-6 py-3">heure de fermeture du matin</th>
                    <th scope="col" class="px-6 py-3">heure d'ouverture après-midi</th>
                    <th scope="col" class="px-6 py-3">heure de fermeture après-midi</th>
                    <div class="mb-3">
                        <label for="saison" class="form-label">Saison :</label>
                        <select class="form-select" id="saison">
                            <option value="ete">Été</option>
                            <option value="hiver">Hiver</option>
                        </select>
                    </div>
                </tr>
            </thead>
            <tbody>
                {{-- le foreach permet de traiter chaque horaire un à un --}}
                @foreach ($schedules as $schedule)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $schedule->id }}
                    </th>
                    <td class="px-6 py-4 bg-blue-200">{{ $schedule->jour }}</td>
                    <td class="px-6 py-4 bg-yellow-200"> {{ $schedule->heure_ouverture_am }}</td>
                    <td class="px-6 py-4 bg-orange-200">{{ $schedule->heure_fermeture_am }}</td>
                    <td class="px-6 py-4 bg-yellow-200"> {{ $schedule->heure_ouverture_pm }}</td>
                    <td class="px-6 py-4 bg-orange-200">{{ $schedule->heure_fermeture_pm }}</td>

                    <td class="px-6 py-4 flex items-center gap-2">
                    <a href="{{ route('schedule.edit', $schedule) }}" class="rounded-2xl bg-red-200 text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer transition-all duration-200">modifier</a>
                    <form action="{{ route('schedule.destroy', $schedule) }}" method="post">
                        @csrf
                        @method('delete')
                        {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $schedule est utilisé pour identifier l'élément à supprimer --}}
                        <button type="submit" onclick="return confirm ('etes-vous sûr ?')" class="rounded-2xl bg-red-400  shadow-xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 cursor-pointer transition-all duration-200">supprimer</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
