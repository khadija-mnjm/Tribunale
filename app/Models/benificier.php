<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class benificier extends Model
{
    use HasFactory;
    protected $table = 'benificiers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomB',
        'prenomB',
        'villeB',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
