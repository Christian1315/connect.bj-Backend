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
                <div class="col-md-4">
                    <div class="card rounded shadow border-3" style="width: 100%;">
                        <div class="card-body">
                            <img src="{{asset('img/fai_logo.png')}}" class="card-img-top rounded" alt="...">
                            <!-- DISPONIBLE -->
                            @if($result->status)
                            <button class="btn btn-sm bg-green my-2 text-white">Disponible</button>
                            @else
                            <!-- INDISPONIBLE -->
                            <button class="btn btn-sm bg-red my-2 text-white">Indisponible</button>
                            @endif

                            <!-- Sur ordinateurs -->
                            <div class="fai-titre d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                {{$result->name}}
                            </div>

                            <!-- Sur mobiles -->
                            <div class="fai-titre-mobile d-md-none d-sm-block py-3 d-xs-block">
                                {{$result->name}}
                            </div>


                            <!-- Sur ordinateurs -->
                            <div class="fai-description my-2 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                {{cut_text($result->description)}}
                            </div>



                            <!-- Sur mobile -->
                            <p class="fai-description-mobile d-md-none d-sm-block py-3 d-xs-block">
                                {{cut_text($result->description)}}
                            </p>

                            <!-- SUR ORDINATEURS -->
                            <a href="/fai-profil/{{$result->id}}" class="btn bg-green w-100 text-white text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">Visiter
                                la
                                fiche</a>

                            <!-- SUR MODILES -->
                            <a href="/fai-profil/{{$result->id}}" class="btn bouton-mobile bg-green w-100 text-white text-uppercase d-md-none d-sm-block d-xs-block">Visiter
                                la
                                fiche</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="row">
                    @foreach($fais as $fai)
                    <div class="col-md-4">
                        <div class="card rounded shadow border-3" style="width: 100%;">
                            <div class="card-body">
                                <img src="{{asset('img/fai_logo.png')}}" class="card-img-top rounded" alt="...">
                                <!-- DISPONIBLE -->
                                @if($fai->status)
                                <button class="btn btn-sm bg-green my-2 text-white">Disponible</button>
                                @else
                                <!-- INDISPONIBLE -->
                                <button class="btn btn-sm bg-red my-2 text-white">Indisponible</button>
                                @endif

                                <!-- Sur ordinateurs -->
                                <div class="fai-titre d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                    {{$fai->name}}
                                </div>

                                <!-- Sur mobiles -->
                                <div class="fai-titre-mobile d-md-none d-sm-block py-3 d-xs-block">
                                    {{$fai->name}}
                                </div>


                                <!-- Sur ordinateurs -->
                                <div class="fai-description my-2 d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                    {{cut_text($fai->description)}}
                                </div>



                                <!-- Sur mobile -->
                                <p class="fai-description-mobile d-md-none d-sm-block py-3 d-xs-block">
                                    {{cut_text($fai->description)}}
                                </p>

                                <!-- SUR ORDINATEURS -->
                                <a href="/fai-profil/{{$fai->id}}" class="btn bg-green w-100 text-white text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">Visiter
                                    la
                                    fiche</a>

                                <!-- SUR MODILES -->
                                <a href="/fai-profil/{{$fai->id}}" class="btn bouton-mobile bg-green w-100 text-white text-uppercase d-md-none d-sm-block d-xs-block">Visiter
                                    la
                                    fiche</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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