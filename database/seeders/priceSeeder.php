<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class priceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Price ::create([
            'minutes'=>'10',
            'prix'=>'12'
        ]);
    }
}
