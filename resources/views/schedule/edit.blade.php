<x-app-layout>

    <x-slot name="header">
        <h2 class=" bg-gray-800 p-4 text-3xl w-3/4 font-bold text-white rounded-xl leading-tight text-center">
            Modifier un horaire
        </h2>
        <a href="{{ route('schedule.index') }}" class="bg-gray-400 rounded-xl py-2 px-3">Retour aux horaires</a>
    </x-slot>

    {{-- formulaire edite --}}
    <div class="flex justify-center  relative overflow-x-auto m-12 max-w-xl mx-auto px-8">
        <form class="flex flex-col text-sm my-16 w-full items-center  text-gray-500 uppercase  bg-gray-200 rounded  p-8 mt-8 dark:bg-gray-700 dark:text-gray-400" action='{{ route('schedule.update', $schedule)}}' method="post">
            {{-- method post pour respecter la spécification HTML des formulaires --}}
            @csrf
            @method('PUT')
            {{-- pour indiquer à Laravel que la vraie méthode HTTP à utiliser est PUT, même si HTML ne supporte que POST et GET. --}}
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="day">jour</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="day" name="day" value="{{ $schedule->day}}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="opening_am">heure ouverture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="opening_am" name="opening_am" value="{{ $schedule->opening_am }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="closing_am">heure fermeture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="closing_am" name="closing_am" value="{{ $schedule->closing_am }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="opening_pm">heure ouverture aprés midi</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="opening_pm" name="opening_pm" value="{{ $schedule->opening_pm }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="closing_pm">heure fermeture aprés midi</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="time" id="closing_pm" name="closing_pm" value="{{ $schedule->closing_pm }}">
            </div>


            <div class="flex justify-center">
                <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg-red bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Modifier</button>
            </div>
        </form>
    </div>
</x-app-layout>
