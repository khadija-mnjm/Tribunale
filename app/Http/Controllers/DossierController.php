<?php

namespace App\Http\Controllers;

use App\Models\dossier;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listDossiers()
    {
        
        return view('dossier.list');
    }
    public function addDossier()
    {
        return view('dossier.add');
    }

    
}
