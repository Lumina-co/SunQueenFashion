<x-app-layout>

    <x-slot name="header">
        <h2 class=" text-3xl font-bold w-3/4 rounded-xl bg-gray-800 p-4 text-white leading-tight text-center">
            Ajouter un tarif
        </h2>
        <a href="{{ route('price.index') }}" class="bg-red bg-red-400 rounded-xl py-2 px-3">Retour
            aux tarifs</a>
    </x-slot>

    <div class="flex justify-center relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        {{-- lorsque le formulaire est soumis,
             il enverra une requête POST à la route nommée 'price.store' pour créer le nouvel horaire --}}
        <form
            class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
            action='{{ route('price.store') }}' method="post">
            @csrf
            <div class="py-4">
                <label class="font-semibold text-gray-500 " for="minutes">minutes</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    type="text" id="minutes" name="minutes" required size="8">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="prix">prix</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    type="text" id="prix" name="prix">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="flex items-center justify-center h-8 px-2 w-36 bg-red bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">créer</button>
            </div>
        </form>
    </div>
</x-app-layout>
