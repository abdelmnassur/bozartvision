<x-artiste-basic>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Mon Profil </h1>
    </div>

    <div class="row">

        <div class="col-lg-6 mb-3">
            <div class="card border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Utilisateur</h6>
                </div>
                <div class="card-body">
                    <label> Nom : <strong> {{ $artiste->user->nom }} </strong></label> <br>

                    <label> Prénom(s) : <strong> {{ $artiste->user->prenom }} </strong></label><br>

                    @if ( ! $artiste->user->date_de_naissanse   )
                        @else
                        <label><strong> {{ $artiste->user->date_de_naissanse }} </strong></label><br>
                    @endif 

                    <label> Genre : <strong> {{ $artiste->user->genre }} </strong></label><br>

                    <label> Téléphone : <strong> {{ $artiste->user->telephone }} </strong></label><br>

                    <label> Email : <strong> {{ $artiste->user->email}} </strong></label><br>

                    @if ( ! $artiste->user->status   )
                        <label> Status : <strong> <div class="btn btn-danger btn-icon-split"> <span class="icon"> <i class="fas fa-plus"></i> </span> <span class="text">Désactiver</span></div>  </strong> </label><br>
                        @else
                        <label> Status : <strong> <div class="btn btn-success btn-icon-split"> <span class="icon"> <i class="fas fa-check"></i> </span> <span class="text">Activer</span></div>  </strong> </label><br>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-left-warning">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Artiste</h6>
                </div>
                <div class="card-body text-center">
                    
                </div>
            </div>
        </div>
        
    </div>
    

</x-artiste-basic>