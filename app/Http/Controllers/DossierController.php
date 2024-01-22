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
        $dossiers = dossier::with('avocat','tribunale')->get();
        //dd($dossiers->toArray());
        return view('dossier.list', ['dossiers' => $dossiers]);    
     }
   
    public function addDossier()
    {
        return view('dossier.add');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'numeroD' => 'required|numeric',
            'avocat_id' => 'required|exists:avocats,id',
            'commission' => 'required|string',
            'dateDossier' => 'required|date',
            'refJuridique' => 'required|string',
            'refDecision' => 'required|string',
            'tribunale_id' => 'required|exists:tribunales,id',
            'benificier_id' => 'required|exists:benificiers,id',
            'dateAideJustice' => 'required|date',
            'prix' => 'required|numeric',
            'validate' => 'required|boolean',
            'refPerfermance' => 'required|string',
            'refEngagement' => 'required|string',
            'refEditions' => 'required|string',
            'date_ds_aide_etat' => 'required|date',
        ]);

        try {
            $validatedData['validate'] = false; 
            Dossier::create($validatedData);
        
            return redirect()->route('dashboard')->with('success', 'Dossier added successfully');
        } catch (\Exception $e) {
            return redirect()->route('submit.form')->with('error', 'Error adding dossier. Please try again.');
        }
    }
    public function show(dossier $dossier)
    {
        return view('dossier.show', compact('dossier'));
    }
    

    
}
