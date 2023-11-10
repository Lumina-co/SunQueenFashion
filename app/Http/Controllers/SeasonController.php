<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seasons = Season::all();// dans la variable theme ce trouve les resultats de ma requete

        return view('season.index', compact('seasons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('season.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)// fonction la ou il y a la requete pour la bd
    {
        $request->validate([
            'nom' => 'required',
            'date_début' => 'required',
            'date_fin' => 'required',
        ]);

            $season = new season;// objet season de type model
            $season->nom = $request->nom;
            $season->date_début = $request->date_début; // champs de l'objet
            // prend le champs nom dans le formulaire et l'assigne dans la variable season
            $season->date_fin = $request->date_fin;


            $season->save();

            return redirect()->route('season.index');
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
    public function edit(season $season)
    {
        return view('season.edit', compact('season'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, season $season)
    {
        // Validez les données entrées par l'utilisateur
        $request->validate([
            'nom' => 'required',
            'date_début' => 'required',
            'date_fin' => 'required',
        ]);

         // Met à jour les valeurs du modèle seulement si les validations passent
        $season->nom = $request->nom;
        $season->date_début = $request->date_début;
        $season->date_fin = $request->date_fin;

         // Utilisez la méthode save() pour enregistrer les modifications
        $season->save();

        return redirect()->route('season.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(season $season)
    {
        $season->delete();

        return redirect()->route('season.index');
    }
    }
