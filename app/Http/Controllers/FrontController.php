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

        $schedules = collect();
        if ($season) {
            $schedules = Schedule::where('season_id', $season->id)->get();
        }

        $prices = Price::all();
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
