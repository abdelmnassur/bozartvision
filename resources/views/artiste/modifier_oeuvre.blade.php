<x-form>
    <div class="container-pt6" style="padding-top: 20px">
        <div class="section__content section__content--p15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                     <form action="{{ route('oeuvre_register') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card">

                            <div class="card-header">
                                <strong>Modifier ( mise à jour ) une oeuvre d'art</strong>
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
                                                    <input class="au-input au-input--full" value="{{ $oeuvre->titre }}" type="text" name="titre" placeholder="Titre de l'oeuvre" value="{{ old('titre') }}">
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
                                                        <option value="{{ $oeuvre->categorie->id }}">{{ $oeuvre->categorie->categorie }}</option>
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
                                                    <input class="au-input au-input--full" value="{{ $oeuvre->prix }}" id="prix" type="number" name="prix" placeholder="Le prix de l'oeuvre" value="{{ old('prix') }}">
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
                                                    <textarea class="au-input au-input--full" value="{{ $oeuvre->description }}" type="text" name="description" rows="4" placeholder="Description de l'oeuvre" value="{{ old('description') }}"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        {{-- <div class="col col-lg-1">

                                        </div> --}}
                                        <hr>

                                        <div class="col col-lg-6">

                                            <div class="row form-group">
                                                @error('nombre_exemplaire')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Exemplaire</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input class="au-input au-input--full" type="number" value="{{ $oeuvre->nombre_exemplaire }}" name="nombre_exemplaire" placeholder="Nombre d'exemplaire de l'oeuvre" value="{{ old('nombre_exemplaire') }}">
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
                                                    <input class="au-input au-input--full" value="{{ $oeuvre->largeur }}" type="number" name="largeur" placeholder="Largeur" value="{{ old('largeur') }}">
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
                                                    <input class="au-input au-input--full" type="number" value="{{ $oeuvre->longeur }}" name="longeur" placeholder="Longeur" value="{{ old('longeur') }}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Image de l'oeuvre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="">
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
    {{-- <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">

                        <p style="font-size: 20px; font-weight: bold">Ajouter une oeuvre d'art</p>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('oeuvre_register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                        
                            <div class="form-group">
                                @error('titre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Titre</label>
                                <input class="au-input au-input--full" type="text" name="titre"
                                    placeholder="Titre de l'oeuvre" value="{{ old('titre') }}">
                            </div>

                            <div class="form-group">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Description</label>
                                <textarea class="au-input au-input--full" type="text" name="description" placeholder="Description de l'oeuvre" value="{{ old('description') }}"></textarea>
                            </div>

                            <div class="form-group">
                                @error('categorie_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Categorie</label>
                                <select name="categorie_id" id="categorie_id" class="form-control" required
                                    value="{{ old('categorie_id') }}">
                                    <option value="">Sélectinonnez la categorie</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                @error('prix')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Prix</label>
                                <input class="au-input au-input--full" id="prix" type="number" name="prix"
                                    placeholder="Le prix de l'oeuvre" value="{{ old('prix') }}">
                            </div>

                            <div class="form-group">
                                @error('largeur')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Largeur</label>
                                <input class="au-input au-input--full" type="number" name="largeur"
                                    placeholder="Largeur" value="{{ old('largeur') }}">
                            </div>

                            <div class="form-group">
                                @error('longeur')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Longeur</label>
                                <input class="au-input au-input--full" type="number" name="longeur"
                                    placeholder="Longeur" value="{{ old('longeur') }}">
                            </div>

                            <div class="form-group">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <label>Image</label>
                                <input class="au-input au-input--full" type="file" id="image" name="image"
                                    placeholder="Image de l'oeuvre" value="{{ old('image') }}">
                            </div>

                            <button class="au-btn au-btn--block au-btn--green m-b-20"
                                type="submit">ENREGISTRER</button>
                            <button class="au-btn au-btn--block au-btn--red m-b-20" type="">ANNULER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-form>
