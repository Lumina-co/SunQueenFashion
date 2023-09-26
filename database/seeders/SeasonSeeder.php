<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Season::create([
            'nom' => 'Hivers',
            'date_début' => '2023-12-22',
            'date_fin' => "2023-03-19"
        ]);
        Season::create([
            'nom' => 'Printemps',
            'date_début' => '2023-03-20',
            'date_fin' => "2023-06-19"
        ]);
        Season::create([
            'nom' => 'Eté',
            'date_début' => '2023-06-20',
            'date_fin' => "2023-09-21"
        ]);
        Season::create([
            'nom' => 'Automne',
            'date_début' => '2023-09-22',
            'date_fin' => "2023-12-21"
        ]);
    }
}
