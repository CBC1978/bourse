<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <style>
     .main {
  display: flex;
  width: 100%;
  margin-top: 85px;
}

.main .nav {
  max-width: 280px;
  width: 100%;
  background-color: #ffffff;
  position: relative;
  bottom: 0px;
  display: inline-block;
}

.nav-main-menu{
      position: fixed;
      max-width: 270px;
      width: 85%;
      padding: 2px;
      left: 4.5px; 
      z-index: 100;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-expanded{
      z-index: 1000px;
    }

    .main-menu li a {
    padding: 14px;
  }

  </style>
</head>
<body>
  <div class="burger-icon burger-icon-white">
    <span class="burger-icon-top"></span>
    <span class="burger-icon-mid"></span>
    <span class="burger-icon-bottom"></span>
  </div>

          <!-- Mobile menu (hidden by default) -->
  <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
      <div class="mobile-header-content-area">
        <div class="perfect-scroll">
                          <!-- Mobile search -->
          <div class="mobile-search mobile-header-border mb-30">
            <form action="#">
              <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
            </form>
          </div>
          <div class="mobile-menu-wrap mobile-header-border">
            <nav>
              <ul class="main-menu">
                <li>
                  <a class="dashboard2 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <img src="{{ asset('src/imgs/page/dashboard/accueil.svg') }}" alt="jobBox">
                    <span class="name">Accueil</span>
                  </a>
                </li>
                <li>
                  <a class="dashboard2 {{ request()->routeIs('a_user_gestion') ? 'active' : '' }}" href="{{ route('a_user_gestion') }}">
                    <img src="{{ asset('src/imgs/page/dashboard/user.svg') }}" alt="jobBox">
                    <span class="name">Utilisateur </span>
                  </a>
                </li>
                <li>
                  <div class="menu-box">
                    <a>
                        <img src="{{ asset('src/imgs/page/dashboard/entreprise.svg') }}" alt="jobBox">
                        <span class="name">Entreprise</span>
                    </a>
                  </div>
                  <ul class="sub-menu">
                    <li>
                        <a href="{{ route('admin.chargeur') }}">
                            Chargeur
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.transporteur') }}">
                            Transporteur
                        </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="menu-offer {{ request()->routeIs('annonces.a_annonce') ? 'active' : '' }}">
                      <a>
                          <img src="{{ asset('src/imgs/page/dashboard/megaphone.svg') }}" alt="jobBox">
                          <span class="name">Offres</span>
                      </a>
                    </div>
                    <ul class="sub-menu">
                      <li>
                        <a href="{{ route('annonces.a_annonce') }}">
                              Chargeur(s)
                          </a>
                      </li>
                      <li>
                        <a href="{{ route('annonces.a_annonceTransporter') }}">
                              Transporteur(s)
                          </a>
                      </li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('carrier.profile.affichage') }}">
                    <img src="{{ asset('src/imgs/page/dashboard/profiles.svg') }}" alt="jobBox">
                    <span>Profil</span> 
                  </a>
                 </li>
               <div>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button href="{{ route('logout') }}" type="submit">
                    Déconnexion
                  </button>
                </form>
               </div>
                  {{--<li><a class="dashboard2 {{ request()->routeIs('admin.parameter.displayAdminSettings') ? 'active' : '' }}" href="{{ route('admin.parameter.displayAdminSettings') }}"><img src="{{ asset('src/imgs/page/dashboard/tasks.svg') }}" alt="jobBox"><span class="name">Paramètres</span></a></li>--}}
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="nav"><a class="btn btn-expanded" id="expandButton"></a>
    <nav class="nav-main-menu" id="mainMenu">
      <ul class="main-menu">
        <li>
          <div class="menu-box {{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">
              <img src="{{ asset('src/imgs/page/dashboard/accueil.svg') }}" alt="jobBox">
              <span class="name">Accueil</span>
            </a>
          </div>
        </li>
        <li>
          <div class="menu-box {{ request()->routeIs('a_user_gestion') ? 'active' : '' }}">
            <a class="" href="{{ route('a_user_gestion') }}">
              <img src="{{ asset('src/imgs/page/dashboard/user.svg') }}" alt="jobBox">
              <span class="name">Utilisateur</span>
            </a>
          </div>
        </li>
        <li>
          <div class="menu-box">
            <a>
                <img src="{{ asset('src/imgs/page/dashboard/entreprise.svg') }}" alt="jobBox">
                <span class="name">Entreprise</span>
            </a>
          </div>
          <ul class="sub-menu">
            <li>
                <a href="{{ route('admin.chargeur') }}">
                    Chargeur
                </a>
            </li>
            <li>
                <a href="{{ route('admin.transporteur') }}">
                    Transporteur
                </a>
            </li>
          </ul>
        </li>

        <li>
        <div class="menu-offer {{ request()->routeIs('annonces.a_annonce') ? 'active' : '' }}">
            <a>
                <img src="{{ asset('src/imgs/page/dashboard/megaphone.svg') }}" alt="jobBox">
                <span class="name">Offres</span>
            </a>
          </div>
          <ul class="sub-menu">
            <li>
              <a href="{{ route('annonces.a_annonce') }}">
                    Chargeur(s)
                </a>
            </li>
            <li>
              <a href="{{ route('annonces.a_annonceTransporter') }}">
                    Transporteur(s)
                </a>
            </li>
          </ul>
        </li>

        {{--   <li>
        <a class="dashboard2 {{ request()->routeIs('admin.parameter.displayAdminSettings') ? 'active' : '' }}" href="{{ route('admin.parameter.displayAdminSettings') }}"><img src="{{ asset('src/imgs/page/dashboard/tasks.svg') }}" alt="jobBox"><span class="name">Paramètres </span></a>
        </li>
        --}}
      </ul>
    </nav>
  </div>



  <script>
    const expandButton = document.getElementById('expandButton');
    const mainMenu = document.getElementById('mainMenu');

    expandButton.addEventListener('click', function() {
      if (mainMenu.style.width === '64px') {
        mainMenu.style.width = '275px'; // Reprendre la largeur d'origine
      } else {
        mainMenu.style.width = '64px'; // Ajuster la largeur pour aligner à gauche
      }
    });
  </script>
</body>
</html>
