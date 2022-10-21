<x-layourt1>

    <!-- BANNIERE -->
    <div class="row" id="fai-profil">
        <div class="col-md-12 px-0 mx-0">
            <div id="" class="" data-bs-ride="carousel">
                <div class="">
                    <div class="">
                        <img src="{{asset('img/BANNIER PUB.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION AFTER BANNER -->
    <div class="row" id="section-after-banner">
        <div class="col-md-12">
            <div class="container">
                <div class="col-md-12">
                    <!-- SUR LES ORDINATEURS -->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-center">
                                                <img src="{{asset('img/fai_profil.png')}}" alt="" srcset="">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="fai-name">{{$fai->name}}</div>

                                                <!-- DISPONIBLE -->
                                                @if($fai->status)
                                                <span class="bg-green text-green shadow rounded">.gg</span>
                                                <span class="status text-green">
                                                    Disponible</span>
                                                @else
                                                <!-- INDISPONIBLE -->
                                                <span class="bg-red text-red shadow rounded">.gg</span>
                                                <span class="status text-green">
                                                    Indisponible</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <a href="#comment-section" class="my-btn text-red text-center note float-end">Noter
                                                    ce FAI</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="mailto:{{$fai->email}}" class="my-btn text-center contact bg-green float-start">Nous
                                                    contacter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SUR LES MOBILES -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-md-none d-sm-block d-xs-block">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img src="{{asset('img/fai_profil.png')}}" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="fai-name">{{$fai->name}}</div>

                                                <!-- DISPONIBLE -->
                                                @if($fai->status)
                                                <span class="bg-green text-green shadow rounded">.gg</span>
                                                <span class="status text-green">
                                                    Disponible</span>
                                                @else
                                                <!-- INDISPONIBLE -->
                                                <span class="bg-red text-red shadow rounded">.gg</span>
                                                <span class="status text-green">
                                                    Indisponible</span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-12 text-center">
                                                <a href="#comment-section" class="my-btn text-red text-center note-mobile">Noter ce
                                                    FAI</a>
                                            </div>
                                            <div class="col-md-12 text-center mt-5">
                                                <a href="mailto:{{$fai->email}}" class="my-btn text-center contact-mobile bg-green">Nous
                                                    contacter</a>
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
    </div>

    <!-- QUI SOMMES-NOUS SECTION -->

    <div class="row" id="about-us">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mt-2">
                        <div class="row col">
                            <div class="col-12">
                                <!-- <h1 class="title">Qui sommes-nous ?</h1> -->

                                <!-- SUR LES ORDINATEURS -->
                                <h1 class="title d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                    Qui sommes-nous ?
                                </h1>

                                <!-- SUR LES MOBILES -->

                                <h1 class="title-mobile d-md-none d-sm-block d-xs-block">
                                    Qui sommes-nous ?
                                </h1>

                                <p class="content">
                                    {{$fai->description}}
                                    ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 mt-2">
                        <div class="row">
                            <div class="col">
                                <h1 class="info-title">Informations générales</h1>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img class="icon" src="{{asset('icons/Icon ionic-ios-pin.png')}}" alt="" srcset="">
                                        {{$fai->location}}
                                    </li>
                                    <li class="list-group-item">
                                        <img class="icon" src="{{asset('icons/Icon awesome-phone-alt.png')}}" alt="" srcset="">
                                        {{$fai->phone}}
                                    </li>
                                    <li class="list-group-item">
                                        <img class="icon" src="{{asset('icons/Icon ionic-md-mail.png')}}" alt="" srcset="">
                                        {{$fai->email}}
                                    </li>
                                    <li class="list-group-item">
                                        <img class="icon" src="{{asset('icons/Icon metro-earth.png')}}" alt="" srcset="">
                                        {{$fai->website}}
                                    </li>
                                    <li class="list-group-item">
                                        <img class="icon" src="{{asset('icons/Icon ionic-md-pricetags.png')}}" alt="" srcset="">
                                        {{$fai->price}}
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-7"></div>
                    <div class="col-md-1"></div>

                    <!-- SUR LES ORDINATEURS -->
                    <div class="col-md-4 stars col-start d-none d-xs-none d-sm-none d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-md-6 text-center d-flex">
                                @for ($i = 0; $i < $ratingValue; $i++) <img src="{{asset('icons/Icon awesome-star.png')}}" alt="" srcset="">
                                    @endfor
                            </div>
                            <div class="col-md-6 text-center">
                                <span>{{$ratingValue}} étoiles </span>
                                <span class="text-red"> Notes vérifiés </span>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- SUR LES MOBILES -->

                    <div class="col-md-4 stars-mobile col-start d-md-none d-sm-block d-xs-block">
                        <div class="row">
                            <div class="col-md-12 text-center d-flex">
                                @for ($i = 0; $i < $ratingValue; $i++) <img src="{{asset('icons/Icon awesome-star.png')}}" alt="" srcset="">
                                    @endfor
                                    <div class="text-center">
                                        <span> {{$ratingValue}} étoiles </span>
                                        <span class="text-red"> Notes vérifiés </span>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                        <h1 class="title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                            Que recherchez-vous ?</h1>

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
                                                    <h6 class="text-white mt-3">Etreprise</h6>
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
                        <div class="tab-content fai-profil-search" id="pills-tabContent">

                            <!-- °°°°°°°°°°° ENTREPRISE °°°°°°°°°°°°°°°°° -->
                            <div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab" tabindex="0">
                                <!-- ABONNEMENT -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <!-- Affichage sur ordinateurs -->
                                            <h1 class="company-action-title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                Nos Abonnements</h1>

                                            <!-- Affichage sur mobile -->
                                            <h1 class="company-action-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                                Nos Abonnements</h1>
                                            <div class="row">



                                                @foreach($fai->packs as $faiPack)
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            @php
                                                            $contentClass = $faiPack->pack_type=='Premium'? 'shadow block-content2': 'block-content1';
                                                            @endphp
                                                            <x-abonnement-pack-component :class="$contentClass" :singleFai="$fai" :pack="$faiPack"></x-abonnement-pack-component>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- REABONNEMENT -->

                                <div class="row" style="margin-top: 100px;">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <!-- Affichage sur ordinateurs -->
                                            <h1 class="company-action-title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                Nos Réabonnement</h1>

                                            <!-- Affichage sur mobile -->
                                            <h1 class="company-action-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                                Nos Réabonnement</h1>
                                            <div class="row">
                                                @foreach($fai->packs as $faiPack)
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            @php
                                                            $contentClass = $faiPack->pack_type=='Premium'? 'shadow block-content2': 'block-content1'
                                                            @endphp
                                                            <x-reabonnement-pack-component :class="$contentClass" :pack="$faiPack"></x-reabonnement-pack-component>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- °°°°°°°°°°°°°°°°°°° PARTICULIER °°°°°°°°°°°°°°°° -->
                            <div class="tab-pane fade" id="pills-particular" role="tabpanel" aria-labelledby="pills-particular-tab" tabindex="0">
                                <!-- ABONNEMENT -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <!-- Affichage sur ordinateurs -->
                                            <h1 class="company-action-title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                Nos Abonnements</h1>

                                            <!-- Affichage sur mobile -->
                                            <h1 class="company-action-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                                Nos Abonnements</h1>
                                            <div class="row">

                                                @foreach($fai->packs as $faiPack)
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            @php
                                                            $contentClass = $faiPack->pack_type=='Premium'? 'shadow block-content2': 'block-content1'
                                                            @endphp
                                                            <x-abonnement-pack-component :class="$contentClass" :pack="$faiPack"></x-abonnement-pack-component>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- REABONNEMENT -->

                                <div class="row" style="margin-top: 100px;">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <!-- Affichage sur ordinateurs -->
                                            <h1 class="company-action-title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                Nos Réabonnement</h1>

                                            <!-- Affichage sur mobile -->
                                            <h1 class="company-action-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                                                Nos Réabonnement</h1>
                                            <div class="row">
                                                @foreach($fai->packs as $faiPack)
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            @php
                                                            $contentClass = $faiPack->pack_type=='Premium'? 'shadow block-content2': 'block-content1'
                                                            @endphp
                                                            <x-reabonnement-pack-component :class="$contentClass" :pack="$faiPack"></x-reabonnement-pack-component>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
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

    <!-- SECTION COMMENTAIRE -->

    <div class="row" id="comment-section">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 form-content">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <hr style="width: 100%;text-align:center;color: black;height: 5px;">
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <!-- <h1 class="comment-title text-uppercase">LAISSER UN COMMENTAIRE</h1> -->

                        <h1 class="comment-title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
                            laisser un commentaire</h1>

                        <!-- Affichage sur mobile -->
                        <h1 class="comment-title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
                            laisser un commentaire</h1>
                        <form action="/comment" method="POST">
                            @csrf

                            <input type="hidden" name="faiId" value="{{$fai->id}}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="text" name="nom" class="form-control" placeholder="Votre nom .." value="{{old('nom')}}">
                                        @error('nom')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Votre email ici..." value="{{old('email')}}">

                                        @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="" style="margin-right:5px;">Votre note :</div>

                                <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" value="1" name="fai_rating" checked id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="fai_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="fai_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="fai_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="fai_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                </div>
                                @error('fai_rating')
                                <div class="text-danger">{{$message}} </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <textarea name="message" value="{{old('message')}}" class="form-control" placeholder="Votre commentaire ici…." id="" cols="30" rows="6"></textarea>

                                @error('message')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="text-center my-btn mt-2 text-uppercase bg-green text-white">Envoyer</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- PROBLEME SECTION -->
    <x-problem-section></x-problem-section>

    <!--  SECTION DES FAIS DISPONIBLES -->
    <div class="row fai-profil" id="fai-servers" style="margin-top: 100px">
        <div class="col-md-12">
            <!-- <h1 class="fai-profil-title">Découvrez d'autres FAIs disponibles</h1> -->
            <h1 class="fai-profil-title  d-none d-xs-none d-sm-none d-md-block d-lg-block">
                Découvrez d'autres FAIs disponibles</h1>

            <!-- Affichage sur mobile -->
            <h1 class="fai-profil-title-mobile d-md-none d-sm-block d-xs-block">
                Découvrez d'autres FAIs disponibles</h1>

            <!-- SEARCH RESULT -->

            <div class="row" id="fai_card">
                <div class="col-12">
                    <div class="container" uk-scrollspy="cls: uk-animation-fade; target: .fai-block; delay: 500; repeat: false">
                        <div class="row">
                            @foreach($fais as $fai)
                            <x-fai-component :fai="$fai"></x-fai-component>
                            @endforeach
                        </div>
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
            <!-- SECTION  BADGE-->
            <x-badge-component></x-badge-component>
        </div>
    </div>

</x-layourt1>