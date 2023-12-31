<x-app-layout>

    <x-slot name="header">
        <h2 class=" text-3xl font-bold w-3/4 rounded-xl bg-gray-800 p-4 text-white leading-tight text-center">
            Modifier un tarif
        </h2>
        <a href="{{ route('price.index') }}" class="bg-gray-400 rounded-xl py-2 px-3">Retour aux tarifs</a>
    </x-slot>
{{-- L'attribut action du formulaire est défini avec la méthode route('price.update', $price),
 ce qui indique que lorsque le formulaire est soumis,
 il enverra une requête POST à la route nommée 'price.update' avec le paramètre $tprice --}}
    <div class="flex justify-center relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form class="flex flex-col my-16 text-sm text-gray-500 w-full items-center uppercase bg-gray-50 rounded p-12 mt-12 dark:bg-gray-700 dark:text-gray-400" action='{{ route('price.update', $price)}}' method="post">
            @csrf
{{-- Les directives @csrf et @method('PUT') sont des directives Blade spécifiques à Laravel.
@csrf génère un champ de protection contre les attaques CSRF (Cross-Site Request Forgery) pour sécuriser le formulaire,
 et @method('PUT') spécifie que la méthode HTTP utilisée pour la requête est PUT --}}
            @method('PUT')

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="minutes">minutes</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="number" id="minutes" name="minutes" value="{{ $price->minutes}}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="prix">prix</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="prix" name="prix" value="{{ $price->prix}}">
            </div>

            <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg-red bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Modifier</button>
        </form>
    </div>
</x-app-layout>
