<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    public function run(): void
    {
        Holiday::create([
            'date_début' => '2025-12-23',
            'date_fin' => '2026-01-02',
            'description' => "Fêtes de fin d'année",
        ]);
    }
}
