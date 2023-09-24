<?php

namespace App\Http\Controllers;

use App\Models\holidays;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $holidayss = holidays::all();// dans la variable theme ce trouve les resultats de ma requete

            return view('holidays.index', compact('holidayss'));
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

                $holidays = new holidays;// objet holidays de type model
                $holidays->date_début = $request->date_début;
                $holidays->date_fin = $request->date_fin; // champs de l'objet
                // prend le champs nom dans le formulaire et l'assigne dans la variable holidays
                $holidays->description = $request->description;


                $holidays->save();

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
        public function edit(holidays $holidays)
        {
            return view('holidays.edit', compact('holidays'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, holidays $holidays)
        {
            // Validez les données entrées par l'utilisateur
            $request->validate([
                'date_début' => 'required',
                'date_fin' => 'required',
                'description' => 'required',
            ]);

             // Mettez à jour les valeurs du modèle seulement si les validations passent
             $holidays->date_début = $request->date_début;
             $holidays->date_fin = $request->date_fin;
             $holidays->description = $request->description;

             // Utilisez la méthode save() pour enregistrer les modifications
            $holidays->save();

            return redirect()->route('holidays.index');
        }



        /**
         * Remove the specified resource from storage.
         */
        public function destroy(holidays $holidays)
        {
            $holidays->delete();

            return redirect()->route('holidays.index');
        }
}
