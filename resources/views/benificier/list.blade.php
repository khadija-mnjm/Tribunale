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
</head>
<body>
    <header>
        @include('includes.header')
        @include('includes.sidebar')
    </header>
    <footer>
        <div class="container2">
            <main id="main" class="main">
                <div class="pagetitle1">
                    <div class="text-center mt-3">
                        <a href="{{ route('ajouterbenificier') }}" class="btnaddbenificier">
                            Ajouter un Benificier
                        </a>
                    </div>
                </div>
                <div class="btnExport">
                    <button id="export-csv" class="btn btn-primary">Export CSV</button>
                    <button id="export-sql" class="btn btn-primary">Export SQL</button>
                    <button id="export-txt" class="btn btn-primary">Export TXT</button>
                    <button id="export-json" class="btn btn-primary">Export JSON</button>
                    <button id="export-custom" class="btn btn-primary">Export Custom CSV</button>
                </div>
                <div class="container1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card2">
                                <div class="card-body1">
                                    <h5 class="card-title">Listes des benificiers</h5>
                                   
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th><b>N</b>umero</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Ville</th>
                                                <!-- Add more columns as needed -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($benificiers as $benificier)
                                                <tr>
                                                    <td>{{ $benificier->id }}</td>
                                                    <td>{{ $benificier->nomB }}</td>
                                                    <td>{{ $benificier->prenomB }}</td>
                                                    <td>{{ $benificier->villeB }}</td>
                                                    <!-- Add more columns as needed -->
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

    <!-- Export Buttons Script -->
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

    <!-- Export Buttons Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const table = new DataTable("#benificiersTable");

            document.getElementById("export-csv").addEventListener("click", () => {
                exportCSV(table, {
                    download: true,
                    lineDelimiter: "\n",
                    columnDelimiter: ";"
                });
            });

            document.getElementById("export-sql").addEventListener("click", () => {
                exportSQL(table, {
                    download: true,
                    tableName: "export_table"
                });
            });

            document.getElementById("export-txt").addEventListener("click", () => {
                exportTXT(table, {
                    download: true
                });
            });

            document.getElementById("export-json").addEventListener("click", () => {
                exportJSON(table, {
                    download: true,
                    space: 3
                });
            });

            document.getElementById("export-custom").addEventListener("click", () => {
                exportCustomCSV(table, {
                    download: true
                });
            });
        });
    </script>
</body>
</html>
