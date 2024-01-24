<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    


</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo1 d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="textlogo">Cour<br/> d’Appel</span>
          </a>
         
        </div><!-- End Logo -->
        <div class="search-bar">
    <i class="bi bi-list toggle-sidebar-btn"></i>
          
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Recherche" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div><!-- End Search Bar -->
        <nav class="header-nav ms-auto">
          
            <ul class="d-flex align-items-center">
              
              <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
                </a>
              </li>
            
              <li class="nav-item dropdown">
      
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-bell"></i>
                  <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                  <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-exclamation-circle text-warning"></i>
                    <div>
                      <h4>Lorem Ipsum</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>30 min. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-x-circle text-danger"></i>
                    <div>
                      <h4>Atque rerum nesciunt</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>1 hr. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-check-circle text-success"></i>
                    <div>
                      <h4>Sit rerum fuga</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>2 hrs. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  
                  <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                      <h4>Dicta reprehenderit</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                  </li>
      
                </ul><!-- End Notification Dropdown Items -->
      
              </li><!-- End Notification Nav -->
             
              <li class="nav-item dropdown">
      
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-chat-left-text"></i>
                  <span class="badge bg-success badge-number">3</span>
                </a><!-- End Messages Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                  <li class="dropdown-header">
                    You have 3 new messages
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="message-item">
                    <a href="#">
                      <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                      <div>
                        <h4>Maria Hudson</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>4 hrs. ago</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="message-item">
                    <a href="#">
                      <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                      <div>
                        <h4>Anna Nelson</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>6 hrs. ago</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="message-item">
                    <a href="#">
                      <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                      <div>
                        <h4>David Muldon</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>8 hrs. ago</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="dropdown-footer">
                    <a href="#">Show all messages</a>
                  </li>
                  
                </ul><!-- End Messages Dropdown Items -->
      
              </li>
              
               
                
              
      
              <a class="custom-select" style="margin-right: 10px;">
                <div class="select-box">
                    <img src="{{ session('user')->image }}" alt="Profile" class="rounded-circle" style="width: 40px; height: 50px;">
                    <span class="span2">
                        @if(session('user'))
                            {{ session('user')->nom }} 
                        @endif
                    </span>
                    <i class="bi bi-caret-down"></i>
                    <div class="options">
                      <a href="{{ route('profile') }}">
                          <i class="bi bi-person"></i>
                          <span>Mon profil</span>
                      </a>
                      <hr class="dropdown-divider">
                      <hr class="dropdown-divider">
                      <hr class="dropdown-divider">
                      <a href="{{ route('logout') }}">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>Déconnexion</span>
                      </a>
                  </div>
                </div>
                
            </a>
            
      
                
              </li> 
      
            </ul>
          </nav><!-- End Icons Navigation -->
    </header>
    <script src="path/to/explosion-animation.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".custom-select").on("click", function (event) {
                event.stopPropagation();
                $(this).find(".options").toggle();
            });

            $(document).on("click", function () {
                $(".custom-select .options").hide();
            });
        });
    </script>
</body>
</html>