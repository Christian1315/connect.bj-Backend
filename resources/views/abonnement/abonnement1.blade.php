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
                            Abonnement</h1>

                        <!-- Affichage sur mobile -->
                        <h1 class="abonnement-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                            Abonnement</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION  CHOIX DE PACK-->

    <div class="row" id="pack-section">
        <div class="col-md-12">
            <div class="container">
                <!-- Barre de regression -->
                <div class="row">
                    <div class="col-md-2 col-12"></div>
                    <div class="col-md-8 col-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="30" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-12"></div>
                </div>

                <!-- Choix de pack -->
                <div class="row mt-5">
                    <form action="/abonnement1" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 shadow-lg rounded p-5">
                                <!-- SUR LES ORDINATEURS -->
                                <h1 class="text-green pack-title d-none d-xs-none d-sm-none d-md-block d-lg-block">Quelle offre voulez-vous choisir ?</h1>

                                <!-- SUR LES MOBILES -->
                                <h1 class="text-green pack-title-mobile d-md-none d-sm-block d-xs-block">Quelle offre voulez-vous choisir ?</h1>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <select class="form-select" name="fai_choosen" value="{{old('fai_choosen')}}">
                                                <option value="">- Fournisseurs choisi...</option>

                                                @foreach($fais as $fai)
                                                <option value="{{$fai->name}}">{{$fai->name}}</option>
                                                @endforeach
                                            </select>

                                            @error('fai_choosen')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <select class="form-select" name="pack_choosen" value="{{old('fai_choosen')}}">
                                                <option value="">- Pack d'abonnement choisi...</option>
                                                @foreach($packs as $pack)
                                                <option value="{{$pack->pack_type}}">{{$pack->pack_type}}</option>
                                                @endforeach
                                            </select>

                                            @error('pack_choosen')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Afficahge sur les ordinateurs -->
                                        <button type="submit" type="submit" class="my-btn bg-yellow pack-submit mt-2 ">
                                            suivant
                                            <img src="../icons/Icon material-skip-next.png" alt="" srcset="">
                                        </button>
                                        <!-- Afficahge sur les mobiles -->
                                        <!-- <submit type="submit" type="submit" class="my-btn bg-yellow pack-submit-mobile mt-2 d-md-none d-sm-block d-xs-block">
                                            suivant
                                            <img src="../icons/Icon material-skip-next.png" alt="" srcset="">
                                        </submit> -->
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- SECTION DE RECHERCHE DES FOURNISSEURS -->
    <div class="row">
        <div class="col-12 px-0 mx-0">
            <hr style="color:black;width:100%;margin-top:100px;margin-bottom:50px;height: 2px;">
        </div>
    </div>

    <div class="row" id="">
        <div class="col-md-12">
            <!-- PROBLEME SECTION -->
            <x-problem-section></x-problem-section>

            <!-- TESTIMONY SECTION -->

            <x-testimony-section></x-testimony-section>

            <!-- PARTNERS'S SECTION -->

            <x-partner-section></x-partner-section>

        </div>
    </div>

</x-layourt2>