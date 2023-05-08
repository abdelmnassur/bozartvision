<x-artiste-basic>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Détail / Modification </h1>
    </div>

    <div class="row">

        <div class="col-lg-12 mb-3">
            <div class="card border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Détail / Modification sur l'œuvre {{ $oeuvre->titre }}</h6>
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

                        <div class="col-lg-4">
                            <label> PRIX en $ </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->prix }} </strong>
                        </div>

                        <div class="col-lg-2">
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

                        <div class="col-lg-4">
                            <label> NOMBRE D'EXEMPLAIRE </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->nombre_exemplaire }} </strong>
                        </div>

                        <div class="col-lg-2">
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

                        <div class="col-lg-4">
                            <label> DIMENSIONS </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->largeur }}x{{ $oeuvre->longeur }} cm²</strong>
                        </div>

                        <div class="col-lg-2">
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

                        <div class="col-lg-4">
                            <label> DESCRIPTION </label> 
                        </div>

                        <div class="col-lg-6">
                            <strong> {{ $oeuvre->description }}</strong>
                        </div>

                        <div class="col-lg-2">
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

                        <div class="col-lg-4">
                            <label> DATE DE PUPLICATION </label> 
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