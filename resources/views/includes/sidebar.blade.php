<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
      /* Votre style CSS actuel */
      .sidebar-nav .nav-item.active {
          background-color: #007bff;
          color: #fff;
      }
  </style>
</head>
<body>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed " href="{{ route('avocat') }}">
              <i class="ri-group-line"></i>
              <span>List Avocat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed " href="{{ route('benificiers') }}">
              <i class="ri-group-line"></i>
              <span>List Benificier</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('list-dossiers') }}">
              <i class="ri-list-check"></i>
              <span>List Dossiers</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
              <i class="bi bi-envelope"></i>
              <span>Contact</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
              <i class="bi bi-chat"></i>
              <span>Messages </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
              <i class="bi bi-camera-reels-fill"></i>
              <span>Meetting  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed"  href="{{ route('logout') }}">
              <i class="bi bi-box-arrow-left bi-2x"></i>

              <span>Déconexion </span>
            </a>
          </li>
          
        </ul>
    
      </aside>
      <script>
        // Script pour gérer le changement d'état au clic
        document.addEventListener('DOMContentLoaded', function () {
            var sidebarNav = document.getElementById('sidebar-nav');
            var navItems = sidebarNav.getElementsByClassName('nav-item');

            for (var i = 0; i < navItems.length; i++) {
                navItems[i].addEventListener('click', function () {
                    // Supprimer la classe 'active' de tous les éléments
                    for (var j = 0; j < navItems.length; j++) {
                        navItems[j].classList.remove('active');
                        // Retirer la classe 'collapsed' de tous les éléments
                        navItems[j].classList.remove('collapsed');
                    }

                    // Ajouter la classe 'active' à l'élément cliqué
                    this.classList.add('active');
                    // Ajouter la classe 'collapsed' à l'élément cliqué
                    this.classList.add('collapsed');
                });
            }
        });
    </script>
</body>
</html>