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
            'minutes'=>'5',
            'prix'=>'4'
        ]);
        Price ::create([
            'minutes'=>'10',
            'prix'=>'8'
        ]);
        Price ::create([
            'minutes'=>'15',
            'prix'=>'12'
        ]);

       Price ::create([
            'minutes'=>'20',
            'prix'=>'16'
        ]);
    }
}
