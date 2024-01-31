<!-- resources/views/Electrique/selection-annee-mois.blade.php -->

@extends('Electrique.layoute1')

@section('content')
    <main id="main" class="main">
        <div class="container">
            <h2>Sélection d'Année et Mois</h2>

            <form>
                @csrf

                <label for="annee">Année :</label>
                <select name="annee" id="annee">
                    @foreach ($annees as $annee)
                        <option value="{{ $annee }}">{{ $annee }}</option>
                    @endforeach
                </select>

                <label for="mois">Mois :</label>
                <select name="mois" id="mois" disabled>
                    <!-- Options des mois seront ajoutées via Ajax -->
                </select>

                <br>
            </form>
        </div>
    </main>

    <script>
        // JavaScript pour gérer la logique côté client
        $(document).ready(function() {
            // Attacher un gestionnaire d'événements à la modification de la sélection de l'année
            $("#annee").change(function() {
                chargerMois();
            });
        });

        function chargerMois() {
            var anneeSelectionnee = $("#annee").val();

            // Envoyer une requête Ajax pour obtenir les mois associés à l'année
            $.ajax({
                type: "GET",
                url: "/obtenir-mois/" + anneeSelectionnee,
                success: function (data) {
                    $("#mois").html(data);
                    $("#mois").prop('disabled', false);
                },
                error: function (xhr, status, error) {
                    console.error("Une erreur s'est produite lors de la récupération des mois:", error);
                }
            });
        }
    </script>
@endsection
