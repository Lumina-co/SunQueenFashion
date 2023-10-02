<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateYear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-year';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mise à jour de l\'année dans la base de données';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Récupérez l'année actuelle
        $currentYear = now()->year;

        // Mettez à jour les enregistrements de saison dans la base de données
        Season::whereYear('date_début', $currentYear)
            ->orWhereYear('date_fin', $currentYear)
            ->update([
                'date_début' => DB::raw("DATE_ADD(date_début, INTERVAL 1 YEAR)"),
                'date_fin' => DB::raw("DATE_ADD(date_fin, INTERVAL 1 YEAR)"),
            ]);

        $this->info('Année mise à jour avec succès !');
    }
}

