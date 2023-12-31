<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Season;
use App\Models\Price;
use App\Models\Holiday;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $season = Season::where('date_début', '<=', now())->where('date_fin', '>=', now())->first();
        /**
         * SELECT *
         * FROM seasons
         * WHERE date_début <= $now
         * AND WHERE date_fin >= $now
         * LIMIT 1;
         *
         *  Cette requête SQL sélectionne la première saison dont la date de début est antérieure ou égale à $now
         *  et dont la date de fin est postérieure ou $now.
         * LIMIT 1 garantit qu'une seule ligne sera renvoyée,
         *  correspondant à la première saison qui remplit ces conditions.
         */

        $schedules = Schedule::where('season_id', $season->id)->get();
        $prices = Price::all(); //définition de la variable prices
        $holiday = Holiday::latest()->first();

        return view('sqf.accueil', compact('schedules', 'season', 'prices', 'holiday'));
    }

    public function conditions()// appel la vue
    {
        return view('sqf.CGU');
    }

    public function mentions()// appel la vue
    {
        return view('sqf.mentions');
    }
}
