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
            'heure_ouverture' => 'required',
            'heure_fermeture' => 'required',
        ]);

            $schedule = new Schedule;// objet schedule de type model
            $schedule->jour = $request->jour;
            $schedule->heure_ouverture = $request->heure_ouverture; // champs de l'objet
            // prend le champs nom dans le formulaire et l'assigne dans la variable schedule
            $schedule->heure_fermeture = $request->heure_fermeture;

              // Vérifiez la saison sélectionnée dans le formulaire
            if($request->status == 'on') {// on vérifie si le status est coché on alors on assigne 1 àla propriété status de l'objet theme
                $schedule->status = 1;
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
            'heure_ouverture' => 'required',
            'heure_fermeture' => 'required',
        ]);

         // Mettez à jour les valeurs du modèle seulement si les validations passent
        $schedule->jour = $request->jour;
        $schedule->heure_ouverture = $request->heure_ouverture;
        $schedule->heure_fermeture = $request->heure_fermeture;

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


