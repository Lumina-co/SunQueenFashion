<x-app-layout>
    <x-slot name="header">
        <div class="flex-col justify-center">
            <h2 class="text-3xl font-bold font-poppins text-white rounded-xl w-3/4  bg-gray-800 p-4 leading-tight text-center">
                SAISONS
            </h2>
        </div>

        <a href="{{ route('season.create') }}" class="border bg-red-400 hover:bg-red-500 font-bold text-black-400 rounded-2xl  shadow-lg py-2 px-3">Ajouter des dates</a>
    </x-slot>
    <div class="flex justify-center my-12 items-center ">
            {{-- tableau + nom des colonnes --}}
                <table class="w-full text-md text-left  text-black bg-gray-400">
                    <thead class="text-md border-2">
                        <tr>
                            <th scope="col" class="px-6 py-3">id</th>
                            <th scope="col" class="px-6 py-3">Nom</th>
                            <th scope="col" class="px-6 py-3">Heure de début</th>
                            <th scope="col" class="px-6 py-3">Heure de fin</th>
                            <th scope="col" class="px-6 py-3 text-center">Actions</th>

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
                            <td class="px-6 py-4 flex justify-center  gap-2 ">
                                <a href="{{ route('season.edit', $season) }}" class="rounded-2xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer bg-yellow-300 transition-all duration-200">
                                    <img src="{{ asset('assets/update.svg') }}">
                                </a>
                                <form action="{{ route('season.destroy', $season) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $season est utilisé pour identifier l'élément à supprimer --}}
                                    <button type="submit" onclick="return confirm ('etes-vous sûr ?')" class="rounded-2xl bg-red  shadow-xl text-sm text-black py-2 px-3 hover:bg-gray-200 bg-red-400 hover:text-black-800 cursor-pointer transition-all duration-200">
                                        <img src="{{ asset('assets/bin.svg') }}">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
</x-app-layout>
