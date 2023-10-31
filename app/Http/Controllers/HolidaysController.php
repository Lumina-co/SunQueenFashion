<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $holidays = Holiday::all();

            return view('holidays.index', compact('holidays'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('holidays.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)// fonction la ou il y a la requete pour la bd
        {
            $request->validate([
                'date_début' => 'required',
                'date_fin' => 'required',
                'description' => 'required',
            ]);

                $holiday = new Holiday;// objet holidays de type model
                $holiday->date_début = $request->date_début;
                $holiday->date_fin = $request->date_fin; // champs de l'objet
                // prend le champs nom dans le formulaire et l'assigne dans la variable holidays
                $holiday->description = $request->description;


                $holiday->save();

                return redirect()->route('holidays.index');
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
        public function edit(Holiday $holiday)
        {
            return view('holidays.edit', compact('holiday'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Holiday $holiday)
        {
            // Validez les données entrées par l'utilisateur
            $request->validate([
                'date_début' => 'required',
                'date_fin' => 'required',
                'description' => 'required',
            ]);

             // Mettez à jour les valeurs du modèle seulement si les validations passent
             $holiday->date_début = $request->date_début;
             $holiday->date_fin = $request->date_fin;
             $holiday->description = $request->description;

             // Utilisez la méthode save() pour enregistrer les modifications
            $holiday->save();

            return redirect()->route('holidays.index');
        }



        /**
         * Remove the specified resource from storage.
         */
        public function destroy(holiday $holiday)
        {
            $holiday->delete();

            return redirect()->route('holidays.index');
        }
}
