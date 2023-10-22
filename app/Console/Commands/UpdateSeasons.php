<?php

namespace App\Console\Commands;

use App\Models\Season;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class UpdateSeasons extends Command
{
    protected $signature = 'seasons:update';//commande php artisan season: update
    protected $description = 'Mise à jour automatique des saisons chaque année';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Récupérez toutes les saisons actuelles
        $currentSeasons = Season::all();

        foreach ($currentSeasons as $season) {
            // Mise à jour des dates pour la nouvelle année
            $season->date_début = Carbon::parse($season->date_début)->addYear();
            $season->date_fin = Carbon::parse($season->date_fin)->addYear();
            $season->save();
        }

        $this->info('Saisons mises à jour avec succès !');
    }
}
