<x-artiste-basic>
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Détail / Modification de l'œuvre {{ $oeuvre->titre }}</h1>
    </div>

    <div class="row">

        <div class="col-lg-12 mb-3">
            <div class="card border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Détail / Modification de l'œuvre {{ $oeuvre->titre }}</h6>
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-4">
                            <label> TITRE : </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->titre }} </strong>
                        </div>

                        <div class="col-lg-2">
                            <button onclick="modifierTitre({{ $oeuvre->id }}, '{{ $oeuvre->titre }}');"
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

                        <div class="col-lg-4">
                            <label> PRIX en $ : </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->prix }} </strong>
                        </div>

                        <div class="col-lg-2">
                            <button onclick="modifierPrix({{ $oeuvre->id }}, '{{ $oeuvre->prix }}');"
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

                        <div class="col-lg-4">
                            <label> NOMBRE D'EXEMPLAIRE : </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->nombre_exemplaire }} </strong>
                        </div>

                        <div class="col-lg-2">
                            <button onclick="modifierNombreExemplaire({{ $oeuvre->id }}, '{{ $oeuvre->nombre_exemplaire }}');"
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

                        <div class="col-lg-4">
                            <label> DIMENSIONS : </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->largeur }}x{{ $oeuvre->longeur }} cm²</strong>
                        </div>

                        <div class="col-lg-2">
                            <button onclick="modifierDimension({{ $oeuvre->id }}, '{{ $oeuvre->largeur }}', '{{ $oeuvre->longeur }}');"
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

                        <div class="col-lg-4">
                            <label> DESCRIPTION : </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->description }}</strong>
                        </div>

                        <div class="col-lg-2">
                            <button onclick="modifierDescriptioon({{ $oeuvre->id }}, '{{ $oeuvre->description }}');"
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

                        <div class="col-lg-4">
                            <label> DATE DE PUPLICATION : </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->created_at->formatLocalized('%A %d %B %Y') }}</strong>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</x-artiste-basic>

<script>
    function modifierTitre(id, titre)
    {
        document.getElementById("id").setAttribute("value", id);
        $('#Titre').text(titre);
        $('#titreModal').modal('show');
    }

    function modifierPrix(idP, prix)
    {
        document.getElementById("idP").setAttribute("value", idP);
        $('#Prix').text(prix);
        $('#prixModal').modal('show');
    }

    function modifierNombreExemplaire(idNE, nombre_exemplaire)
    {
        document.getElementById("idNE").setAttribute("value", idNE);
        $('#Nombre_exemplaire').text(nombre_exemplaire);
        $('#nombre_exemplaireModal').modal('show');
    }

    function modifierDimension(idD, largeur, longeur)
    {
        document.getElementById("idD").setAttribute("value", idD);
        $('#Largeur').text(largeur);
        $('#Longeur').text(longeur);
        $('#dimensionModal').modal('show');
    }

    function modifierDescriptioon(idDES, description)
    {
        document.getElementById("idDES").setAttribute("value", idDES);
        $('#Description').text(description);
        $('#descriptionModal').modal('show');
    }
</script>

<!-- Modal Modification de Titre -->
<div class="modal fade" id="titreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DU TITRE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_titre') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="id" id="id">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="titre" class="form-control-label">Titre</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="text" name="titre" placeholder="Le nouveau titre" required=""> 
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

<!-- Modal Modification du Prix -->
<div class="modal fade" id="prixModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DU PRIX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_prix') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idP" id="idP">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="prix" class="form-control-label">Prix</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="number" name="prix" placeholder="Le nouveau prix de l'oeuvre en $ US" required=""> 
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

<!-- Modal Modification du Nombre d'exemplaire -->
<div class="modal fade" id="nombre_exemplaireModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DU NOMBRE D'EXEMPLAIRE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_nombre_exemplaire') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idNE" id="idNE">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="nombre_exemplaire" class="form-control-label">Exemplaire</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="number" name="nombre_exemplaire" placeholder="Nombre d'exemplaire" required=""> 
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

<!-- Modal Modification de largeur et longeur -->
<div class="modal fade" id="dimensionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DES DIMENSION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_dimension') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idD" id="idD">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="largeur" class="form-control-label">Largeur</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="number" name="largeur" placeholder="Largeur" required=""> 
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="longeur" class="form-control-label">Longeur</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="number" name="longeur" placeholder="Longeur" required=""> 
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

<!-- Modal Modification de la description -->
<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION DE LA DESCRIPTION </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_description') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idDES" id="idDES">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="description" class="form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="text" row="5" name="description" placeholder="Description de l'oeuvre" required=""> 
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