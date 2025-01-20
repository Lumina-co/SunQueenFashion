<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Season;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les saisons
        $seasons = Season::all();

        // Récupérer la saison sélectionnée par l'utilisateur depuis l'input
        $selectedSeason = request()->input('season');

        // Si aucune saison n'est sélectionnée, chercher la saison actuelle
        if ($selectedSeason === null) {
            $currentSeason = Season::where('date_début', '<=', now())
                ->where('date_fin', '>=', now())
                ->first();

            // Vérifiez si une saison actuelle existe
            if ($currentSeason) {
                $selectedSeason = $currentSeason->id;
            } else {
                $selectedSeason = null; // Aucune saison trouvée
            }
        }

        // Récupérer les horaires associés à la saison sélectionnée
        $schedules = collect(); // Collection vide par défaut
        if ($selectedSeason !== null) {
            $schedules = Schedule::where('season_id', $selectedSeason)->get();
        }

        return view('schedule.index', compact('schedules', 'seasons', 'selectedSeason'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seasons = Season::all();
        //SELECT * FROM seasons;

        return view('schedule.create', compact('seasons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    // request contient les données envoyé par le formulaire
    {
        $request->validate([
            'day' => 'required',   //NOT NULL
            'opening_am' => 'nullable',
            'closing_am' => 'nullable',
            'opening_pm' => 'nullable',
            'closing_pm' => 'nullable',
            'season' => 'required'
        ]);

        $schedule = new Schedule; // objet schedule de type model
        $schedule->day = $request->day;
        //Affecte la valeur du champ 'day' du formulaire
        // à la propriété 'day' du modèle Schedule
        $schedule->opening_am = $request->opening_am;

        $schedule->closing_am = $request->closing_am;
        $schedule->opening_pm = $request->opening_pm;
        $schedule->closing_pm = $request->closing_pm;
        $schedule->season_id = $request->season_id;
        //relie cet horaire à une saison


        $schedule->save();

        return redirect()->route('schedule.index');
    }
   /* INSERT INTO schedules (day, opening_am, closing_am, opening_pm, closing_pm, season_id)
    VALUES (
        * 'valeur_de_request_day',
        * 'valeur_de_request_opening_am',
        * 'valeur_de_request_closing_am',
        *'valeur_de_request_opening_pm',
        *'valeur_de_request_closing_pm',
        *'valeur_de_request_season_id'
    );*/

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {

        return view('schedule.edit', compact('schedule', ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule) {
      //  Cette méthode accepte deux paramètres : $requestcontient les données soumises
            //par le formulaire) et $schedule (qui est un objet de modèle schedule représentant
            //  l'enregistrement dans la base de données que l'on souhaite mettre à jour).

        // Valide les données entrées par l'utilisateur
        $request->validate([
            'day' => 'required',
            'opening_am' => 'nullable',
            'closing_am' => 'nullable',
            'opening_pm' => 'nullable',
            'closing_pm' => 'nullable',

        ]);

        // Met à jour les valeurs du modèle seulement si les validations passent
        $schedule->day = $request->day;
        $schedule->opening_am = $request->opening_am;
        $schedule->closing_am = $request->closing_am;
        $schedule->opening_pm = $request->opening_pm;
        $schedule->closing_pm = $request->closing_pm;

        // Utilisez la méthode save() pour enregistrer les modifications
        $schedule->save();

        return redirect()->route('schedule.index');
    }

   /* UPDATE schedules
    *SET
       * day = 'valeur_de_request_day',
       * opening_am = 'valeur_de_request_opening_am',
       * closing_am = 'valeur_de_request_closing_am',
       * opening_pm = 'valeur_de_request_opening_pm',
       * closing_pm = 'valeur_de_request_closing_pm';
    */






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedule.index');
    }
}
/*DELETE FROM schedules
WHERE id = 'valeur_de_schedule_id';
*/
