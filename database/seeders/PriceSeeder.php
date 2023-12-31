<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price ::create([
            'minutes'=> 5,
            'prix'=> 4.00
        ]);
        Price ::create([
            'minutes'=> 10,
            'prix'=> 8.00
        ]);
        Price ::create([
            'minutes'=> 15,
            'prix'=> 12.00
        ]);

       Price ::create([
            'minutes'=> 20,
            'prix'=> 16.00
        ]);
    }
}
