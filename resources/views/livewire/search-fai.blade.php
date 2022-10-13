<div>
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
                                                <form action="" method="POST" class="d-flex">
                                                    @csrf
                                                    <input class="form-control me-2 search-input" wire:model="name" placeholder="Nom du fournisseur..." aria-label="Search">
                                                    <button disabled class="my-btn search-boutton" type="submit">Recherche</button>
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

                @if(count($results)>0)
                    @foreach($results as $result)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>

                                    <div class="col-md-8">
                                        <div class="card mb-3 fai-section" style="max-width: 100%;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="{{asset('img/fai_logo.png')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">

                                                        <!-- Sur ordinateurs -->
                                                        <h3 class="fai-titre d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                            {{$result->name}}
                                                        </h3>

                                                        <!-- Sur mobiles -->
                                                        <div class="fai-titre-mobile d-md-none d-sm-block py-3 d-xs-block">
                                                            {{$result->name}}
                                                        </div>

                                                        <!-- Sur ordinateurs -->
                                                        <p class="fai-description d-none d-xs-none d-sm-none d-md-block d-lg-block">{{cut_text($result->description)}}</p>

                                                        <!-- Sur mobile -->
                                                        <p class="fai-description-mobile d-md-none d-sm-block py-3 d-xs-block">{{cut_text($result->description)}}</p>

                                                        <!-- sur ordinateurs -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <!-- DISPONIBLE -->
                                                                            @if($result->status)
                                                                            <div class="col-1 col-sm-1">
                                                                                <p class="dispo available float-start" title="Disponible">
                                                                                    <span></span>
                                                                                </p>
                                                                            </div>
                                                                            @else
                                                                            <!-- INDISPONIBLE -->
                                                                            <div class="col-1 col-sm-1">
                                                                                <p class="dispo buzy float-start" title="Indisponible">
                                                                                    <span></span>
                                                                                </p>
                                                                            </div>
                                                                            @endif

                                                                            <div class="col-11 col-sm-11">
                                                                                <a href="/fai-profil/{{$result->id}}" class="bouton bg-green text-uppercase float-start ">Visiter
                                                                                    la
                                                                                    fiche </a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- sur mobiles -->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-md-none d-sm-block py-3 d-xs-block">
                                                                    <div class="row">
                                                                        <!-- DISPONIBLE -->
                                                                        @if($result->status)
                                                                        <div class="col-md-6 text-center">
                                                                            <small class="text-green">Disponible</small> <br>
                                                                            <a href="/fai-profil/{{$result->id}}" class="bouton-mobile bg-green text-uppercase">Visiter
                                                                                la
                                                                                fiche </a>
                                                                        </div>
                                                                        @else
                                                                        <!-- INDISPONIBLE -->
                                                                        <div class="col-md-6 text-center">
                                                                            <small class="text-red">Occupé</small> <br>
                                                                            <a href="/fai-profil/{{$result->id}}" class="bouton-mobile bg-green text-uppercase">Visiter
                                                                                la
                                                                                fiche </a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($fais as $fai)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2"></div>

                                <div class="col-md-8">
                                    <div class="card mb-3 fai-section" style="max-width: 100%;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{asset('img/fai_logo.png')}}" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">

                                                    <!-- Sur ordinateurs -->
                                                    <h3 class="fai-titre d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                        {{$fai->name}}
                                                    </h3>

                                                    <!-- Sur mobiles -->
                                                    <div class="fai-titre-mobile d-md-none d-sm-block py-3 d-xs-block">
                                                        {{$fai->name}}
                                                    </div>

                                                    <!-- Sur ordinateurs -->
                                                    <p class="fai-description d-none d-xs-none d-sm-none d-md-block d-lg-block"> {{cut_text($fai->description)}}</p>

                                                    <!-- Sur mobile -->
                                                    <p class="fai-description-mobile d-md-none d-sm-block py-3 d-xs-block">{{cut_text($fai->description)}}</p>

                                                    <!-- sur ordinateurs -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                                                <div class="row">
                                                                    <div class="">
                                                                        <!-- DISPONIBLE -->
                                                                        @if($fai->status)
                                                                        <div class="col-1 col-sm-1">
                                                                            <p class="dispo available float-start" title="Disponible">
                                                                                <span></span>
                                                                            </p>
                                                                        </div>
                                                                        @else
                                                                        <!-- INDISPONIBLE -->
                                                                        <div class="col-1 col-sm-1">
                                                                            <p class="dispo buzy float-start" title="Indisponible">
                                                                                <span></span>
                                                                            </p>
                                                                        </div>
                                                                        @endif

                                                                        <div class="col-11 col-sm-11">
                                                                            <a href="/fai-profil/{{$fai->id}}" class="bouton bg-green text-uppercase float-start ">Visiter
                                                                                la
                                                                                fiche </a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- sur mobiles -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-md-none d-sm-block py-3 d-xs-block">
                                                                <div class="row">
                                                                    <!-- DISPONIBLE -->
                                                                    @if($fai->status)
                                                                    <div class="col-md-6 text-center">
                                                                        <small class="text-green">Disponible</small> <br>
                                                                        <a href="/fai-profil/{{$fai->id}}" class="bouton-mobile bg-green text-uppercase">Visiter
                                                                            la
                                                                            fiche </a>
                                                                    </div>
                                                                    @else
                                                                    <!-- INDISPONIBLE -->
                                                                    <div class="col-md-6 text-center">
                                                                        <small class="text-red">Occupé</small> <br>
                                                                        <a href="/fai-profil/{{$fai->id}}" class="bouton-mobile bg-green text-uppercase">Visiter
                                                                            la
                                                                            fiche </a>
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
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
</div>