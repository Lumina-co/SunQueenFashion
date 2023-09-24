<?php

namespace Database\Seeders;

use App\Models\holidays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class holidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        holidays::create([
            'date_début'=>'2023-12-23',
            'date_fin'=>'2024-01-02',
            'description'=>"fêtes de fin d'année"
        ]);
    }
}
