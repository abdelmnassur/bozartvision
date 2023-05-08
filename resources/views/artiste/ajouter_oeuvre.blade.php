<x-artiste-basic>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Ajouter une oeuvre d'art </h1>
    </div>

    <div class="row">

        <form class="col-lg-12 mb-3" action="{{ route('oeuvre_register') }}" method="POST" enctype="multipart/form-data">
            <div class="card border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter une œuvre d'art</h6>
                </div>

                <div class="card-body">

                    @csrf
                    @method('post')

                    <div class="row">

                        <div class="col col-lg-5">

                            <div class="row form-group">

                                @error('titre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="titre" class="form-control-label">Titre</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="text" name="titre" id="titre" placeholder="Titre de l'oeuvre" value="{{ old('titre') }}">
                                </div>

                            </div>

                            <div class="row form-group">

                                @error('categorie_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="categorie_id" class=" form-control-label">Categorie</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="categorie_id" id="categorie_id" class="form-control" required
                                        value="{{ old('categorie_id') }}">
                                        <option value="">Sélectinonnez la categorie</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>

                            <div class="row form-group">

                                @error('prix')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="prix" class="form-control-label">Prix</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="text" name="prix" id="prix" placeholder="Le prix en dollar US" value="{{ old('prix') }}">
                                </div>

                            </div>

                            <div class="row form-group">

                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="image" class="form-control-label">Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="file" name="image" id="image" placeholder="image de l'oeuvre " value="{{ old('image') }}">
                                </div>

                            </div>

                        </div>
                        
                        <div class="col col-lg-1"></div>

                        <div class="col col-lg-6">
                            
                            <div class="row form-group">

                                @error('nombre_exemplaire')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="nombre_exemplaire" class="form-control-label">Exemplaires</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="number" name="nombre_exemplaire" id="nombre_exemplaire" placeholder="Nombre d'exemplaire de l'oeuvre" value="{{ old('nombre_exemplaire') }}">
                                </div>

                            </div>

                            <div class="row form-group">

                                @error('largeur')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="largeur" class="form-control-label">Largeur</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="number" name="largeur" id="largeur" placeholder="Largeur en cm" value="{{ old('largeur') }}">
                                </div>

                            </div>

                            <div class="row form-group">

                                @error('longeur')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="longeur" class="form-control-label">Hauteur</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="number" name="longeur" id="longeur" placeholder="Hauteur en cm" value="{{ old('longeur') }}">
                                </div>

                            </div>

                            <div class="row form-group">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="description" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea class="form-control" type="text" name="description" id="description" rows="8" placeholder="Description de l'oeuvre" value="{{ old('description') }}"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-check"></i> Enregistre
                    </button>
                    <a href="{{ route('mes_oeuvres') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Annuler
                    </a>
                </div>
            </div>        
        </form>

    </div>
</x-artiste-basic>

{{-- <x-form>
    <div class="container-pt6" style="padding-top: 20px">
        <div class="section__content section__content--p15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                    <form action="{{ route('oeuvre_register') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card">

                            <div class="card-header">
                                <strong>Ajouter une oeuvre d'art</strong>
                            </div>

                            <div class="card-body card-block">

                               
                                    
                                    @csrf
                                    @method('post')
                                    
                                    <div class="row">

                                        <div class="col col-lg-6">
                                            <div class="row form-group">
                                                @error('titre')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Titre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" type="text" name="titre" placeholder="Titre de l'oeuvre" value="{{ old('titre') }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('categorie_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Categorie</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="categorie_id" id="categorie_id" class="form-control" required
                                                        value="{{ old('categorie_id') }}">
                                                        <option value="">Sélectinonnez la categorie</option>
                                                        @foreach ($categories as $categorie)
                                                            <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('prix')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Prix</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" id="prix" type="number" name="prix" placeholder="Le prix de l'oeuvre" value="{{ old('prix') }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="au-input au-input--full" type="text" name="description" rows="4" placeholder="Description de l'oeuvre" value="{{ old('description') }}"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        

                                        <div class="col col-lg-6">

                                            <div class="row form-group">
                                                @error('nombre_exemplaire')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Exemplaire</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" type="number" name="nombre_exemplaire" placeholder="Nombre d'exemplaire de l'oeuvre" value="{{ old('nombre_exemplaire') }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('largeur')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Largeur</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" type="number" name="largeur" placeholder="Largeur" value="{{ old('largeur') }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('longeur')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Longeur</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" type="number" name="longeur" placeholder="Longeur" value="{{ old('longeur') }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" type="file" id="image" name="image" placeholder="Image de l'oeuvre" value="{{ old('image') }}">
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>

                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Enregistre
                                </button>
                                <a href="{{ route('mes_oeuvres') }}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Annuler
                                </a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-form> --}}
