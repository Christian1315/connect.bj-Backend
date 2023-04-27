<x-layourt1>

    <!-- BANNIERE -->
    <div class="row" id="folow_banner">
        <div class="col-md-12 px-0 mx-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/BANNIER PUB.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FORMULAIRE -->


    <!-- °°°°°° SUR LES ORDINATEURS-->
    <div class="row d-none d-md-block d-lg-block" id="login">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 box shadow-lg ">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/connexion" method="POST">
                                    @csrf
                                    <h1 class="title">Connectez-vous </h1>
                                    <h4 class="question">Pas de compte ? <a href="/sign-up" class="login text-green">S'inscrire</a>
                                    </h4>

                                    <div class="mb-3">
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{old('email')}}">

                                        @error('email')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" value="{{old('password')}}">

                                        @error('password')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="form-check mt-3 d-flex">
                                        <input class="form-check-input" name="accepted" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Gardez-moi connecté
                                        </label>

                                    </div>
                                    <!-- @error('accepted')
                                    <div class="text-danger"> {{$message}} </div>
                                    @enderror -->
                                    <button type="submit" class="my-btn follow-submit mt-2">Se connecter</button>
                                </form>
                            </div>
                            <div class="col-md-6" style="position: relative;">
                                <img src="illustrations/Illustration1.png" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- °°°°°° SUR LES PHONES  & TABLETTES -->

    <div class="row d-block d-md-none d-sm-block d-xs-block" id="login">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 box shadow-lg ">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/connexion" method="POST">
                                    @csrf
                                    <h1 class="title">Connectez-vous </h1>
                                    <h4 class="question">Pas de compte ? <a href="/sign-up" class="login text-green">S'inscrire</a>
                                    </h4>

                                    <div class="mb-3">
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{old('email')}}">

                                        @error('email')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" value="{{old('password')}}">

                                        @error('password')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="form-check mt-3 d-flex">
                                        <input class="form-check-input" name="accepted" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Gardez-moi connecté
                                        </label>

                                    </div>
                                    <!-- @error('accepted')
                                    <div class="text-danger"> {{$message}} </div>
                                    @enderror -->
                                    <button type="submit" class="my-btn follow-submit mt-2">Se connecter</button>
                                </form>
                            </div>
                            <!-- <div class="col-md-6" style="position: relative;">
                                    <img src="illustrations/Illustration.png" alt="" srcset="">
                                </div> -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</x-layourt1>