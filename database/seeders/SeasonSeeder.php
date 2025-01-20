<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeasonSeeder extends Seeder
{
    public function run(): void
    {
        Season::create([
            'nom' => 'Hiver',
            'date_début' => Carbon::createFromDate(2024, 12, 22), // L'hiver commence en décembre 2024
            'date_fin' => Carbon::createFromDate(2025, 3, 20),    // Et se termine en mars 2025
        ]);
        Season::create([
            'nom' => 'Printemps',
            'date_début' => Carbon::createFromDate(2025, 3, 21),
            'date_fin' => Carbon::createFromDate(2025, 6, 20),
        ]);
        Season::create([
            'nom' => 'Été',
            'date_début' => Carbon::createFromDate(2025, 6, 21),
            'date_fin' => Carbon::createFromDate(2025, 9, 21),
        ]);
        Season::create([
            'nom' => 'Automne',
            'date_début' => Carbon::createFromDate(2025, 9, 22),
            'date_fin' => Carbon::createFromDate(2025, 12, 21),
        ]);
    }
}
