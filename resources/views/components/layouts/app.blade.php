<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="MIT: Your Business Solution" />
    <meta property="og:title" content="MIT: Your Business Solution" />
    <meta property="og:description" content="MIT: Your Business Solution" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('fav.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fav.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>
        {{ $title ?? '' }} MIT: Your Business Solution
    </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="js/html5shiv.min.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">

    @livewireStyles

</head>

<body id="bg" class="footer-fixed">
    <div class="page-wraper">
        {{-- <div id="loading-area"></div> --}}

        <!-- Content -->
        {{ $slot }}
        <!-- Content END-->
        <!-- Footer -->
        <livewire:footer />
        <!-- Footer END -->
        <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('') }}js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('') }}plugins/wow/wow.js"></script><!-- WOW JS -->
    <script src="{{ asset('') }}plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('') }}plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="{{ asset('') }}plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="{{ asset('') }}plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('') }}plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('') }}plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('') }}plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('') }}plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="{{ asset('') }}plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="{{ asset('') }}plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="{{ asset('') }}plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
    <script src="{{ asset('') }}js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('') }}js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('') }}js/dz.ajax.js"></script><!-- CONTACT JS  -->
    <script src="{{ asset('') }}plugins/skrollr/skrollr.js"></script><!-- OWL SLIDER -->
    @livewireScripts
    <script>
        // disable skrollr if the window is resized below 960px wide
        jQuery(window).on('load resize', function() {
            if (jQuery(window).width() > 1200) {
                skrollr.init({
                    forceHeight: false
                });
            } else {
                //skrollr.init().destroy(); // skrollr.init() returns the singleton created above
            }
        });
    </script>
</body>

</html>
