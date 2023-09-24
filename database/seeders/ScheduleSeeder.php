<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'jour'=>'Lundi',
            'heure_ouverture'=>('9:00'),
            'heure_fermeture'=>('19:00')
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'heure_ouverture'=>('9:00'),
            'heure_fermeture'=>('19:00')
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'heure_ouverture'=>('9:00'),
            'heure_fermeture'=>('19:00')
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'heure_ouverture'=>('9:00'),
            'heure_fermeture'=>('19:00')
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'heure_ouverture'=>('9:00'),
            'heure_fermeture'=>('19:00')
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'heure_ouverture'=>('9:00'),
            'heure_fermeture'=>('17:00')
        ]);
    }
}
