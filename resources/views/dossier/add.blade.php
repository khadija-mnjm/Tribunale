@php
    use App\Models\avocat;
    use App\Models\benificier;
    use App\Models\tribunale;


    $avocats = Avocat::pluck('nomV', 'id');
    $benificiers = Benificier::pluck('nomB', 'id');
    $tribunales = Tribunale::pluck('nomT', 'id');


@endphp
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
    <script>
      $(function() {
    $('input[name="avocat_id"]').autocomplete({
        source: {!! json_encode($avocats->toArray()) !!}
    });
});
$(function() {
    $('input[name="benificier_id"]').autocomplete({
        source: {!! json_encode($benificiers->toArray()) !!}
    });
});
    </script>
</head>
<body>
  @include('includes.layoute')
  @section('content')
    <footer>
        <main id="main" class="main">
        <div class="pagetitle1">
        <div class="cardadd">
            <div class="card-bodyadd">
                <h5 class="card-title">Saiser les informations de dossiers :</h5>
                
                
                <form class="row g-3" action="{{ route('store') }}" method="POST">
                  @csrf
                  <div class="col-md-6">
                    <label>nom d'avocat :</label>
                    <input type="text" name="avocat_id" class="form-control" list="avocats-list" autocomplete="off">
<datalist id="avocats-list">
    @foreach($avocats as $id => $nomV)
        <option name="avocat_id" value="{{ $id }}">{{$nomV}}</option>
    @endforeach
</datalist>
                  </div>
                  <div class="col-md-6">
                    <label>Nom de benificier :</label>
                    <input type="text" name="benificier_id" class="form-control" list="beneficiaires-list" autocomplete="off">
<datalist name="benificier_id" id="beneficiaires-list">
    @foreach($benificiers as $id => $nomB)
        <option name="benificier_id" value="{{ $id }}">{{ $nomB }}</option>
    @endforeach
</datalist>
                  </div>
                  
                  <div class="col-md-12">
                    <label>Reference Juridique :</label>
                    <input type="text" name="refJuridique" class="form-control" placeholder="Reference Juridique ">
                  </div>
                  <div class="col-12">
                    <label>Reference Désicions :</label>
                    <input type="text" name="refDecision" class="form-control" placeholder="Reference Désicions ">
                  </div>
                  <div class="col-md-6">
                    <label>Date Aide Justice :</label>
                    <input type="date" name="dateAideJustice" class="form-control" placeholder="Date Aide Justice">
                  </div>
                  <div class="col-md-6">
                    <label>prix :</label>
                    <input type="number" name="prix" class="form-control" placeholder="Prix">
                  </div>
                  <div class="col-md-8">
                    <label>tribunale :</label>
                    <select name="tribunale_id" class="form-select">
                      @foreach($tribunales as $id => $nomT)
                          <option  value="{{ $id }}">{{ $nomT }}</option>
                      @endforeach
                  </select>
                  </div>
                  <div class="col-md-4">
                    <label >valider :</label>
                    <select id="inputState" name="validate" class="form-select">
                      <option selected>Choisir la validations</option>
                      <option value='oui'>Oui</option>
                      <option value='non'>Non</option>
                    </select>
                  </div>
                  
                 
                  <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- End No Labels Form -->
        
              </div>
            </div>
    </footer>
  
</body>
</html>