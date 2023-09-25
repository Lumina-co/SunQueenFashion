<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Ajouter un horaire
        </h2>
        <a href="{{ route('schedule.index') }}" class="border border-red-400 text-red-400 rounded-md py-2 px-3">Retour
            aux horaires</a>
    </x-slot>

    <div class="flex justify-center relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        {{-- lorsque le formulaire est soumis,
             il enverra une requête POST à la route nommée 'schedule.store' pour créer le nouvel horaire --}}
        <form
            class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400"
            action='{{ route('schedule.store') }}' method="post">
            @csrf
            <div class="py-4">
                <label class="font-semibold text-gray-500 " for="jour">jour</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    type="text" id="jour" name="jour" required size="8">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_ouverture_am">heure d'ouverture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_ouverture_am" name="heure_ouverture_am"
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_fermeture_am">heure de fermeture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_fermeture_am" name="heure_fermeture_am"
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_ouverture_pm">heure d'ouverture aprés midi</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_ouverture_pm" name="heure_ouverture_pm"
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_fermeture_pm">heure de fermeture aprés midi</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_fermeture_pm" name="heure_fermeture_pm"
            </div>

            <div class="mb-3">
                <label for="saison" class="form-label">Saison :</label>
                <select class="form-select" id="saison">
                    <option value="ete">Été</option>
                    <option value="hiver">Hiver</option>
                </select>
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="flex items-center justify-center h-8 px-2 w-36 bg-red-400 mt-8 rounded-xl shadow-xl font-semibold text-sm text-blue-100 hover:bg-blue-700">create</button>
            </div>
        </form>
    </div>
</x-app-layout>
