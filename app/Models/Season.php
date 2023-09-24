<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable =  ['nom', 'date_début','date_fin'];

    public function schedule()
{
    return $this->hasMany(Schedule::class, 'saison_id');
    // Cette relation indique que chaque saison peut avoir plusieurs horaires associés.
}
}
