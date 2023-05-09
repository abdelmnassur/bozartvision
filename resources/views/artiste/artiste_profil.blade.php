<x-artiste-basic>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Mon Profil </h1>
    </div>

    <div class="col-lg-12 mb-3">
        <div class="card border-left-primary">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profil Utilisateur</h6>
            </div>
            <div class="card-body">
                
                <div class="row">

                    <div class="col-lg-3">
                        <label> NOM : </label> 
                    </div>

                    <div class="col-lg-6">
                        <strong> {{ $artiste->user->nom }} </strong>
                    </div>

                    <div class="col-lg-3">
                        <button
                        onclick=""
                            class="btn">
                            <span>
                                <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </button>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> PRENOM : </label> 
                    </div>

                    <div class="col-lg-6">
                        <strong> {{ $artiste->user->prenom }} </strong>
                    </div>

                    <div class="col-lg-3">
                        <button
                        onclick=""
                            class="btn">
                            <span>
                                <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </button>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> GENRE : </label> 
                    </div>

                    <div class="col-lg-6">
                        <strong> {{ $artiste->user->genre }} </strong>
                    </div>

                    <div class="col-lg-3">
                        <button
                        onclick=""
                            class="btn">
                            <span>
                                <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </button>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> TELEPHONE : </label> 
                    </div>

                    <div class="col-lg-6">
                        <strong> {{ $artiste->user->telephone }} </strong>
                    </div>

                    <div class="col-lg-3">
                        <button
                        onclick=""
                            class="btn">
                            <span>
                                <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </button>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> EMAIL : </label> 
                    </div>

                    <div class="col-lg-6">
                        <strong> {{ $artiste->user->email }} </strong>
                    </div>

                    <div class="col-lg-3">
                        <button
                        onclick=""
                            class="btn">
                            <span>
                                <i class="fas fa-pen"></i>
                            </span>
                            <span class="text">Modifier</span>
                        </button>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> DATE DE NAISSANCE : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->user->date_de_naissanse )
                            <strong> {{ $artiste->user->date_de_naissanse }} </strong>
                        @endif
                        <strong> Date de naissance non définie </strong>
                    </div>

                    <div class="col-lg-3">
                        @if ( ! $artiste->user->date_de_naissanse )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> PHOTO DE PROFIL : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->user->photo )
                            <strong> {{ $artiste->user->photo }} </strong>
                        @endif
                        <strong> Photo de profil non définie ! </strong>
                    </div>

                    <div class="col-lg-3">

                        @if ( ! $artiste->user->photo )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif

                        
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card border-left-warning">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profil Artiste</h6>
            </div>

            <div class="card-body">
                
                <div class="row">

                    <div class="col-lg-3">
                        <label> <i  class="fa fa-facebook"></i> PAGE FACEBOOK : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->page_facebook )
                            <strong> {{ $artiste->page_facebook }} </strong>
                        @endif
                        <strong> Page facebook non définie ! </strong>
                    </div>

                    <div class="col-lg-3">

                        @if ( ! $artiste->page_facebook )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif

                        
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> PAGE TWITTER : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->page_twitter )
                            <strong> {{ $artiste->page_twitter }} </strong>
                        @endif
                        <strong> Page twitter non définie ! </strong>
                    </div>

                    <div class="col-lg-3">

                        @if ( ! $artiste->page_twitter )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif

                        
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> PAGE INSTAGRAM : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->page_instagram )
                            <strong> {{ $artiste->page_instagram }} </strong>
                        @endif
                        <strong> Page instagram non définie ! </strong>
                    </div>

                    <div class="col-lg-3">

                        @if ( ! $artiste->page_instagram )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif

                        
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> NUMERO WHATSAPP : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->numero_whatsapp )
                            <strong> {{ $artiste->numero_whatsapp }} </strong>
                        @endif
                        <strong> Numéro whatsapp non définie ! </strong>
                    </div>

                    <div class="col-lg-3">

                        @if ( ! $artiste->numero_whatsapp )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif

                        
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label> BIOGRAPHIE : </label> 
                    </div>

                    <div class="col-lg-6">
                        @if ( $artiste->biographie )
                            <strong> {{ $artiste->biographie }} </strong>
                        @endif
                        <strong class="non"> Biographie non définie ! </strong>
                    </div>

                    <div class="col-lg-3">

                        @if ( ! $artiste->biographie )

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </button>

                        @endif

                        
                    </div>

                </div>


            </div>
        </div>
    </div>

    <script>
        
    </script>
</x-artiste-basic>