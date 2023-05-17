<x-basic>
    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Les oeuvres recents </h2>
                </div>

                <div class="row">

                    @foreach ($oeuvres as $oeuvre)
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="{{ route('showOeuvre',$oeuvre->id ) }}">
                                    <img width="300" height="400" class="secondary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="product-img">
                                    <img width="300" height="400" class="primary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="product-img">
                                </a>

                                {{-- @if ( $oeuvre->created_at->format('m') < 05 )
                                        <div class="product-badge">
                                            <span style="background-color: red" class="badge-label badge-percentage rounded">New</span>
                                        </div>
                                    @endif --}}

                            </div>
                            <div class="product-card-details">
                                <h3 class="product-card-title">
                                    <a href="{{ route('showOeuvre',$oeuvre->id ) }}">{{ $oeuvre->titre }}</a> <br>
                                    {{-- <div>{{ $oeuvre->categorie->categorie }}</div> --}}
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">${{ $oeuvre->prix}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
        <a class="btn-primary" href="{{ route('listeOeuvres') }}">VIEW ALL</a>
    </div>
    <!-- collection end -->
</x-basic>