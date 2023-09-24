<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl font-bold text-gray-800 leading-tight text-center">
            Vacances
        </h2>

        <a href="{{ route('holidays.create') }}" class="border bg-red-400 text-black-400 rounded-2xl shadow-lg py-2 px-3">Ajouter un nouvel horaire</a>
    </x-slot>
    {{-- tableau + nom des colonnes --}}
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8 pb-36">
        <table class="w-full text-sm text-left text-black dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-topaz dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">date de début</th>
                    <th scope="col" class="px-6 py-3">date de fin</th>
                    <th scope="col" class="px-6 py-3">description</th>
                </tr>
            </thead>
            <tbody>
                {{-- le foreach permet de traiter chaque donnée une à une --}}
                @foreach ($holidayss as $holidays)
                    <td class="px-6 py-4 bg-blue-200">{{ $holidays->date_début }}</td>
                    <td class="px-6 py-4 bg-yellow-200"> {{ $holidays->date_fin}}</td>
                    <td class="px-6 py-4 bg-orange-200">{{ $holidays->description }}</td>

                    </td>
                    <td class="px-6 py-4 flex items-center gap-2">

                        <a href="{{ route('holidays.edit', $holidays) }}" class="rounded-2xl bg-red-200 text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer transition-all duration-200">modifier</a>
                        <form action="{{ route('holidays.destroy', $holidays) }}" method="post">
                            @csrf
                            @method('delete')
                             {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $holidays est utilisé pour identifier l'élément à supprimer --}}
                            <button type="submit" onclick="return confirm ('etes-vous sûr ?')" class="rounded-2xl bg-red-200  shadow-xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 cursor-pointer transition-all duration-200">supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
