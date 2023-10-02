<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
    // Exécutez la commande le 31 décembre à minuit
    $schedule->command('app:update-year')
             ->cron('0 0 31 12 ');
              // Minute: 55, Heure: 13, Jour du mois: 30, Mois: 9

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
