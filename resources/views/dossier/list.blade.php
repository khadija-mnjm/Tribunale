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
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}"rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css" rel="stylesheet')}} ">
</head>
<body>
    <header>
        @include('includes.header')
        @include('includes.sidebar')
        
    </header>
    <footer>
        <main id="main" class="main">
          <h5 class="titredesign">
             <span >Ministère de la Justice,</span><br/>Enregistre les sommes dues aux avocats commis <br/>d'office dans le cadre  de l'aide judiciaire, qui sont 
             <br/>détenues par le donneur d'ordre du déboursement des assistants.
            </h5>
            <div class="pagetitle">
                <div class="text-center mt-3">
                  <a href="{{ route('add') }}" class="btn btn-success">
                     Ajouter Dossier
                  </a></div>
                 
            </div>
            
            <div class="container1">
            
      <div class="row">
        <div class="col-lg-12">

          <div class="card2">
            <div class="card-body1">
              <h5 class="card-title">Listes des Dossiers</h5>
              
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>umero 
                    </th>
                    <th>nom Avocat</th>
                    <th data-type="date" data-format="YYYY/DD/MM">date</th>
                    <th>RefJuridique</th>
                    <th>RefDecission</th>
                    <th>Tribunale </th>
                    <th>Prix</th>
                    <th>Benificier</th>
                    <th>Validate</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dossiers as $dossier)
                      <tr>
                          <td>{{ $dossier->numeroD }}</td>
                          <td>{{ $dossier->avocat->nomV }}</td>
                          <td>{{ $dossier->dateDossier }}</td>
                          <td>{{ $dossier->refJuridique }}</td>
                          <td>{{ $dossier->refDecision }}</td>
                          <td>{{ $dossier->tribunale->typeTribunale }}</td>
                          <td>{{ $dossier->prix }}</td>
                          <td>{{ $dossier->benificier->nomB }} {{ $dossier->benificier->prenomB }}</td>
                          <td>{{ $dossier->validate }}
                            <a href="{{ route('dossier.show', $dossier->id) }}" class="btn btn-sm " title="Afficher les détails">
                              <i class="bi bi-eye" style="font-size: 20px; color: blue;"></i>

                          </a>
                          </td>
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