<x-app-layout>

    <x-slot name="header">
        <h2 class=" bg-gray-800 p-4 text-3xl w-3/4 font-bold text-white rounded-xl leading-tight text-center">
             Ajouter un horaires
       </h2>
        <a href="{{ route('schedule.index') }}" class="bg-gray-400 text-black rounded-2xl py-2 px-4">Retour
            aux horaires</a>
    </x-slot>

    <div class="flex justify-center relative  overflow-x-auto mt-12  mx-auto px-8">
        {{-- lorsque le formulaire est soumis,
             il enverra une requête POST à la route nommée 'schedule.store' pour créer le nouvel horaire --}}
        <form class="flex flex-col text-sm text-gray-500 uppercase bg-gray-200 rounded  p-12 mt-12 dark:bg-gray-700 dark:text-gray-400" action='{{ route('schedule.store') }}' method="post">
            @csrf
            <label class=" rounded-xl" for="season">Saison :</label>
            <select name="season" id="season">
                <option value="">Toutes les saisons</option>
                @foreach ($seasons as $season)
                <option value="{{ $season->id }}" @if ($season->id) selected @endif>{{ $season->nom }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-red-200 hover:bg-red-300 p-2 m-4 rounded-md">Filtrer</button>

            <div class="py-4">
                <label class="font-semibold text-gray-500 " for="day">Jour</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="day" name="day" required size="8">
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="opening_pm">heure ouverture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="opening_pm" name="opening_pm">
            </div>
                <div class="py-4">
                    <label class="font-semibold text-gray-500" for="closing_am">heure fermeture matin</label>
                    <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="closing_am" name="closing_am"> </div>
                    <div class="py-4">
                        <label class="font-semibold text-gray-500" for="opening_pm">heure ouverture aprés midi</label>
                        <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="opening_pm" name="opening_pm" ></div>
                        <div class="py-4">
                            <label class="font-semibold text-gray-500" for="closing_pm">heure fermeture aprés midi</label>
                            <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="closing_pm" name="closing_pm"> </div>

                            <div class="flex justify-center">
                                <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg-red bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">créer</button>
                            </div>
        </form>
    </div>
</x-app-layout>
