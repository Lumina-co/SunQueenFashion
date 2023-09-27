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
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Mecredi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('17:00'),
            'season_id'=> 1
        ]);

        Schedule::create([
            'jour'=>'Lundi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id' => 4
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'opening_am'=>('9:00'),
            'closing_am'=>('12:00'),
            'opening_pm'=>('14:00'),
            'closing_pm'=>('17:00'),
            'season_id'=> 4
        ]);

        Schedule::create([
            'jour'=>'Lundi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id' => 2
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('17:00'),
            'season_id'=> 2
        ]);

        Schedule::create([
            'jour'=>'Lundi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Mardi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id' => 3
        ]);

        Schedule::create([
            'jour'=>'Mercredi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Jeudi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Vendredi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('19:00'),
            'season_id'=> 3
        ]);

        Schedule::create([
            'jour'=>'Samedi',
            'opening_am'=>('9:00'),
            'closing_pm'=>('17:00'),
            'season_id'=> 3
        ]);
    }
}
