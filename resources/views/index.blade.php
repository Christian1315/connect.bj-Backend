<x-layourt1>
    <!-- BANNIERE -->
    <div class="row" id="banner">
        <div class="col-md-12 px-0 mx-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/BANNIERE 1.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/BANNIERE 2.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION DES FAI DEFILLAINTE -->

    <div class="row py-3 bg-light" id="fai-section">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-5@m uk-grid">
                                <li>
                                    <div class="uk-panel">
                                        <img src="img/abc.png" alt="">
                                        <div class="uk-position-center uk-panel">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="img/telecome1.png" alt="">
                                        <div class="uk-position-center uk-panel">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="img/jeny.png" alt="">
                                        <div class="uk-position-center uk-panel">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="img/sbin2.png" alt="">
                                        <div class="uk-position-center uk-panel">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="img/via2.png" alt="">
                                        <div class="uk-position-center uk-panel">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="img/wb1.png" alt="">
                                        <div class="uk-position-center uk-panel">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION  BADGE-->
    <x-badge-component></x-badge-component>

    <!-- SECTION BARE DE RECHERCHE -->
    <div class="row" id="search-section">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Affichage sur ordinateurs -->
                        <h1 class="title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                            Que recherchez-vous ?</h1>

                        <!-- Affichage sur mobile -->
                        <!-- <h1 class="title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                            Que recherchez-vous ?</h1> -->

                        <div class="row">
                            <div class="col-md-3 col-sm-12"></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- LES LIENS DE NAVIGATION SUR LES ORDINATEURS-->
                                        <nav class=" d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                            <ul class="nav nav-pills mb-3 bg-green" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-company-tab" data-bs-toggle="pill" data-bs-target="#pills-company" type="button" role="tab" aria-controls="pills-company" aria-selected="true">Entreprise</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-particular-tab" data-bs-toggle="pill" data-bs-target="#pills-particular" type="button" role="tab" aria-controls="pills-particular" aria-selected="false">Particulier</button>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- LES LIENS DE NAVIGATION SUR LES MOBILES-->
                                        <div class="text-center d-md-none d-sm-block d-xs-block">

                                            <nav class="navbar navbar-expand-lg bg-green rounded">
                                                <div class="container-fluid">
                                                    <h6 class="text-white mt-3">Qui êtes vous?</h6>
                                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <i class="fa-solid fa-bars" style="color:#fff!important"></i>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                                        <ul class="nav nav-pills-mobile mb-3" id="pills-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link  active" id="pills-company-tab" data-bs-toggle="pill" data-bs-target="#pills-company" type="button" role="tab" aria-controls="pills-company" aria-selected="true">Entreprise</button>
                                                            </li>
                                                            <li class="nav-item mt-1" role="presentation">
                                                                <button class="nav-link " id="pills-particular-tab" data-bs-toggle="pill" data-bs-target="#pills-particular" type="button" role="tab" aria-controls="pills-particular" aria-selected="false">Particulier</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12"></div>
                        </div>
                        <!-- CONTENU DES TABLES -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab" tabindex="0">
                                <!-- ENTREPRISE -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-11 company company-subscription mb-2">

                                                            <!-- SUR LES ORDINATEURS -->
                                                            <h1 class="subscription-title text-uppercase text-red d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                                Abonnement
                                                            </h1>

                                                            <!-- SUR LES MOBILES -->

                                                            <h1 class="subscription-title-mobile text-uppercase text-red d-md-none d-sm-block d-xs-block">
                                                                Abonnement
                                                            </h1>

                                                            <p class="subscription-content">Lorem ipsum dolor sit,
                                                                amet consectetur adipisicing elit. Nam accusamus
                                                                magnam est corporis magni modi reiciendis ipsum
                                                                dicta deserunt sint libero, ipsam laboriosam, eaque
                                                                sed soluta itaque molestiae debitis totam!</p>
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <!-- SUR LES ORDINATEURS -->
                                                                    <a href="/abonnement1" class="my-btn company-action text-uppercase text-red bg-white d-none d-xs-none d-sm-none d-md-block d-lg-block">S'abonner</a>

                                                                    <!-- SUR LES MOBILES -->
                                                                    <a href="/abonnement1" class="my-btn  company-action-reabonnement-mobile text-uppercase text-red bg-white d-md-none d-sm-block d-xs-block">S'abonner</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  ">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-11 company company-resubscription mb-2">

                                                            <!-- SUR LES ORDINATEURS -->
                                                            <h1 class="subscription-title text-uppercase text-red d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                                Réabonnement
                                                            </h1>

                                                            <!-- SUR LES MOBILES -->

                                                            <h1 class="subscription-title-mobile text-uppercase text-red d-md-none d-sm-block d-xs-block">
                                                                Réabonnement
                                                            </h1>
                                                            <p class="subscription-content">Lorem ipsum dolor sit,
                                                                amet consectetur adipisicing elit. Nam accusamus
                                                                magnam est corporis magni modi reiciendis ipsum
                                                                dicta deserunt sint libero, ipsam laboriosam, eaque
                                                                sed soluta itaque molestiae debitis totam!

                                                            </p>
                                                            <div class="row">
                                                                <div class="col-12 text-center">


                                                                    <!-- SUR LES ORDINATEURS -->
                                                                    <a href="/reabonnement1" class="my-btn company-action text-uppercase text-red bg-white d-none d-xs-none d-sm-none d-md-block d-lg-block">Se
                                                                        réabonner</a>

                                                                    <!-- SUR LES MOBILES -->
                                                                    <a href="/reabonnement1" class="my-btn  company-action-reabonnement-mobile text-uppercase text-red bg-white d-md-none d-sm-block d-xs-block">Se
                                                                        réabonner</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-1"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-particular" role="tabpanel" aria-labelledby="pills-particular-tab" tabindex="0">
                                <!-- PARICULIER -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 mb-1 ">
                                                    <div class="row">
                                                        <!-- <div class="col-1"></div> -->
                                                        <div class="col-md-11 particular particular-subscription">

                                                            <!-- SUR LES ORDINATEURS -->
                                                            <h1 class="subscription-title text-uppercase text-red d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                                Abonnement
                                                            </h1>

                                                            <!-- SUR LES MOBILES -->
                                                            <h1 class="subscription-title-mobile text-uppercase text-red d-md-none d-sm-block d-xs-block">
                                                                Abonnement
                                                            </h1>

                                                            <p class="subscription-content">Lorem ipsum dolor sit,
                                                                amet consectetur adipisicing elit. Nam accusamus
                                                                magnam est corporis magni modi reiciendis ipsum
                                                                dicta deserunt sint libero, ipsam laboriosam, eaque
                                                                sed soluta itaque molestiae debitis totam!</p>
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <!-- SUR LES ORDINATEURS -->
                                                                    <a href="/abonnement1" class="my-btn particular-action text-uppercase text-red bg-white d-none d-xs-none d-sm-none d-md-block d-lg-block">S'abonner</a>

                                                                    <!-- SUR LES MOBILES -->
                                                                    <a href="/abonnement1" class="my-btn company-action-mobile text-uppercase text-red bg-white d-md-none d-sm-block d-xs-block">S'abonner</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  ">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-11 particular particular-resubscription">

                                                            <!-- SUR LES ORDINATEURS -->
                                                            <h1 class="subscription-title text-uppercase text-red d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                                Réabonnement
                                                            </h1>

                                                            <!-- SUR LES MOBILES -->
                                                            <h1 class="subscription-title-mobile text-uppercase text-red d-md-none d-sm-block d-xs-block">
                                                                Réabonnement
                                                            </h1>

                                                            <p class="subscription-content">Lorem ipsum dolor sit,
                                                                amet consectetur adipisicing elit. Nam accusamus
                                                                magnam est corporis magni modi reiciendis ipsum
                                                                dicta deserunt sint libero, ipsam laboriosam, eaque
                                                                sed soluta itaque molestiae debitis totam!

                                                            </p>
                                                            <div class="row">
                                                                <div class="col-12 text-center">

                                                                    <!-- SUR LES ORDINATEURS -->
                                                                    <a href="/reabonnement1" class="my-btn particular-action text-uppercase text-red bg-white d-none d-xs-none d-sm-none d-md-block d-lg-block">Se
                                                                        réabonner</a>

                                                                    <!-- SUR LES MOBILES -->
                                                                    <a href="/reabonnement1" class="my-btn company-action-reabonnement-mobile text-uppercase text-red bg-white d-md-none d-sm-block d-xs-block">Se
                                                                        réabonner</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-1"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- SECTION FONCTIONNEMENT -->
               <x-video-section-component></x-video-section-component>
            </div>
        </div>
    </div>

    <!-- SECTION DE RECHERCHE DES FOURNISSEURS -->
    <div class="row">
        <div class="col-12 px-0 mx-0">
            <hr style="color:black;width:100%;margin-top:50px;margin-bottom:50px;height: 2px;">
        </div>
    </div>

    <!-- FAIs SERVEURS -->
    <div class="row" id="fai-servers">
        <div class="col-md-12">

            <!-- BARRE DE RECHERCHE DES FAIS -->
            <div class="row" id="search-section">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">

                            <!-- SUR LES ORDINATEURS -->
                            <h1 class="title d-none d-xs-none d-sm-none d-md-block d-lg-block">Fournisseurs d'accès
                                internet disponible</h1>

                            <!-- SUR LES MOBILES -->
                            <h1 class="title-mobile d-md-none d-sm-block d-xs-block">Fournisseurs d'accès internet
                                disponible</h1>


                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <!-- LES LIENS DE NAVIGATION -->
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- SUR ORDINATEURS -->
                                            <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                <ul class="nav nav-pills mt-3 bg-green pt-4 " id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <h1 class="search-title">Rechercher un fournisseur
                                                        </h1>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <form action="/searchFais" method="POST" class="d-flex">
                                                            @csrf
                                                            <input class="form-control me-2 search-input" name="search" placeholder="Nom du fournisseur..." aria-label="Search">
                                                            <button class="my-btn search-boutton" type="submit">Recherche</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FAI'S CONTENT  AFTER SEACHING -->

            <div class="row" id="fai_card">
                <div class="col-12">
                    <div class="container" uk-scrollspy="cls: uk-animation-fade; target: .fai-block; delay: 500; repeat: false">

                        @foreach($fais as $fai)
                        <x-fai-component :fai="$fai"></x-fai-component>
                        @endforeach
                    </div>

                </div>

                <!-- PAGINATION -->
                <div class="row pagination">
                    <div class="col-12">
                        <ul class="uk-pagination  pagination justify-content-center" uk-margin>
                            <li><a href="#"><span uk-pagination-previous></span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span uk-pagination-next></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- PROBLEME SECTION -->
            <x-problem-section></x-problem-section>

            <!-- TESTIMONY SECTION -->

            <x-testimony-section></x-testimony-section>

            <!-- PARTNERS'S SECTION -->

            <x-partner-section></x-partner-section>

        </div>
    </div>

</x-layourt1>