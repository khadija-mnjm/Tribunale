<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Include DataTables CSS and JS -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"/>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css"/>
     
     <!-- Include Simple DataTables CSS and JS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@2.6.2/dist/style.css">
     <script src="https://cdn.jsdelivr.net/npm/simple-datatables@2.6.2/dist/simple-datatables.js"></script>
 
     <!-- Include Moment.js for date formatting -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
 
     <!-- Export Buttons JS -->
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</head>
<body>
    @include('includes.layoute')
    @section('content')
    <footer>
        <div class="container2">
            <main id="main" class="main">
                <div class="pagetitle1">
                    <div class="text-center mt-3">
                        <a href="{{ route('ajouteravocat') }}" class="btnadd">
                            Ajouter un avocat
                        </a>
                    </div>
                </div>
                <div class="container1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card2">
                                <div class="card-body1">
                                    <h5 class="card-title">Listes des benificiers</h5>
                                   
                                    <table class="table datatable" id="benificiersTable">
                                        <thead>
                                            <tr>
                                                <th><b>N</b>umero</th>
                                                <th>Nom</th>
                                                <th>ville d'avocact</th>
                                                <th>Adresse </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($avocats as $avocat)
                                                <tr>
                                                    <td>{{ $avocat->id }}</td>
                                                    <td>{{ $avocat->nomV }}</td>
                                                    <td>{{ $avocat->villeV }}</td>
                                                    <td>{{ $avocat->adresseV }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </footer>
</body>
</html>
