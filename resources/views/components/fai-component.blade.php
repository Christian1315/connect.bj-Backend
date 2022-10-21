<div class="col-md-4">
    @props(['fai'])
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