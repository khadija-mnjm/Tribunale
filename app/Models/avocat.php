<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avocat extends Model
{
    protected $fillable = ['nomV','villeV','adresseV'];
    use HasFactory;
}
