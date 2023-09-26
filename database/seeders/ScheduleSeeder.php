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
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Mecredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('17:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Lundi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id' => 4
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_am'=>('12:00'),
            'heure_ouverture_pm'=>('14:00'),
            'heure_fermeture_pm'=>('17:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Lundi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id' => 2
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('17:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Lundi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id' => 3
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'heure_ouverture_am'=>('9:00'),
            'heure_fermeture_pm'=>('17:00'),
            'season_id'=> 3
        ]);
    }
}
