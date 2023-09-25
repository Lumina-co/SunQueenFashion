<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::all();// dans la variable theme ce trouve les resultats de ma requete

        return view('schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)// fonction la ou il y a la requete pour la bd
    {
        $request->validate([
            'jour' => 'required',
            'heure_ouverture_am' => 'required',
            'heure_fermeture_am' => 'required',
            'heure_ouverture_pm' => 'required',
            'heure_fermeture_pm' => 'required',
        ]);

            $schedule = new Schedule;// objet schedule de type model
            $schedule->jour = $request->jour;
            $schedule->heure_ouverture_am = $request->heure_ouverture_am; // champs de l'objet
            // prend le champs nom dans le formulaire et l'assigne dans la variable schedule
            $schedule->heure_fermeture_am = $request->heure_fermeture_am;
            $schedule->heure_ouverture_pm = $request->heure_ouverture_pm;
            $schedule->heure_fermeture_pm = $request->heure_fermeture_pm;


              // Vérifiez la saison sélectionnée dans le formulaire
            if($request->season_id == '1') {// on vérifie si le status est coché on alors on assigne 1 àla propriété season de l'objet schedule
                $schedule->season_id = 1;
            }

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
        return view('schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        // Validez les données entrées par l'utilisateur
        $request->validate([
            'jour' => 'required',
            'heure_ouverture_am' => 'required',
            'heure_fermeture_am' => 'required',
            'heure_ouverture_pm' => 'required',
            'heure_fermeture_pm' => 'required',
        ]);

         // Mettez à jour les valeurs du modèle seulement si les validations passent
        $schedule->jour = $request->jour;
        $schedule->heure_ouverture_am = $request->heure_ouverture_am;
        $schedule->heure_fermeture_am = $request->heure_fermeture_am;
        $schedule->heure_ouverture_pm = $request->heure_ouverture_pm;
        $schedule->heure_fermeture_pm = $request->heure_fermeture_pm;

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


