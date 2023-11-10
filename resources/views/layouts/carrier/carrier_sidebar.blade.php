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
                    <a class="dashboard2 {{ request()->routeIs('shipper.announcements.index') ? 'active' : '' }}" href="{{ route('shipper.announcements.index') }}">
                      <img src="{{ asset('src/imgs/page/dashboard/conteneurFret.svg') }}" alt="jobBox">
                      <span class="name">Offres de fret</span>
                  </a>
                 </li>
                 <li>
                    <a class="dashboard2 {{ request()->routeIs('carrier.announcements.user') ? 'active' : '' }}" >
                      <img src="{{ asset('src/imgs/page/dashboard/transport.svg') }}" alt="jobBox">
                      <span class="name">Mes offres de transports</span>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="{{ route('carrier.announcements.user') }}">Offres reçues</a>
                      </li>
                      <li>
                        <a href="{{ route('carrier.announcements.useroffer') }}">Offres non reçues</a>
                      </li>
                    </ul>
               </li>
                 <li>
                    <a class="dashboard2 {{ request()->routeIs('carrier.announcements.carrier_myrequest') ? 'active' : '' }}" href="{{ route('carrier.announcements.carrier_myrequest') }}">
                      <img src="{{ asset('src/imgs/page/dashboard/conteneur.svg') }}" alt="jobBox">
                      <span class="name">Mes offres de frets</span>
                  </a>
                 </li>
                 <li>
                    <a class="dashboard2 {{ request()->routeIs('carrier.announcements.contract') ? 'active' : '' }}" href="{{ route('carrier.announcements.contract') }}">
                      <img src="{{ asset('src/imgs/page/dashboard/contrat.svg') }}" alt="jobBox">
                      <span class="name">Contrat</span>
                  </a>
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
                      <img src="{{ asset('src/imgs/page/dashboard/logout.svg') }}" alt="jobBox">
                      Déconnexion
                    </button>
                  </form>
                 </div>
                 </li>
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
                 <div class="menu-box {{ request()->routeIs('shipper.announcements.index') ? 'active' : '' }}">
                   <a href="{{ route('shipper.announcements.index') }}">
                     <img src="{{ asset('src/imgs/page/dashboard/conteneurFret.svg') }}" alt="jobBox">
                     <span class="name">Offres de fret</span>
                   </a>
                 </div>
               </li>
               <li>
                  <a class="dashboard2 {{ request()->routeIs('carrier.announcements.user') ? 'active' : '' }}" >
                    <img src="{{ asset('src/imgs/page/dashboard/camion.svg') }}" alt="jobBox">
                    <span class="name">Mes offres de transports</span>
                  </a>
                  <ul class="sub-menu">
                    <li>
                      <a href="{{ route('carrier.announcements.user') }}">Offres reçues</a>
                    </li>
                    <li>
                      <a href="{{ route('carrier.announcements.useroffer') }}">Offres non reçues</a>
                    </li>
                  </ul>
               </li>

               <li>
                 <div class="menu-box {{ request()->routeIs('carrier.announcements.carrier_myrequest') ? 'active' : '' }}">
                     <a href="{{ route('carrier.announcements.carrier_myrequest') }}">
                         <img src="{{ asset('src/imgs/page/dashboard/conteneur.svg') }}" alt="jobBox">
                         <span class="name">Mes offres de frets</span>
                     </a>
                 </div>
             </li>
             <li>
                 <div class="menu-box {{ request()->routeIs('carrier.announcements.contract') ? 'active' : '' }}">
                     <a href="{{ route('carrier.announcements.contract') }}">
                         <img src="{{ asset('src/imgs/page/dashboard/contrat.svg') }}" alt="jobBox">
                         <span class="name">Contrat</span>
                     </a>
                 </div>
             </li>
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

{{--                 <li>--}}
{{--                   <a class="dashboard2" href="#">--}}
{{--                       <img src="{{ asset('src/imgs/page/dashboard/jobs.svg') }}" alt="jobBox">--}}
{{--                       <span class="name">Statistiques</span>--}}
{{--                   </a>--}}
{{--                 </li>--}}
{{--                 <li>--}}
{{--                   <a class="dashboard2 {{ request()->routeIs('carrier.parameter.displayCarrierSettings') ? 'active' : '' }}" href="{{ route('carrier.parameter.displayCarrierSettings') }}">--}}
{{--                       <img src="{{ asset('src/imgs/page/dashboard/settings.svg') }}" alt="jobBox">--}}
{{--                       <span class="name">Paramètres</span>--}}
{{--                   </a>--}}
{{--                 </li>--}}
