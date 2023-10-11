<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([

            HolidaySeeder::class,
            SeasonSeeder::class,
            ScheduleSeeder::class,
            //PriceSeeder::class,

        ]);
    }
}
