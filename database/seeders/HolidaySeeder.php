<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Holiday;
use Illuminate\Database\Seeder;



class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Holiday::create([
            'date_début'=>'2023-12-23',
            'date_fin'=>'2024-01-02',
            'description'=>"fêtes de fin d'année"
        ]);
    }
}
