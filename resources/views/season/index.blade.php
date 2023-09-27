<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl font-bold text-white bg-gray-800 p-4 leading-tight text-center">
            SAISONS
        </h2>

        <a href="{{ route('season.create') }}" class="border bg-red text-black-400 rounded-2xl shadow-lg py-2 px-3">Ajouter des dates</a>
    </x-slot>
    <div class="flex justify-center items-center ">
        <div class="bg-gray-500 border-8 w-1/2  ">
            {{-- tableau + nom des colonnes --}}
            <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8 pb-36">
                <table class="w-full text-sm text-left text-black dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-topaz border-2 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">id</th>
                            <th scope="col" class="px-6 py-3">nom</th>
                            <th scope="col" class="px-6 py-3">heure de début</th>
                            <th scope="col" class="px-6 py-3">heure de fin</th>


                        </tr>
                    </thead>
                    <tbody>
                        {{-- le foreach permet de traiter chaque horaire un à un --}}
                        @foreach ($seasons as $season)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $season->id }}
                            </th>
                            <td class="px-6 py-4 border-2 ">{{ $season->nom }}</td>
                            <td class="px-6 py-4 border-2 "> {{ $season->date_début }}</td>
                            <td class="px-6 py-4 border-2">{{ $season->date_fin }}</td>

                            </td>
                            <td class="px-6 py-4 flex items-center flex justify-center items-center gap-2  bg-gray-200">
                                <a href="{{ route('season.edit', $season) }}" class="rounded-2xl bg-red-200 text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer bg-yellow-300 transition-all duration-200">modifier</a>
                                <form action="{{ route('season.destroy', $season) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $season est utilisé pour identifier l'élément à supprimer --}}
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
