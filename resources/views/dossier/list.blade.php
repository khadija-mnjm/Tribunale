<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing head content) ... -->

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>

    <!-- Include DataTables Date Range Search Plugin -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

    <!-- Include Moment.js for date formatting -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

</head>
<body>
  @include('includes.layoute')
  @section('content')
  <footer>
      <main id="main" class="main"><h5 class="titredesign">
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
         
          <form id="searchForm">
              <div class="form-row">
                  <div class="col-md-4 mb-3">
                      <label for="startDate">Date Début</label>
                      <input type="date" class="form-control" id="startDate" name="startDate">
                  </div>
                  <div class="col-md-4 mb-3">
                      <label for="endDate">Date Fin</label>
                      <input type="date" class="form-control" id="endDate" name="endDate">
                  </div>
                  <div class="col-md-4 mb-3">
                      <label>&nbsp;</label>
                      <button type="button" class="btn btn-primary" onclick="searchDossiers()">Rechercher</button>
                  </div>
              </div>
          </form>


          <table class="table datatable" id="dataTable">
              <thead>
                  <tr>
                      <th><b>Numéro</b></th>
                      <th>Nom Avocat</th>
                      <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                      <th>Réf. Juridique</th>
                      <th>Réf. Décision</th>
                      <th>Tribunal</th>
                      <th>Prix</th>
                      <th>Bénéficiaire</th>
                      <th>Validation</th>
                      <th>Actions</th> <!-- Add a new column for actions -->
                  </tr>
              </thead>
              <tbody>
                  <!-- Your existing foreach loop for displaying data -->
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
                          <td>{{ $dossier->validate }}</td>
                          <td>
                              <a href="{{ route('dossier.show', $dossier->id) }}" class="btn btn-sm " title="Afficher les détails">
                                  <i class="bi bi-eye" style="font-size: 20px; color: blue;"></i>
                              </a>
                              
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          </div>
          </main>
          </div>
          </div>
          
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize DataTable with Date Range Search Plugin
        var dataTable = $('#dataTable').DataTable({
            dom: '<"datatable-pagination"lBf>t<"datatable-pagination"ip>',
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    }
                },
                'print'
            ],
            columnDefs: [
                {
                    targets: 2, // index of the date column in your table
                    type: 'datetime',
                    render: function (data) {
                        return moment(data).format('YYYY/MM/DD'); // adjust the date format if needed
                    }
                }
            ],
            order: [[2, 'desc']], // default order by the date column
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/French.json', // Use the correct version and path for your DataTables version
            },
            lengthMenu: [5, 10, 15], // Set the options for rows per page
            pageLength: 5, // Set the default number of rows per page
            pagingType: 'full_numbers', // Use full pagination control
            // Add icons for "previous" and "next"
            language: {
                paginate: {
                    first: '<i class="fas fa-angle-double-left"></i>',
                    previous: '<i class="fas fa-angle-left"></i>',
                    next: '<i class="fas fa-angle-right"></i>',
                    last: '<i class="fas fa-angle-double-right"></i>'
                }
            },
        });

        // Function to perform date range search
        window.searchDossiers = function() {
            var startDate = $('#startDate').val();
            var endDate = $('#endDate').val();

            // Perform search and redraw the table
            dataTable.columns(2).search(startDate + ' to ' + endDate).draw();
        };
    });
</script>
</body>
</html>