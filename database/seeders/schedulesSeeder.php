<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class schedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Lundi ::create([
           " heure d'ouverture"=>'9h',
           " heure de fermeture"=>'12h',
        ]);

        Mardi ::create([
            " heure d'ouverture"=>'9h',
            " heure de fermeture"=>'19h',
         ]);

         mercredi ::create([
            " heure d'ouverture"=>'9h',
            " heure de fermeture"=>'12h',
         ]);
    }
}
