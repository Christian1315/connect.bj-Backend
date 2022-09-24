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

    <!-- °°°°°° SUR LES ORDINATEURS-->
    <div class="row d-none d-md-block d-lg-block" id="sign-up">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 box shadow-lg ">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/sign-up" method="POST">
                                    @csrf
                                    <h1 class="title">Créez un compte</h1>
                                    <h4 class="question">Déjà un utilisateur ? <a href="/connexion" class="login text-green">Se
                                            connecter</a>
                                    </h4>

                                    <h3 class="infos text-red">Informations générales</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}">

                                                @error('firstname')
                                                <div class="text-danger"> {{$message}} </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Last Name" value="{{old('lastname')}}">

                                                @error('lastname')
                                                <div class="text-danger"> {{$message}} </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">

                                        <input type="email" name="email" class="form-control" placeholder="Email Adresse" value="{{old('email')}}">

                                        @error('email')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" id="password" class="my-form-control" placeholder="Password" value="{{old('password')}}">
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>

                                        @error('password')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le password" >
                                        @error('password_confirmation')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                    <h3 class="infos text-red">Informations générales</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="country" class="form-control" placeholder="Pays" value="{{old('country')}}">

                                                @error('country')
                                                <div class="text-danger"> {{$message}} </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="city" class="form-control" placeholder="Ville" value="{{old('city')}}">

                                                @error('city')
                                                <div class="text-danger"> {{$message}} </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="house" class="form-control" placeholder="Quartier/Maison" value="{{old('house')}}">

                                        @error('house')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="{{old('phone')}}">

                                        @error('phone')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror

                                    </div>
                                    <div class="form-check d-flex">
                                        <input class="form-check-input" name="checkbox1" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            J'acceptes les conditions d'utilisation
                                        </label>
                                        @error('checkbox1')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror

                                    </div>
                                    <div class="form-check mt-3 d-flex">
                                        <input class="form-check-input" name="checkbox2" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Je souhaites recevoir les mails marketing
                                        </label>

                                        @error('checkbox2')
                                        <div class="text-danger"> {{$message}} </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="my-btn follow-submit mt-2">S'inscrire</button>
                                </form>
                            </div>
                            <div class="col-md-6" style="position: relative;">
                                <img src="illustrations/Illustration.png" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- °°°°°° SUR LES PHONES  & TABLETTES -->

    <div class="row d-block d-md-none d-sm-block d-xs-block" id="sign-up">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 box shadow-lg ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <form action="/sign-up" method="POST">
                                        @csrf
                                        <h1 class="title">Créez un compte</h1>
                                        <h4 class="question">Déjà un utilisateur ? <a href="/connexion" class="login text-green">Se
                                                connecter</a>
                                        </h4>

                                        <h3 class="infos text-red">Informations générales</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}">

                                                    @error('firstname')
                                                    <div class="text-danger"> {{$message}} </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Last Name" value="{{old('lastname')}}">

                                                    @error('lastname')
                                                    <div class="text-danger"> {{$message}} </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">

                                            <input type="email" name="email" class="form-control" placeholder="Email Adresse" value="{{old('email')}}">

                                            @error('email')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <input type="password" name="password" id="password-mobile" class="my-form-control" placeholder="Password" value="{{old('password')}}">
                                            <i class="bi bi-eye-slash" id="togglePassword-mobile"></i>

                                            @error('password')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le password" value="{{old('password_confirmation')}}">

                                            @error('password_confirmation')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>
                                        <h3 class="infos text-red">Informations générales</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <input type="text" name="country" class="form-control" placeholder="Pays" value="{{old('country')}}">

                                                    @error('country')
                                                    <div class="text-danger"> {{$message}} </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <input type="text" name="city" class="form-control" placeholder="Ville" value="{{old('city')}}">

                                                    @error('city')
                                                    <div class="text-danger"> {{$message}} </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="house" class="form-control" placeholder="Quartier/Maison" value="{{old('house')}}">

                                            @error('house')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror

                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="{{old('phone')}}">

                                            @error('phone')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror

                                        </div>
                                        <div class="form-check d-flex">
                                            <input class="form-check-input" name="checkbox1" type="checkbox" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                J'acceptes les conditions d'utilisation
                                            </label>
                                            @error('checkbox1')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror

                                        </div>
                                        <div class="form-check mt-3 d-flex">
                                            <input class="form-check-input" name="checkbox2" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Je souhaites recevoir les mails marketing
                                            </label>

                                            @error('checkbox2')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="my-btn follow-submit mt-2">S'inscrire</button>
                                    </form>
                                </div>
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