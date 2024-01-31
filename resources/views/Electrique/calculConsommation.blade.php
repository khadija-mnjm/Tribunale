<script src="https://cdn.lordicon.com/lordicon.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofNol+hCv9LXRSe++9dC5u80+6bZ1egUtW" crossorigin="anonymous">

@extends('Electrique.layoute1')

@section('content')
<main id="main" class="main">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcul de Moyenne</title>
    </head>
    <body>

    <h2>Calcul de Moyenne</h2>

    <form action="{{ route('compteurs.calculerMoyenne') }}" method="post">
        @csrf

        <label for="mois">Mois :</label>
        <select name="mois" id="mois">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>

        <label for="pourcentage">Pourcentage :</label>
        <select name="pourcentage" id="pourcentage">
            <option value="0.1">10%</option>
            <option value="0.3">30%</option>
        </select>

        <br>

        <button type="submit">Calculer Moyenne</button>
    </form>

    @if(isset($resultat))
        <div>
            Résultat du calcul :
            <ul>
                <li>Mois sélectionné : {{ $resultat['mois'] }}</li>
                <li>Pourcentage sélectionné : {{ $resultat['pourcentage'] * 100 }}%</li>
                <li>Moyenne calculée : {{ $resultat['moyenne'] }}</li>
            </ul>
        </div>
    @endif

    </body>
    </html>

</main>
