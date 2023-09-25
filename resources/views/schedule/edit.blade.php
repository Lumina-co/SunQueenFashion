<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            modifier un horaire
        </h2>
        <a href="{{ route('schedule.index') }}" class="border border-red-400 text-red-400 rounded-md py-2 px-3">Retour aux horaires</a>
    </x-slot>
{{-- L'attribut action du formulaire est défini avec la méthode route('schedule.update', $schedule),
 ce qui indique que lorsque le formulaire est soumis,
 il enverra une requête POST à la route nommée 'schedule.update' avec le paramètre $tschedule --}}
    <div class="flex justify-center relative overflow-x-auto mt-12 max-w-xl mx-auto px-8">
        <form class="flex flex-col text-sm text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400" action='{{ route('schedule.update', $schedule)}}' method="post">
            @csrf
{{-- Les directives @csrf et @method('PUT') sont des directives Blade spécifiques à Laravel.
@csrf génère un champ de protection contre les attaques CSRF (Cross-Site Request Forgery) pour sécuriser le formulaire,
 et @method('PUT') spécifie que la méthode HTTP utilisée pour la requête est PUT --}}
            @method('PUT')

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="jour">jour</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="jour" name="jour" value="{{ $schedule->jour}}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_ouverture_am">heure d'ouverture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_ouverture_am" name="heure_ouverture_am" value="{{ $schedule->heure_ouverture_am }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_fermeture_am">heure de fermeture matin</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_fermeture_am" name="heure_fermeture_am" value="{{ $schedule->heure_fermeture_am }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_ouverture_pm">heure d'ouverture aprés midi</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_ouverture_pm" name="heure_ouverture_pm" value="{{ $schedule->heure_ouverture_pm }}">
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="heure_fermeture_pm">heure de fermeture aprés midi</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" id="heure_fermeture_pm" name="heure_fermeture_pm" value="{{ $schedule->heure_fermeture_pm }}">
            </div>
            <div class="mb-3">
                <label for="saison" class="form-label">Saison :</label>
                <select class="form-select" id="saison">
                    <option value="ete">Été</option>
                    <option value="hiver">Hiver</option>
                </select>
            </div>

            <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 bg--400 mt-8 rounded font-semibold text-sm mx-auto text-blue-100 hover:bg-red-400 hover:scale-105">update</button>
        </form>
    </div>
</x-app-layout>
