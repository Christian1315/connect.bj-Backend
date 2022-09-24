<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('../LOGOS/LOCO CONNECT PNG.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('../fichiers/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('../fichiers/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('../fichiers/acceuil.css')}}">
    <link rel="stylesheet" href="{{asset('fichiers/suivi-de-commande.css')}}">
    <link rel="stylesheet" href="{{asset('fichiers/inscription.css')}}">

   
    <title>CONNECT.BJ</title>
</head>

<body>
    <div class="container-fluid">
        <!-- ============= HEADER ======================= -->

        <!-- SECTION NOIR  -->

        <div class="row" id="black-section">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    </ul>
                                    <div class="d-flex">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                @guest
                                                <a href="/connexion" class="nav-link active" aria-current="page">
                                                    <img class="icon img-fluid" src="{{asset('icons/user.png')}}" alt="" srcset="">
                                                    Connexion
                                                </a>
                                                @else
                                                <a href="/connexion" class="nav-link active" aria-current="page">
                                                    <img class="icon img-fluid" src="{{asset('icons/user.png')}}" alt="" srcset="">
                                                    {{auth()->user()->firstname}}
                                                </a>
                                                @endguest
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/sign-up">
                                                    <img class="icon img-fluid" src="{{asset('../icons/customer.png')}}" alt="">
                                                    Espace client</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- NAVBAR  SUR LES ORDINATEURS-->
        <div class="row bg-green d-none d-xs-none d-sm-none d-md-block d-lg-block" id="nav-bar">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-4 py-2">
                            <a class="" href="/"><img class="logo img-fluid" src="{{asset('../LOGOS/LOCO CONNECT PNG WHITE_croked.png')}}" alt="" srcset=""></a>
                        </div>
                        <div class="col-8 mr-0 px-0 py-3">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    </ul>
                                    <div class="d-flex">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link active text-uppercase" aria-current="page" href="/">Acceuil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-uppercase" href="/offres-services">Offres/services</a>
                                            </li>
                                        </ul>
                                        @guest
                                        <a href="/connexion" class="btn nav-link text-uppercase bg-yellow login">se
                                            connecter</a>

                                        @else
                                        <a href="/deconnexion" class=" btn nav-link bg-red text-white text-uppercase">
                                            <strong>Déconnexion</strong> </a>
                                        @endguest
                                        <a href="/follow" class="btn bg-red text-uppercase follow">suivre
                                            une comande</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NAVBAR  SUR LES TABLETTES &  PHONES-->
        <div class="row bg-green d-block d-md-none d-sm-block d-xs-block" id="nav-bar">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mr-0 px-0 py-3">
                            <nav class="navbar navbar-expand-lg">
                                <div class="container-fluid">
                                    <a class="" href="/"><img class="logo img-fluid" src="{{asset('../LOGOS/LOCO CONNECT PNG WHITE_croked.png')}}" alt="" srcset=""></a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <!-- <span class="navbar-toggler-icon"></span> -->
                                        <i class="fa-solid fa-bars"></i>

                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        </ul>
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link active text-uppercase" aria-current="page" href="#">Acceuil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-uppercase" href="offres-services">Offres/services</a>
                                            </li>
                                            <li class="nav-item">
                                                <!-- <a class="nav-link text-uppercase" href="/connexion">se connecter</a> -->
                                                @guest
                                                <a href="/connexion" class="nav-link text-uppercase text-yellow">se
                                                    connecter</a>

                                                @else
                                                <a href="/deconnexion" class="nav-link text-danger text-uppercase">
                                                    <strong>Déconnexion</strong> </a>
                                                @endguest
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-uppercase" href="/follow">suivre
                                                    une comande</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FLASH MESSAGE -->
        <x-flash-message></x-flash-message>


        {{$slot}}


        <!-- ============= FOOTER ======================= -->


        <!-- FOOTER SUR LES ORDINATEURS-->
        <footer uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" class="d-none d-xs-none d-sm-none d-md-block d-lg-block">

            <div class="row bg-green " id="footer-section">
                <div class="col-md-12">
                    <div class="container">
                        <h1 class="footer-title">Ne ratez plus les offres de promotions</h1>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="d-flex" action="/newsletter" method="POST">
                                            @csrf
                                            <input name="email" class="form-control me-2 footer-search-input" type="email" placeholder="Votre mail ici...">
                                            <button href="/abonnement" class="text-center my-btn footer-search-boutton bg-red text-uppercase" type="submit">S'abonner</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-2" id="footer-dark-session">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/">
                                <img src="{{asset('LOGOS/LOCO CONNECT PNG_croked.png')}}" class="img-fluid" alt="" srcset="">
                            </a>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <ul class="uk-list">
                                        <li>- Plan du site</li>
                                        <li>- Infos Légales</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <ul class="uk-list">
                                        <li>- Tarifs & conditions</li>
                                        <li>- Signaler un problème</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <ul class="uk-list">
                                        <li>- Nous contacter</li>
                                        <li>- Carrière</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <ul class="uk-list">
                                        <li>- Pour les entreprises</li>
                                        <li>- Pour les particuliers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- FOOTER SUR LES TABLETTES & PHONES-->
        <footer uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" class="d-block d-md-none d-sm-block d-xs-block">
            <div class="row bg-green " id="footer-section-mobile">
                <div class="col-md-12">
                    <div class="container">
                        <h1 class="footer-title">Ne ratez plus les offres de promotions</h1>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="" action="/newsletter" method="POST">
                                            @csrf
                                            <input class="form-control me-2 footer-search-input" name="email" placeholder="Votre mail ici..." aria-label="Search">
                                            <div class="text-center mt-2">
                                                <button class="text-center my-btn footer-search-boutton bg-red text-uppercase" type="submit">S'abonner</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-2" id="footer-dark-session-mobile">
                <div class="col-md-12">
                    <div class="row mb-5">
                        <div class="col-md-12 text-center">
                            <a href="/">
                                <img src="{{asset('LOGOS/LOCO CONNECT PNG_croked.png')}}" class="img-fluid" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="uk-list">
                                        <li>- Plan du site</li>
                                        <li>- Infos Légales</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="uk-list">
                                        <li>- Tarifs & conditions</li>
                                        <li>- Signaler un problème</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="uk-list">
                                        <li>- Nous contacter</li>
                                        <li>- Carrière</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="uk-list">
                                        <li>- Pour les entreprises</li>
                                        <li>- Pour les particuliers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

   
    <script src="https://kit.fontawesome.com/1a90b9fe9a.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{asset('../fichiers/bootstrap.js')}}"></script>
    <script src="{{asset('../fichiers/uikit.js')}}"></script>
    <script src="https://cdn.kkiapay.me/k.js"></script>
</body>

</html>