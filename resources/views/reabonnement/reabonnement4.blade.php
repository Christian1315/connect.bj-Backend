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
                            reabonnement</h1>

                        <!-- Affichage sur mobile -->
                        <h1 class=" abonnement-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                            reabonnement</h1>

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
                <div class="row mt-5  resume-account">
                    <form action="" class="">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 shadow-lg rounded p-5">

                                <!-- <h1 class="text-green resume-paiement text-center text-uppercase">COMMANDE
                                            VALIDÉE</h1> -->

                                <!-- Affichage sur ordinateurs -->
                                <h1 class=" resume-paiement text-green text-center title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                    COMMANDE VALIDÉE</h1>

                                <!-- Affichage sur mobile -->
                                <h1 class="text-green text-center title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                    COMMANDE VALIDÉE</h1>


                                <img src="../illustrations/shape.png" alt="" srcset="">

                                <div class="row my-5 resume-account">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="content">
                                            <!-- <h1 class="title">PAIEMENT</h1> -->

                                            <!-- Affichage sur ordinateurs -->
                                            <h1 class="text-center title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                Paiement de : [Montant] effectué</h1>

                                            <!-- Affichage sur mobile -->
                                            <h1 class="text-center title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                                Paiement de : [Montant] effectué</h1>

                                            <div class="text-center">
                                                <span>Votre commande est validée et sera bientôt pris en
                                                    charge</span>
                                                </span>
                                            </div>

                                            <div class="text-center">
                                                <span> Votre code de suivi est : <strong class="text-red">
                                                        {{$follow_code}}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <!-- Afficahge sur les ordinateurs -->
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <a href="/follow" class="my-btn bg-green pack-submit mt-2 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                            Suivre ma commande
                                        </a>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                                <!-- Afficahge sur les mobile -->
                                <div class="row mt-2 d-md-none d-sm-block d-xs-block">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6 text-center">
                                        <a href="/follow" class="follow-commande-mobile my-btn bg-green mt-2">
                                            Suivre ma commande
                                        </a>
                                    </div>
                                    <div class="col-md-3"></div>
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