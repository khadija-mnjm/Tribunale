<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moyenne;
use Illuminate\Support\Facades\DB; // N'oubliez pas d'importer la classe DB

class MoyenneController extends Controller
{
    public function index()
    {
        $annees = $this->getAllYears(); // Ajoutez cette ligne pour récupérer les années
    
        return view('Electrique.calculer-moyenne', compact('annees'));
    }
    
    private function getAllYears()
    {
        $allDates = DB::table('compteurs')->pluck('date');
        $allYears = [];
    
        foreach ($allDates as $date) {
            $year = \Carbon\Carbon::parse($date)->year;
    
            if (!in_array($year, $allYears)) {
                $allYears[] = $year;
            }
        }
    
        return $allYears;
    }    

    public function calculmoyenneAnnee(Request $request)
    {
        $validatedData = $request->validate([
            'mois' => 'required|in:all,1,2,3,4,5,6,7,8,9,10,11,12',
            'pourcentage' => 'required|numeric|in:0.1,0.3',
        ]);

        $mois = $validatedData['mois'];
        $pourcentage = $validatedData['pourcentage'];

        $moyenne = $this->calculerMoyennePourMois($mois, $pourcentage);

        // Stocker le résultat dans la table "moyennes"
        $this->stockerMoyenneEnBase($mois, $pourcentage, $moyenne);

        return view('calculer-moyenne', [
            'resultat' => [
                'mois' => $mois == 'all' ? 'Tous les mois' : 'Mois ' . $mois,
                'pourcentage' => $pourcentage * 100,
                'moyenne' => $moyenne,
            ],
        ]);
    }

    private function calculerMoyennePourMois($mois, $pourcentage)
    {
        if ($mois === 'all') {
            // Ajoutez ici la logique pour calculer la moyenne pour tous les mois
            $sommeNotes = array_sum(config("notes.$pourcentage"));

            return rand(1, 100);
        }

        // Ajoutez ici la logique pour calculer la moyenne pour un mois spécifique
        return rand(1, 100);
    }

    private function stockerMoyenneEnBase($mois, $pourcentage, $moyenne)
    {
        // Assurez-vous que le modèle Moyenne est bien importé en haut du fichier
        Moyenne::create([
            'mois' => $mois == 'all' ? null : $mois,
            'pourcentage' => $pourcentage,
            'moyenne' => $moyenne,
        ]);
    }

    public function getAllDatesGroupedByYear()
    {
        $allDates = DB::table('compteurs')->pluck('date');
        $groupedDates = [];

        foreach ($allDates as $date) {
            $year = \Carbon\Carbon::parse($date)->year;
            $month = \Carbon\Carbon::parse($date)->format('F');

            if (!isset($groupedDates[$year])) {
                $groupedDates[$year] = [];
            }

            if (!in_array($month, $groupedDates[$year])) {
                $groupedDates[$year][] = $month;
            }
        }

        return $groupedDates;
    }

   
    public function obtenirMois($annee)
    {
        // Remplacez "VotreModel" par le nom réel de votre modèle et "date" par le vrai nom du champ contenant la date
        $mois = compteur::whereYear('date', $annee)->distinct()->orderByRaw('MONTH(date)')->pluck(\DB::raw('MONTHNAME(date) as mois'));

        return response()->json($mois);
    }

}
