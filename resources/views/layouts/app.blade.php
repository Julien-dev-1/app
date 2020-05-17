<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Valintanana') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/takalo/takalo.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animations/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidenav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/takalo/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid nav-fixed">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="menu">
                        <i class="fa fa-list menu-icon" onclick="openNav()"></i>
                    </div>
                    <div class="_img101">
                        <img src="{{ asset('image/header/valintanana.png') }}" alt="Valintanana.png" class="_img102">
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link link-bar-nav now-nav-activated" href="{{ route('home') }}" role="button">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-bar-nav" href="#" role="button">Pojets</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle link-bar-nav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Connexion <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-link" href="{{ route('login') }}" >
                                        Se connecter
                                    </a>
                                    @if (Route::has('register'))
                                        <a class="dropdown-item nav-link" href="{{ route('register') }}" >
                                            Nouveau compte
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @else
                        <?php 
                            $requet = DB::select("SELECT DISTINCT projet_id FROM Notifications");
                            $count_notif = 0;
                            foreach($requet as $req){
                                $res = App\Notification::select('*')->where('projet_id', $req->projet_id)->first();
                                $projet = App\Projet::find($req->projet_id);
                                if($projet->user_id == Auth::user()->id){
                                    if($res->Isnew == true){
                                        if($res->user_id != $res->projet_id){
                                            $count_notif = $count_notif + 1 ;
                                        }
                                    }
                                }
                            }
                        ?>
                            <li class="nav-item">
                                 <a class="nav-link link-bar-nav" href="{{ route('notification.index') }}" role="button">
                                 Notifications
                                    @if ($count_notif != 0)
                                        <span class="badge element-position notification-badge ">
                                            {{ $count_notif }}
                                        </span>
                                    @endif
                                 </a>
                            </li>
                            <li class="nav-item ">
                                 <a class="nav-link link-bar-nav" href="{{ route('plan.bonplan.index') }}" role="button">Bons Plans<span class="badge element-position notification-badge">102</span></a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link link-bar-nav"  href="{{ route('takalo.index') }}"  role="button">Takalo<span class="badge element-position notification-badge">{{ Auth::user()->jeutons }}</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle link-bar-nav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <div class="main-card dropdown-item">
                                        <div class="main-link">
                                            <div class="deep-link">
                                                <a href="" class="main-deep-link"><img id="icons" src="{{ asset('icons/svg/Icone%20mon%20profil.svg') }}">Mon profile</a>
                                            </div>
                                            <div class="deep-link">
                                                <a href=""><img id="icons" src="{{ asset('icons/svg/Icone%20mes%20contributions.svg') }}">Mes contributions</a>
                                            </div>
                                            <div class="deep-link">
                                                <a href=""><img id="icons" src="{{ asset('icons/svg/Icone%20mes%20projets.svg') }}">Mes projets</a>
                                            </div>
                                            <div class="deep-link">
                                                <a href=""><img id="icons" src="{{ asset('icons/svg/Icone%20ma%20page%20organisation.svg') }}">Nom de page organisations</a>
                                            </div>
                                            <div class="deep-link">
                                                <a href=""><img id="icons" src="{{ asset('icons/svg/Icone%20Journal%20des%20transactions%20Takalo.svg') }}">Journales des transactions Takalo</a>
                                            </div>
                                            <div class="deep-link">
                                                <a href=""><img id="icons" src="{{ asset('icons/svg/Icones%20parametres.svg') }}">Paramètres</a>
                                            </div>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <img id="icons" class = "deconnection-left" src="{{ asset('icons/svg/Icone%20déconnexion.svg') }}">Déconnexion
                                            </a>
                                            <div class="deep-link">
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#" class = "size-element">Lancer un projet</a>
            <a href="#" class = "size-element">Tous les Projets</a>
            <a href="#" class = "size-element" >Aides</a>
            <a href="#" class = "size-element" >Contact</a>
        </div>
        <main class="py-4 py-04">
        @if (session('success'))
            <div class = "container">
                <div class ="alert alert-succes">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class = "container">
                <div class ="alert alert-danger">
                    {{ session('error') }}
                </div>
            </div>
        @endif   
            @yield('welcome')
            @yield('content')
        </main>
        @extends('layouts.footer')
    </div>

    <script type ="text/javascript">
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("main").style.marginLeft = "300px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>
</html>
