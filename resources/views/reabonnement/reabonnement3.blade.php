<x-layourt2>


    <!-- BANNIERE -->
    <div class="row" id="abonnement_banner">
        <div class="col-md-12 px-0 mx-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/BANNIER PUB.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION NOIR -->

    <div class="row" id="abonnement">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Affichage sur ordinateurs -->
                        <h1 class="abonnement-title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                            Reabonnement</h1>

                        <!-- Affichage sur mobile -->
                        <h1 class=" abonnement-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                            Reabonnement</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION  DE RENSEIGNEMENT D'INFOS-->

    <div class="row" id="pack-section">
        <div class="col-md-12">
            <div class="container">
                <!-- Barre de regression -->
                <div class="row">
                    <div class="col-md-2 col-12"></div>
                    <div class="col-md-8 col-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="30" style="width:100%"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-12"></div>
                </div>

                <!-- Detail de paiement -->
                <div class="row mt-5 detail-paiement">
                    <form action="" class="">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 shadow-lg rounded p-5">

                                <!-- <h1 class="text-green resume-paiement">Résumé et paiement</h1> -->

                                <h1 class="text-green resume-paiement text-gree d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                    Résumé et paiement</h1>

                                <!-- Affichage sur mobile -->
                                <h1 class="text-green resume-paiement-mobile d-md-none d-sm-block d-xs-block">
                                    Résumé et paiement</h1>

                                <li class="d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="pack-choosen">Offre choisie</div>
                                        <div class="content">
                                            <strong>Fournisseurs</strong> : {{$form1['fai_choosen']}} <br>
                                            <strong>Pack </strong>: {{$form1['pack_choosen']}}
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill">
                                        <a href="/reabonnement1">
                                            <img src="../icons/Path 110.png" width="20px" alt="" srcset="">
                                        </a>
                                    </span>
                                </li>

                                <li class="d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="pack-choosen">Informations générales</div>
                                        <div class="content">
                                            <strong> Nom </strong> : {{$form2['firstname']}}<br>
                                            <strong>Prénom</strong> : {{$form2['lastname']}} <br>
                                            <strong>Email </strong>: {{$form2['email']}} <br>
                                            <strong>Téléphone </strong>: {{$form2['phone']}}
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill">
                                        <a href="/reabonnement2">
                                            <img src="../icons/Path 110.png" width="20px" alt="" srcset="">
                                        </a>
                                    </span>
                                </li>

                                <li class="d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="pack-choosen">Adresse du routeur</div>
                                        <div class="content">
                                            <strong> Ville de localisation </strong> : {{$form2['city']}} <br>
                                            <strong> Maison </strong> : {{$form2['house']}} <br>
                                            <strong> IP du routeur </strong> : {{$form2['routor_IP']}}<br>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill">
                                        <a href="/reabonnement2">
                                            <img src="../icons/Path 110.png" width="20px" alt="" srcset="">
                                        </a>
                                    </span>
                                </li>

                                <div class="row my-5 resume-account">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="content">
                                            <!-- <h1 class="title">PAIEMENT</h1> -->

                                            <!-- Affichage sur ordinateurs -->
                                            <h1 class="title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                PAIEMENT</h1>

                                            <!-- Affichage sur mobile -->
                                            <h1 class="title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                                PAIEMENT</h1>

                                            <div class="">
                                                <span>Pack choisi par le client </span><span class="span2 float-end"> : {{$form1['fai_choosen']}} </span>
                                            </div>

                                            <div class="">
                                                <span> Frais de commande </span> <span class="span2 float-end">
                                                    : {{$pack_price}} F CFA </span>
                                            </div>
                                            <div class="">
                                                <span> TVA</span> <span class="span2 float-end"> : xxx F CFA
                                                </span>
                                            </div>

                                            <div class="">
                                                <strong> Total</strong><span class="span2 float-end"> : {{$pack_price}} F
                                                    CFA </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>


                                <!-- Afficahge sur les ordinateurs -->
                                <div class="row">
                                    <div class="col-md-6 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                        <a href="/reabonnement2" class="my-btn bg-red float-end pack-submit mt-2">
                                            <img src="../icons/preview.png" alt="" srcset="">
                                            Retour
                                        </a>
                                    </div>
                                    <div class="col-md-6 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                        @php
                                        $price=$pack_price;
                                        $back="reabonnement4"
                                        @endphp
                                        <x-paiement :price="$price" :back="$back"></x-paiement>
                                    </div>
                                </div>

                                <!-- Afficahge sur les mobile -->
                                <div class="row mt-2 d-md-none d-sm-block d-xs-block">
                                    <div class="col-md-6 text-center">
                                        <a href="/reabonnement2" class="my-btn bg-red pack-submit-mobile mt-2">
                                            <img src="../icons/preview.png" width="25px" alt="" srcset="">
                                            Retour
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center mt-4">
                                        @php
                                        $price=$pack_price;
                                        $back="reabonnement4"
                                        @endphp
                                        <x-paiement :price="$price" :back="$back"></x-paiement>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LIGNE DE SEPARATION -->
    <div class="row">
        <div class="col-12 px-0 mx-0">
            <hr style="color:black;width:100%;margin-top:100px;margin-bottom:50px;height: 2px;">
        </div>
    </div>


    <!-- PROBLEME SECTION -->
    <x-problem-section></x-problem-section>

    <!-- TESTIMONY SECTION -->

    <x-testimony-section></x-testimony-section>

    <!-- PARTNERS'S SECTION -->

    <x-partner-section></x-partner-section>

</x-layourt2>