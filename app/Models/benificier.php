<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class benificier extends Model
{
    protected $fillable = [
        'nomB',
        'prenomB',
        'villeB',
    ];
    use HasFactory;
}
