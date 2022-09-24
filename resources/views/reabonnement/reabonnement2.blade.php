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
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="30" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-12"></div>
                </div>

                <!-- Choix de pack -->
                <div class="row mt-5">
                    <form action="/reabonnement2" method="POST" class="">
                        @csrf
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 shadow-lg rounded p-5">

                                <!-- <h1 class="text-green pack-title ">Information générales</h1> -->
                                <!-- SUR LES ORDINATEURS -->
                                <h1 class="text-green pack-title d-none d-xs-none d-sm-none d-md-block d-lg-block">Information générales</h1>

                                <!-- SUR LES ORDINATEURS -->
                                <h1 class="text-green pack-title-mobile d-md-none d-sm-block d-xs-block">Information générales</h1>


                                <div class="row">
                                    <div class="col-md-6">
                                        @if(Auth::user())
                                        <div class="mb-3">
                                            <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->firstname}}">
                                        </div>
                                        @else
                                        <div class="mb-3">
                                            <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" placeholder="Nom" value="{{old('firstname')}}">
                                        </div>
                                        @endif

                                        @error('firstname')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        @if(Auth::user())
                                        <div class="mb-3">
                                            <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->lastname}}">
                                        </div>
                                        @else
                                        <div class="mb-3">
                                            <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Prénom" value="{{old('lastname')}}">
                                        </div>
                                        @endif

                                        @error('lastname')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        @if(Auth::user())
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->email}}">
                                        </div>
                                        @else
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{old('email')}}">
                                        </div>
                                        @endif

                                        @error('email')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        @if(Auth::user())
                                        <div class="mb-3">
                                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->phone}}">
                                        </div>
                                        @else
                                        <div class="mb-3">
                                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Téléphone" value="{{old('phone')}}">
                                        </div>
                                        @endif

                                        @error('phone')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>


                                <!-- <h1 class="text-green pack-title ">Adresse du router</h1> -->

                                <!-- SUR LES ORDINATEURS -->
                                <h1 class="text-green pack-title d-none d-xs-none d-sm-none d-md-block d-lg-block">Adresse du router</h1>

                                <!-- SUR LES ORDINATEURS -->
                                <h1 class="text-green pack-title-mobile d-md-none d-sm-block d-xs-block">Adresse du router</h1>

                                <div class="row">
                                    <div class="col-md-6">
                                        @if(Auth::user())
                                        <div class="mb-3">
                                            <input type="text" name="city" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->city}}">
                                        </div>
                                        @else
                                        <div class="mb-3">
                                            <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Ville de localisation" value="{{old('city')}}">
                                        </div>
                                        @endif

                                        @error('city')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        @if(Auth::user())
                                        <div class="mb-3">
                                            <input type="text" name="house" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->house}}">
                                        </div>
                                        @else
                                        <div class="mb-3">
                                            <input type="text" name="house" class="form-control" id="exampleInputEmail1" placeholder="Maison" value="{{old('house')}}">
                                        </div>
                                        @endif

                                        @error('house')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="text" name="routor_IP" class="form-control"  placeholder="Adresse IP du routeur" value="{{old('routor_IP')}}">
                                        </div>

                                        @error('routor_IP')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Afficahge sur les ordinateurs -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="my-btn bg-red float-end pack-submit mt-2 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                            <img src="../icons/preview.png" alt="" srcset="">
                                            Retour
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="my-btn bg-yellow pack-submit float-start mt-2 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                            Suivant
                                            <img src="../icons/Icon material-skip-next.png" alt="" srcset="">
                                        </button>
                                    </div>
                                </div>

                                <!-- Afficahge sur les mobile -->
                                <div class="row mt-2 d-md-none d-sm-block d-xs-block">
                                    <div class="col-md-6 text-center">
                                        <button type="submit" class="my-btn bg-red pack-submit-mobile mt-2">
                                            <img src="../icons/preview.png" width="25px" alt="" srcset="">
                                            Retour
                                        </button>
                                    </div>
                                    <div class="col-md-6 text-center mt-4">
                                        <button type="submit" class="my-btn bg-yellow pack-submit-mobile ">
                                            Suivant
                                            <img src="../icons/Icon material-skip-next.png" width="25px" alt="" srcset="">
                                        </button>
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