<div class="row">
    @props(['fai'])
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
                                <p class="fai-description d-none d-xs-none d-sm-none d-md-block d-lg-block"> {{$fai->description}}</p>

                                <!-- Sur mobile -->
                                <p class="fai-description-mobile d-md-none d-sm-block py-3 d-xs-block">{{$fai->description}}</p>

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
    <div class="col-md-2"></div>
</div>