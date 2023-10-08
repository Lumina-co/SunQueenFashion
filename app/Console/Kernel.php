<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Season;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        // Exécutez la commande la dernière date de la saison d'hiver
        $season = Season::where('nom', 'Hiver')->first();
        $month = Carbon::parse($season->date_fin)->format('m');
        $day = Carbon::parse($season->date_fin)->format('d');
        $schedule->command('seasons:update')->yearlyOn($month, $day, '23:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
