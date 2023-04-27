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
                        <!-- SUR LES ORDINATEURS -->
                        <div class="uk-position-relative uk-visible-toggle uk-light d-none d-xs-none d-sm-none d-md-block d-lg-block" tabindex="-1" uk-slider>
                            <ul class="uk-slider-items uk-child-width-1 uk-child-width-1-5@m uk-grid">
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
                        <!-- SUR LES MOBILES -->
                        <div class="uk-position-relative uk-visible-toggle uk-light d-md-none d-sm-block d-xs-block" tabindex="-1" uk-slider="autoplay: true">
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
                            <!-- <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION  BADGE-->
    <x-badge-component></x-badge-component>

    <!-- SECTION BARE DE RECHERCHE -->
    <x-research></x-research>

    <!-- SECTION FONCTIONNEMENT -->
    <x-video-section-component></x-video-section-component>

    <!-- SECTION DE RECHERCHE DES FOURNISSEURS -->
    <div class="row">
        <div class="col-12 px-0 mx-0">
            <hr style="color:black;width:100%;margin-top:50px;margin-bottom:50px;height: 2px;">
        </div>
    </div>

    <!-- FAIs SERVEURS -->
    <div class="row" id="fai-servers">
        <div class="col-md-12">

            <!-- RECHERCHE -->
            <livewire:search-fai />

            <!-- PROBLEME SECTION -->
            <x-problem-section></x-problem-section>

            <!-- TESTIMONY SECTION -->

            <x-testimony-section></x-testimony-section>

            <!-- PARTNERS'S SECTION -->

            <x-partner-section></x-partner-section>

        </div>
    </div>

</x-layourt1>