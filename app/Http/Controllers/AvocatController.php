<?php

namespace App\Http\Controllers;
use App\Models\avocat;
use Illuminate\Http\Request;

class AvocatController extends Controller
{
    public function index()
    { 
       $avocats = avocat::all();
       return view('avocat.list', ['avocats' => $avocats]);    
    }
    public function ajouterAvocat()
    {
       return view('avocat.add');
    }
    public function store(Request $request)
        {
            $validatedData = $request->validate([
                'nomV' => 'required|string|max:255',
                'villeV' => 'required|string|max:255',
                'adresseV' => 'required|string|max:255',
            ]);
            avocat::create($validatedData);

            return redirect()->route('avocat')->with('success', 'avocat added successfully!');
        }
   
    
}
