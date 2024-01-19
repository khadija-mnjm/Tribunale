<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeroD',
        'avocat_id',
        'commission',
        'dateDossier',
        'refJuridique',
        'refDecision',
        'tribunale_id',
        'benificier_id',
        'dateAideJustice',
        'prix',
        'validate',
        'refPerfermance',
        'refEngagement',
        'refEditions',
        'date_ds_aide_etat',
    ];

    public function avocat()
    {
        return $this->belongsTo(Avocat::class);
    }

    public function tribunale()
    {
        return $this->belongsTo(Tribunale::class);
    }

    public function benificier()
    {
        return $this->belongsTo(Benificier::class);
    }
}
