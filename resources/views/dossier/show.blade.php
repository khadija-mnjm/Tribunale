<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        @include('includes.header')
        @include('includes.sidebar')
        
    </header>
    <footer>
        <h2>Détails du Dossier {{ $dossier->numeroD }} </h2>
        <div>
            <table class="table table-bordered mt-5 ml-4">
                <tbody>
                    <tr>
                        <th scope="row"> date de dossier </th>
                        <td>{{ $dossier->dateDossier }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nom D'Avocat</th>
                        <td>{{ $dossier->avocat_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Prix</th>
                        <td>{{ $dossier->prix }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Reference Juridique</th>
                        <td>{{ $dossier->refJuridique }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Refernece de Decision</th>
                        <td>{{ $dossier->refDecision }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Type de tribunale</th>
                        <td>{{ $dossier->tribunale_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nom de Benificier</th>
                        <td>{{ $dossier->benificier_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">validate</th>
                        <td>{{ $dossier->validate }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Reference de Perfermance</th>
                        <td>{{ $dossier->refPerfermance }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Reference d'Engagement</th>
                        <td>{{ $dossier->refEngagement }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Rference d'Editions</th>
                        <td>{{ $dossier->refEditions }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>Dossier 2</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('list-dossiers') }}" class="btn btn-secondary mb-6 custom-btn">Retour à la liste</a>
    </div>
    </footer>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="path/to/explosion-animation.js"></script>
</body>
</html>