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
                        <button onclick="modifierNom({{ $artiste->user->id }}, '{{ $artiste->user->nom }}');"
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
                        <button onclick="modifierPrenom({{ $artiste->user->id }}, '{{ $artiste->user->prenom }}');"
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
                        <button onclick="modifierGenre({{ $artiste->user->id }}, '{{ $artiste->user->genre }}');"
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
                        <button onclick="modifierTelephone({{ $artiste->user->id }}, '{{ $artiste->user->telephone }}');"
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
                        <button onclick="modifierEmail({{ $artiste->user->id }}, '{{ $artiste->user->email }}');"
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
                            
                        @else
                            <strong class="text-danger"> Date de naissance non définie </strong>
                        @endif
                        
                    </div>

                    <div class="col-lg-3">
                        @if ( ! $artiste->user->date_de_naissanse )

                            <button onclick="modifierDate_de_naissance({{ $artiste->user->id }}, '{{ $artiste->user->date_de_naissanse }}');" class="btn">
                                <span>
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Définir</span>
                            </button>

                            @else

                            <button onclick="modifierDate_de_naissance({{ $artiste->user->id }}, '{{ $artiste->user->date_de_naissanse }}');" class="btn">
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
                        <strong class="text-danger" style="font-style: italic"> Photo de profil non définie ! </strong>
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

                <hr>

                <div class="row">

                    <div class="col-lg-3">
                        <label>PAGE FACEBOOK : </label> 
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

            </div>
        </div>
    </div>

    <script>
        function modifierNom(id, nom)
        {
            document.getElementById("id").setAttribute("value", id);
            $('#Nom').text(nom);
            $('#nomModal').modal('show');
        }

        function modifierPrenom(idP, prenom)
        {
            document.getElementById("idP").setAttribute("value", idP);
            $('#Prenom').text(prenom);
            $('#prenomModal').modal('show');
        }

        function modifierGenre(idG, genre)
        {
            document.getElementById("idG").setAttribute("value", idG);
            $('#Genre').text(genre);
            $('#genreModal').modal('show');
        }

        function modifierTelephone(idTEL, telephone)
        {
            document.getElementById("idTEL").setAttribute("value", idTEL);
            $('#Telephone').text(telephone);
            $('#telephoneModal').modal('show');
        }

        function modifierEmail(idE, email)
        {
            document.getElementById("idE").setAttribute("value", idE);
            $('#Email').text(email);
            $('#emailModal').modal('show');
        }

        function modifierDate_de_naissance(idDAT, date)
        {
            document.getElementById("idDAT").setAttribute("value", idDAT);
            $('#Date_de_naissance').text(date);
            $('#date_de_naissanceModal').modal('show');
        }

    </script>
</x-artiste-basic>

<!-- Modal Modification du nom d'utilisateur -->
<div class="modal fade" id="nomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE VOTRE NOM </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_nom') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="id" id="id">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="nom" class="form-control-label">NOM</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="text" name="nom" placeholder="Votre nom de famille" required=""> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modification du prénom d'utilisateur -->
<div class="modal fade" id="prenomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE VOTRE PRENOM </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_prenom') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idP" id="idP">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="prenom" class="form-control-label">PRENOM</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="text" name="prenom" placeholder="Votre prénom" required=""> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modification du genre d'utilisateur -->
<div class="modal fade" id="genreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE VOTRE GENRE </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_genre') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idG" id="idG">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="genre" class="form-control-label">GENRE</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="genre" class="form-control" >
                                    <option value="0">Sélectinonnez le genre</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modification du Numéro de téléphone d'utilisateur -->
<div class="modal fade" id="telephoneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE VOTRE PRENOM </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_telephone') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idTEL" id="idTEL">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="telephone" class="form-control-label">TELEPHONE</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="number" name="telephone" placeholder="Votre numéro de téléphone whatsapp" required=""> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modification du mail d'utilisateur -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE VOTRE PRENOM </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_email') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idE" id="idE">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="email" class="form-control-label">E-MAIL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="email" name="email" placeholder="Votre adresse email" required=""> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Définir la date de naissance d'utilisateur -->
<div class="modal fade" id="date_de_naissanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE VOTRE PRENOM </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_date_de_naissance') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idDAT" id="idDAT">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="date_de_naissanse" class="form-control-label">DATE DE NAISSANCE</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="date" name="date_de_naissanse" placeholder="Votre date de naissance" required=""> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>