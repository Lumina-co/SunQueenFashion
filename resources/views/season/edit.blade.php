<x-app-layout>

    <x-slot name="header">
        <h2 class="text-3xl font-bold text-white rounded-xl w-3/4  bg-gray-800 p-4 leading-tight text-center">
            Modifier des saisons
        </h2>
        <a href="{{ route('season.index') }}" class="bg-red-400 rounded-xl py-2 px-3">Retour aux saisons</a>
    </x-slot>
{{-- L'attribut action du formulaire est défini avec la méthode route('season.update', $season),
 ce qui indique que lorsque le formulaire est soumis,
 il enverra une requête POST à la route nommée 'season.update' avec le paramètre $tseason --}}
    <div class="flex justify-center relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form class="flex flex-col text-sm my-16 text-gray-500 w-full uppercase items-center bg-gray-50 rounded  p-12 mt-12 dark:bg-gray-700 dark:text-gray-400" action='{{ route('season.update', $season)}}' method="post">
            @csrf

{{-- Les directives @csrf et @method('PUT') sont des directives Blade spécifiques à Laravel.
@csrf génère un champ de protection contre les attaques CSRF (Cross-Site Request Forgery) pour sécuriser le formulaire,
 et @method('PUT') spécifie que la méthode HTTP utilisée pour la requête est PUT --}}
            @method('PUT')

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="nom">nom</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="nom" name="nom" value="{{ $season->nom}}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="date_début">Date de début</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="date" id="date_début" name="date_début" value="{{ $season->date_début }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="date_fin">Date de fin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="date" id="date_fin" name="date_fin" value="{{ $season->date_fin }}">
            </div>


            <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg-red bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Modifier</button>
        </form>
    </div>
</x-app-layout>
