<x-home-basic>
      <!-- slideshow start -->
      <div class="slideshow-section position-relative">
        <div class="slideshow-active activate-slider" data-slick='{
          "slidesToShow": 1, 
          "slidesToScroll": 1, 
          "dots": true,
          "arrows": true,
          "responsive": [
            {
              "breakpoint": 768,
              "settings": {
                "arrows": false
              }
            }
          ]
            }'>
            @foreach ( $oeuvres as $oeuvre )
                <div class="slide-item position-relative overlay">
                    <img width="1920" height="600" class="slide-img d-none d-md-block" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="slide-1">
                    <img width="1920" height="600" class="slide-img d-md-none" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="slide-1">
                    <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-start">
                        <div class="content-box slide-content py-4">
                        <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            {{ $oeuvre->titre }}
                        </p>
                        <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            bozartsvision
                        </h2>
                        
                        <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                            href="collection-left-sidebar.html" data-animation="animate__animated animate__fadeInUp">COMMANDEZ MAINTENANT</a>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="activate-arrows arrows-white"></div>
        <div class="activate-dots dots-white"></div>
      </div>
      <!-- slideshow end -->

    <!-- trusted badge start -->
    <div class="trusted-section mt-100 overflow-hidden">
        <div class="trusted-section-inner">
            <div class="container">
                <div class="row justify-content-center trusted-row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge bg-trust-1 rounded">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{ asset('template1/img/trusted/1.png') }}" alt="icon-1">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Free Shipping & Return</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">On all order over
                                    $99.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge bg-trust-2 rounded">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="template1/img/trusted/2.png" alt="icon-2">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Customer Support 24/7</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">Instant access to
                                    support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge bg-trust-3 rounded">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="template1/img/trusted/3.png" alt="icon-3">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">100% Secure Payment</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">We ensure secure
                                    payment!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trusted badge end -->

    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading">RECENTS</h2>
                </div>
                <div class="row">
                    @foreach ( $oeuvres as $oeuvre )
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="{{ route('showOeuvre',$oeuvre->id ) }}">
                                        <img class="secondary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}"
                                            alt="product-img">
                                        <img class="primary-img" src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}"
                                            alt="product-img">
                                    </a>

                                    <div class="product-badge">
                                        <span class="badge-label badge-new rounded">Featured</span>
                                        <span class="badge-label badge-percentage rounded">-44%</span>
                                    </div>

                                    <div class="product-card-action product-card-action-2 justify-content-center">
                                        <a href="#quickview-modal" class="action-card action-quickview"
                                            data-bs-toggle="modal">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-card-details">
                                    <h3 class="product-card-title">
                                        <a href="collection-left-sidebar.html">Best trucker</a>
                                    </h3>
                                    <div class="product-card-price">
                                        <span class="card-price-regular">$1529</span>
                                        <span class="card-price-compare text-decoration-line-through">$1759</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                    <a class="btn-primary" href="#">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- collection end -->
</x-home-basic>