<!doctype html>
<html lang="fr" class="no-js">

    <head>
        <title>Bozartvision</title>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="meta description">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <!-- all css -->
        <style>
            :root {
                --primary-color: #00234D;
                --secondary-color: #F76B6A;

                --btn-primary-border-radius: 0.25rem;
                --btn-primary-color: #fff;
                --btn-primary-background-color: #00234D;
                --btn-primary-border-color: #00234D;
                --btn-primary-hover-color: #fff;
                --btn-primary-background-hover-color: #00234D;
                --btn-primary-border-hover-color: #00234D;
                --btn-primary-font-weight: 500;

                --btn-secondary-border-radius: 0.25rem;
                --btn-secondary-color: #00234D;
                --btn-secondary-background-color: transparent;
                --btn-secondary-border-color: #00234D;
                --btn-secondary-hover-color: #fff;
                --btn-secondary-background-hover-color: #00234D;
                --btn-secondary-border-hover-color: #00234D;
                --btn-secondary-font-weight: 500;

                --heading-color: #000;
                --heading-font-family: 'Poppins', sans-serif;
                --heading-font-weight: 700;

                --title-color: #000;
                --title-font-family: 'Poppins', sans-serif;
                --title-font-weight: 400;

                --body-color: #000;
                --body-background-color: #fff;
                --body-font-family: 'Poppins', sans-serif;
                --body-font-size: 14px;
                --body-font-weight: 400;

                --section-heading-color: #000;
                --section-heading-font-family: 'Poppins', sans-serif;
                --section-heading-font-size: 48px;
                --section-heading-font-weight: 600;

                --section-subheading-color: #000;
                --section-subheading-font-family: 'Poppins', sans-serif;
                --section-subheading-font-size: 16px;
                --section-subheading-font-weight: 400;
            }
        </style>

        <link href="{{ asset('template/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('template1/css/style.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('template1/css/vendor.css') }}" rel="stylesheet" media="all">
        
    </head>

    <body>
        <div class="body-wrapper">
            
            {{-- <!-- announcement bar start -->
            @include('inc.announcement-bar')
            <!-- announcement bar end --> --}}

            <!-- header start -->
            @include('inc.header')
            <!-- header end -->
            
            {{ $slot }}
            <!-- all js -->

            @include('inc.footer')


            <script src="{{ asset('template1/js/vendor.js') }}"></script>
            <script src="{{ asset('template1/js/main.js') }}"></script>
        </div>
    </body>
</html>