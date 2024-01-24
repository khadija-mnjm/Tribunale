<!-- resources/views/add.blade.php -->

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

    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        @include('includes.header')
        @include('includes.sidebar')
    </header>
    <footer>
        <main id="main" class="main">
            <div class="pagetitle1">
                <div class="cardadd">
                    <div class="card-bodyadd">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h5 class="card-title">Saisir les informations d'avocat :</h5>
                        
                        <form class="row g-3" action="{{ route('avocat.store') }}" method="post">
                            @csrf
                            <div class="col-12">
                                <input type="text" class="form-control" name="nomV" placeholder="Nom d'avocat" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="villeV" placeholder="Ville d'avocat " required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="adresseV" placeholder="Adresse du bureau " required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Ajouter avocat</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </footer>
</body>
</html>
