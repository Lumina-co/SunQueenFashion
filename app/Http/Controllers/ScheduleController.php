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

        $seasons = Season::all(); // requête Eloquent qui récupère toute la table des saisons
        $selectedSeason = request()->input('season'); // Récupérez la saison sélectionnée par l'utilisateur depuis l'input



        //vérifie d'abord  si l'utilisateur n'a pas choisi de saison,alors récupère la saison actuelle
        if ($selectedSeason === null) {
            $selectedSeason = Season::where('date_début', '<=', now())
                ->where('date_fin', '>=', now())
                ->first()->id;
        }

        /**
          * récupère tous les horaires associés à la saison sélectionnée (soit celle choisie par l'utilisateur,
          * soit la saison actuelle si aucune sélection n'a été faite).
        */
        $schedules = Schedule::where('season_id', $selectedSeason)->get();

        //................requête SQL....................................
        /**
         *  -- Sélectionnez toutes les saisons depuis la table des saisons
        *SELECT * FROM seasons;

         *   -- Récupérez l'ID de la saison sélectionnée depuis la requête (par exemple, 'selectedSeasonID')
         *  SET @selectedSeasonID = ...; -- Remplacez ceci par la valeur réelle récupérée depuis la requête

         * -- Si une saison est sélectionnée
         *IF @selectedSeasonID IS NOT NULL THEN
         *   -- Sélectionnez tous les horaires correspondant à l'ID de la saison sélectionnée
         *  SELECT * FROM schedules WHERE season_id = @selectedSeasonID;
         *  ELSE
         *  -- Si aucune saison n'est sélectionnée, affichez tous les horaires
         * SELECT * FROM schedules;
         *END IF;
         */


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
