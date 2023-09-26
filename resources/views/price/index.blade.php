<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl font-bold text-gray-800 leading-tight text-center">
            TARIFS
        </h2>

        <a href="{{ route('price.create') }}" class="border bg-red-400 text-black-400 rounded-2xl shadow-lg py-2 px-3">Ajouter un tarif</a>
    </x-slot>
    {{-- tableau + nom des colonnes --}}
    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8 pb-36">
        <table class="w-full text-sm text-left text-black dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-topaz dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">durée</th>
                    <th scope="col" class="px-6 py-3">prix</th>

                </tr>
            </thead>
            <tbody>
                {{-- le foreach permet de traiter chaque horaire un à un --}}
                @foreach ($prices as $price)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                    <td class="px-6 py-4 bg-blue-200">{{ $price->minutes }}</td>
                    <td class="px-6 py-4 bg-yellow-200"> {{ $price->prix }}</td>

                    </td>
                    <td class="px-6 py-4 flex items-center gap-2 flex justify-end items-end">

                        <a href="{{ route('price.edit', $price) }}" class="rounded-2xl bg-red-200 text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 shadow-xl cursor-pointer transition-all duration-200">modifier</a>
                        <form action="{{ route('price.destroy', $price) }}" method="post">
                            @csrf
                            @method('delete')
                             {{-- ce formulaire est utilisé pour envoyer une requête de suppression
                                 à une route spécifique dans Laravel en utilisant la méthode DELETE.
                        Le paramètre $price est utilisé pour identifier l'élément à supprimer --}}
                            <button type="submit" onclick="return confirm ('etes-vous sûr ?')" class="rounded-2xl bg-red-200  shadow-xl text-sm text-black py-2 px-3 hover:bg-gray-200 hover:text-black-800 cursor-pointer transition-all duration-200">supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
