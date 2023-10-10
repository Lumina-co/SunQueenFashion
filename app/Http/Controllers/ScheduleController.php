<?php

namespace App\Http\Controllers;

use App\Models\Price;
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
        $schedules = Schedule::all(); // selectionne toutes les horaires depuis la table schedule
        $prices = Price::all(); // dans la variable prix ce trouve les resultats de ma requête (tous les prix de la table prix)

        $seasons = Season::all();
        $selectedSeason = request()->input('season', ''); // Récupérez la saison sélectionnée depuis la requête

        if (!empty($selectedSeason)) {
            // Si une saison est sélectionnée, récupérer les horaires correspondants
            $schedules = Schedule::where('season_id', $selectedSeason)->get();
        } else {
            // Si aucune saison n'est sélectionnée, affichez tous les horaires
            $schedules = Schedule::all();
        }
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
            *ELSE
              *  -- Si aucune saison n'est sélectionnée, affichez tous les horaires
               * SELECT * FROM schedules;
            *END IF;
             */


        return view('schedule.index', compact('schedules', 'seasons', 'selectedSeason', 'prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $season = Season::all();
        //SELECT * FROM seasons;

        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // la fonction a 2 parametre : objet de type model et la variable définie
    {
        $request->validate([
            'jour' => 'required',
            'opening_am' => 'required', //NOT NULL
            'closing_am' => 'required',
            'opening_pm' => 'required',
            'closing_pm' => 'required',
        ]);

        $schedule = new Schedule; // objet schedule de type model
        $schedule->jour = $request->jour;
        $schedule->opening_am = $request->opening_am; // champs de l'objet
        // prend le champs nom dans le formulaire et l'assigne dans la variable schedule
        $schedule->closing_am = $request->closing_am;
        $schedule->opening_pm = $request->opening_pm;
        $schedule->closing_pm = $request->closing_pm;


        $schedule->save();

        return redirect()->route('schedule.index');
    }

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
    public function update(Request $request, Schedule $schedule)
    {
        // Validez les données entrées par l'utilisateur
        $request->validate([
            'jour' => 'required',
            'opening_am' => 'required',
            'closing_am' => 'required',
            'opening_pm' => 'required',
            'closing_pm' => 'required',
        ]);

        // Mettez à jour les valeurs du modèle seulement si les validations passent
        $schedule->jour = $request->jour;
        $schedule->opening_am = $request->opening_am;
        $schedule->closing_am = $request->closing_am;
        $schedule->opening_pm = $request->opening_pm;
        $schedule->closing_pm = $request->closing_pm;

        // Utilisez la méthode save() pour enregistrer les modifications
        $schedule->save();

        return redirect()->route('schedule.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedule.index');
    }
}
