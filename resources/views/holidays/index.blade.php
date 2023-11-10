<x-app-layout>
    <x-slot name="header">
        <div class="flex-col items-center ">
            <h2 class=" text-3xl font-bold font-poppins rounded-xl w-3/4 bg-gray-800 p-4 text-white leading-tight text-center">
                FERMETURE
            </h2>
        </div>
        <a href="{{ route('holidays.create') }}" class="border bg-red-400 text-black-400 hover:bg-red-500  font-bold rounded-2xl shadow-lg py-2 px-3">Ajouter des fermetures</a>
    </x-slot>
    <div class="flex justify-center my-12 items-center ">
        {{-- tableau + nom des colonnes --}}
        <table class="w-full text-md text-left  text-black bg-gray-400">
            <thead class="text-md  ">
                <tr>
                    <th scope="col" class="px-6 py-3 border-2 text-center">Date de début</th>
                    <th scope="col" class="px-6 py-3 border-2 text-center">Date de fin</th>
                    <th scope="col" class="px-6 py-3 border-2 text-center">Description</th>
                    <th scope="col" class="px-6 py-3 text-center border-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- le foreach permet de traiter chaque donnée une à une --}}
                @foreach ($holidays as $holiday)
                <tr class="bg-white ">
                    <td class="px-6 py-4 border-2">{{ $holiday->date_début }}</td>
                    <td class="px-6 py-4 border-2"> {{ $holiday->date_fin}}</td>
                    <td class="px-6 py-4 border-2">{{ $holiday->description }}</td>

                    </td>
                    <td class="px-6 py-4 flex justify-center gap-2 ">

                        <a href="{{ route('holidays.edit', $holiday) }}" class="rounded-2xl  bg-yellow-300 text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer transition-all duration-200">
                            <img src="{{ asset('assets/update.svg') }}">
                        </a>
                        <form action="{{ route('holidays.destroy', $holiday) }}" method="post">
                            @csrf
                            @method('delete')
                            {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $holidays est utilisé pour identifier l'élément à supprimer --}}
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
</x-app-layout>
