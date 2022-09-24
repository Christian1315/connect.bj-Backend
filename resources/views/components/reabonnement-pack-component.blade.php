<div {{$attributes->merge(['class' => 'block-content block-content-reabonnement'])}}>
    @props(['pack'])

    @if($pack->pack_type=='Premium')

    <!-- Affichage sur ordinateurs -->
    <h1 class="text-white title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
        {{$pack->pack_type}}
    </h1>

    <!-- Affichage sur mobile -->
    <h1 class="text-white title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
        {{$pack->pack_type}}
    </h1>

    <!-- Affichage sur ordinateurs -->
    <h3 class="text-white price text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
        ${{$pack->pack_price}}</h3>

    <!-- Affichage sur mobile -->
    <h3 class="text-white price-mobile text-uppercase d-md-none d-sm-block d-xs-block">
        ${{$pack->pack_price}}</h3>

    @else
    <!-- Affichage sur ordinateurs -->
    <h1 class="title text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
        {{$pack->pack_type}}
    </h1>

    <!-- Affichage sur mobile -->
    <h1 class="title-mobile text-uppercase d-md-none d-sm-block d-xs-block">
        {{$pack->pack_type}}
    </h1>

    <!-- Affichage sur ordinateurs -->
    <h3 class="price text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">
        ${{$pack->pack_price}}</h3>

    <!-- Affichage sur mobile -->
    <h3 class="price-mobile text-uppercase d-md-none d-sm-block d-xs-block">
        ${{$pack->pack_price}}</h3>

    @endif

    <ul class="">
        @php
        $pack_description = explode(',',$pack->pack_description)
        @endphp

        @foreach($pack_description as $description)
        <li class="">{{$description}}</li>
        @endforeach
    </ul>


    @if($pack->pack_type=='Premium')
    <div class="row">
        <div class="col-12 text-center">
            <!-- Affichage sur ordinateurs -->
            <a href="/reabonnement1" class="bg-green text-white my-btn text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">s'abonner</a>

            <!-- Affichage sur mobile -->
            <a href="/reabonnement1" class="bg-green text-white mobile my-btn text-uppercase d-md-none d-sm-block d-xs-block">s'abonner</a>
        </div>
    </div>

    @else

    <div class="row">
        <div class="col-12 text-center">
            <!-- Affichage sur ordinateurs -->
            <a href="/reabonnement1" class="my-btn text-uppercase d-none d-xs-none d-sm-none d-md-block d-lg-block">s'abonner</a>

            <!-- Affichage sur mobile -->
            <a href="/reabonnement1" class="mobile my-btn text-uppercase d-md-none d-sm-block d-xs-block">s'abonner</a>
        </div>
    </div>
    @endif
</div>