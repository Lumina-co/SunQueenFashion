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
            'nom'=>'horaires_été',
            'date_début'=>'2023-04-02',
            'date_fin'=>"2023-09-14"
        ]);

        Season::create([
            'nom'=>'horaires_hivers',
            'date_début'=>'2023-09-15',
            'date_fin'=>"2023-04-01"
        ]);
    }
}
