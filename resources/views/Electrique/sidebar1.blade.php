<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
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
    
            <li class="nav-item {{ request()->routeIs('resElectrique.dashbord1') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('resElectrique.dashbord1') }}">
                   <i class="bi bi-grid"></i>
                   <span>Dashboard</span>
                </a>
             </li>
             <li class="nav-item {{ request()->routeIs('avocat') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('compteurs') }}">
                    <lord-icon class="lord-icon"
                    src="https://cdn.lordicon.com/jfwzwlls.json"
                    trigger="hover"
                    style="width:30px;height:30px">
                </lord-icon>
                   <span>gestions de compteurs </span>
                </a>
             </li>
         
         <li class="nav-item ">
            <a class="nav-link collapsed" href="{{ route('compteurslist') }}">
                <lord-icon
                    src="https://cdn.lordicon.com/ijahpotn.json"
                    trigger="hover"
                    style="width:30px;height:30px">
                </lord-icon>
               <span>List Compterurs </span>
            </a>
         </li>
         <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('calcul.consommation') }}">
            <lord-icon
              src="https://cdn.lordicon.com/rkiwwysn.json"
              trigger="hover"
              style="width:30px;height:30px">
          </lord-icon>
            <span>Consomations </span>
          </a>
        </li>
       
         
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('statistique') }}">
              <lord-icon
              src="https://cdn.lordicon.com/abwrkdvl.json"
              trigger="hover"
              style="width:30px;height:30px">
          </lord-icon>
              <span>Statistique</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('compteurs.calculer-moyenneAnnee') }}">
              <lord-icon
                  src="https://cdn.lordicon.com/wzwygmng.json"
                  trigger="hover"
                  style="width:30px;height:30px">
              </lord-icon>
              <span>Moyenne Année</span>
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
       document.addEventListener('DOMContentLoaded', function () {
    var sidebarNav = document.getElementById('sidebar-nav');
    var navItems = sidebarNav.getElementsByClassName('nav-item');

    for (var i = 0; i < navItems.length; i++) {
        navItems[i].classList.remove('active');
        navItems[i].classList.remove('collapsed');

        if (window.location.href.includes(navItems[i].firstElementChild.href)) {
            navItems[i].classList.add('active');
            navItems[i].classList.add('collapsed');
        }

        navItems[i].addEventListener('click', function () {
            for (var j = 0; j < navItems.length; j++) {
                navItems[j].classList.remove('active');
                navItems[j].classList.remove('collapsed');
            }

            this.classList.add('active');
            this.classList.add('collapsed');
        });
    }
});

    </script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>
</html>
