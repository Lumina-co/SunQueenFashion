<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::all();

        return view('price.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('price.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'minutes' => 'required',
            'prix' => 'required',
        ]);

            $price = new price;// objet price de type model
            $price->minutes = $request->minutes;
            $price->prix = $request->prix; // champs de l'objet
            // prend le champs nom dans le formulaire et l'assigne dans la variable price

            $price->save();

            return redirect()->route('price.index');
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
    public function edit(Price $price)
    {
        return view ('price.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
          // Validez les données entrées par l'utilisateur
          $request->validate([
            'minutes' => 'required',
            'prix' => 'required',
        ]);

         // Mettez à jour les valeurs du modèle seulement si les validations passent
        $price->minutes = $request->minutes;
        $price->prix = $request->prix;

         // Utilisez la méthode save() pour enregistrer les modifications
        $price->save();

        return redirect()->route('price.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        $price->delete();

        return redirect()->route('price.index');
    }
}
