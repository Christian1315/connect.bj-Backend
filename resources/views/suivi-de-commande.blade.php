<x-layourt1>

    <!-- BANNIERE -->
    <div class="row" id="folow_banner">
        <div class="col-md-12 px-0 mx-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/BANNIER PUB.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FORMULAIRE -->

    <div class="row" id="follow_form">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 box shadow-lg ">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title">Suivre une commande</h1>
                                <p class="commande-text">Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam.</p>
                                <!-- SUR LES ORDINATEURS -->
                                <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                    <div class="col-sm-12">

                                        <form action="/follow" method="POST">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="follow_code" class="form-control" placeholder="Code de suivi: ..." value="{{old('follow_code')}}">
                                                <button type="submit" class="input-group-text bg-green text-uppercase follow-submit" id="basic-addon2">suivre</button>
                                            </div>
                                            @error('follow_code')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                            <span class="">Le code de suivi est dans le mail de validation de commande.</span>
                                        </form>
                                    </div>
                                </div>

                                <!-- SUR LES MOBILES -->
                                <div class="row d-block d-md-none d-sm-block d-xs-block">
                                    <div class="col-12">
                                        <form action="/follow" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="email" name="follow_code" class="form-control" id="exampleInputEmail1" placeholder="Code" value="{{old('follow_code')}}">

                                                @error('follow_code')
                                                <div class="text-danger"> {{$message}} </div>
                                                @enderror
                                                <button type="submit" class="input-group-text bg-green text-uppercase follow-submit-mobile mt-2" id="basic-addon2">suivre</button>
                                            </div>
                                            <span class="">Le code de suivi est dans le mail de validation de commande.</span>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>



</x-layourt1>