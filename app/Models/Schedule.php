<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable =  ['day', 'opening_am','closing_am','opening_pm','closing_pm','season_id'];

    public function season()
{
    return $this->belongsTo(Season::class, 'season_id');
    // Cette relation indique que chaque horaire appartient à
    //  une saison spécifique en utilisant la clé étrangère "saison_id"
}

}


