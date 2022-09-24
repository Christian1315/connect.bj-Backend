<x-layourt2>
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
                                <form action="/contact" method="POST" class="my-3">
                                    @csrf
                                    <h1 class="contact-title">Nous contacter</h1>
                                    <h4 class="contact-48h">Nous répondons dans un délais de 48h.
                                    </h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" name="name" class="form-control" placeholder="Nom complet" value="{{old('name')}}">
                                            </div>

                                            @error('name')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">

                                                <input type="number" name="phone" class="form-control" placeholder="Téléphone" value="{{old('phone')}}">
                                            </div>

                                            @error('phone')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <select name="objet" class="form-select" value="{{old('objet')}}">
                                            <option value="">-- Objet --</option>
                                            <option value="Signaler un problème">Signaler un problème</option>
                                            <option value="Collaborer avec nous">Collaborer avec nous</option>

                                            @error('objet')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </select>

                                    </div>

                                    <div class="mb-3">
                                        <textarea name="message" class="form-control" placeholder="Votre message ici..." id="" cols="30" rows="6"></textarea>
                                    </div>

                                    @error('message')
                                    <div class="text-danger"> {{$message}} </div>
                                    @enderror
                                    <button type="submit" class="my-btn follow-submit mt-2 ">Envoyer</button>
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
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-2"></div> -->
                    <div class="col-12 box shadow-lg ">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/contact" method="POST" class="my-3">
                                    @csrf
                                    <h1 class="contact-title">Nous contacter</h1>
                                    <h4 class="contact-48h">Nous répondons dans un délais de 48h.
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <input type="text" name="name" class="form-control" placeholder="Nom complet" value="{{old('name')}}">
                                            </div>

                                            @error('name')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <input type="number" name="phone" class="form-control" placeholder="Téléphone" value="{{old('phone')}}">
                                            </div>

                                            @error('phone')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <select name="objet" class="form-select" value="{{old('objet')}}">
                                            <option value="">-- Objet --</option>
                                            <option value="Signaler un problème">Signaler un problème</option>
                                            <option value="Collaborer avec nous">Collaborer avec nous</option>

                                            @error('objet')
                                            <div class="text-danger"> {{$message}} </div>
                                            @enderror
                                        </select>

                                    </div>

                                    <div class="mb-3">
                                        <textarea name="message" class="form-control" placeholder="Votre message ici..." id="" cols="30" rows="6"></textarea>
                                    </div>

                                    @error('message')
                                    <div class="text-danger"> {{$message}} </div>
                                    @enderror
                                    <button type="submit" class="my-btn follow-submit mt-2 ">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-2"></div> -->
                </div>
            </div>
        </div>
    </div>
</x-layourt2>