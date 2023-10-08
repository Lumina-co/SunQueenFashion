<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Season::create([
            'nom' => 'Hiver',
            'date_début' => Carbon::createFromDate(2023, 12, 22),
            'date_fin' => Carbon::createFromDate(2024, 3, 20)
        ]);
        Season::create([
            'nom' => 'Printemps',
            'date_début' => Carbon::createFromDate(2023, 3, 21),
            'date_fin' => Carbon::createFromDate(2023, 6, 20)
        ]);
        Season::create([
            'nom' => 'Été',
            'date_début' => Carbon::createFromDate(2023, 6, 21),
            'date_fin' => Carbon::createFromDate(2023, 9, 21)
        ]);
        Season::create([
            'nom' => 'Automne',
            'date_début' => Carbon::createFromDate(2023, 9, 22),
            'date_fin' => Carbon::createFromDate(2023, 12, 21)
        ]);
    }
}
