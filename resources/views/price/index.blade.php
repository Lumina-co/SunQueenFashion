<x-app-layout>
    <x-slot name="header">
        <div class="flex-col justify-center">
            <h2 class=" text-3xl font-poppins font-bold w-3/4 rounded-xl bg-gray-800 p-4 text-white leading-tight text-center">
                TARIFS
            </h2>
        </div>
        <a href="{{ route('price.create') }}" class="border bg-red-400 hover:bg-red-500 font-bold rounded-2xl shadow-lg py-2 px-3">Ajouter un tarif</a>
    </x-slot>
    <div class="flex my-12 justify-center items-center ">

        {{-- tableau + nom des colonnes --}}

        <table class="w-full text-md text-left text-black bg-gray-400">
            <thead class="text-xs  uppercase bg-topaz border-2 ">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center border-2">Durée</th>
                    <th scope="col" class="px-6 py-3 text-center border-2">Prix</th>
                    <th scope="col" class="px-6 py-3 text-center border-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- le foreach permet de traiter chaque horaire un à un --}}
                @foreach ($prices as $price)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                    <td class="px-6 py-4 border-2 ">{{ $price->minutes }}</td>
                    <td class="px-6 py-4 border-2"> {{ $price->prix }}</td>

                    </td>
                    <td class="px-6 py-4 flex justify-center gap-2">

                        <a href="{{ route('price.edit', $price) }}" class="rounded-2xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer bg-yellow-300 transition-all duration-200">
                            <img src="{{ asset('assets/update.svg') }}">
                        </a>
                        <form action="{{ route('price.destroy', $price) }}" method="post">
                            @csrf
                            @method('delete')
                            {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $price est utilisé pour identifier l'élément à supprimer --}}
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
