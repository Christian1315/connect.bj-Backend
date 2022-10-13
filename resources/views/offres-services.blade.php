<x-layourt1>

    <!-- BANNIERE -->
    <div class="row" id="folow_banner">
        <div class="col-md-12 px-0 mx-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/BANNIER PUB.jpg" class="d-block img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- SECTION BARE DE RECHERCHE -->
    <x-research></x-research>

    <!-- SECTION FONCTIONNEMENT -->
    <x-video-section-component></x-video-section-component>

    <!-- BARRE DE RECHERCHE DES FAIS -->

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


    <!-- SECTION  BADGE-->

    <!-- SECTION  BADGE-->
    <x-badge-component></x-badge-component>

</x-layourt1>