<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Donation Management System - @yield('title', 'Home')</title>
      <link
         rel="apple-touch-icon"
         sizes="180x180"
         href="./assets/images/favicons/apple-touch-icon.png"
      />
      <link
         rel="icon"
         type="image/png"
         sizes="32x32"
         href="./assets/images/favicons/favicon-32x32.png"
      />
      <link
         rel="icon"
         type="image/png"
         sizes="16x16"
         href="./assets/images/favicons/favicon-16x16.png"
      />
      <!-- <link rel="manifest" href="./assets/images/favicons/site.webmanifest" /> -->

      <!-- Fonts-->
      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link
         href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap"
         rel="stylesheet"
      />

      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link
         href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
         rel="stylesheet"
      />

      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link
         href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet"
      />

      <!-- Css-->
      <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }} " />
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}" />

      <link
         rel="stylesheet"
         href=" {{ asset('assets/css/jquery.mCustomScrollbar.min.css') }} "
      />
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }} " />
      <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/asting.css') }}" />
      {{-- Template styles ->--}}
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
   </head>

   <body>
      <div class="preloader">
         <img
            src="{{ asset('assets/images/loader.png') }}"
            class="preloader__image"
            alt=""
         />
      </div>
      <!-- /.preloader -->

      <div class="page-wrapper">
         @include('public.layouts.components.navbar')
         @yield('content')
         @include('public.layouts.components.footer')
      </div>
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
      <script src="{{ asset('assets/js/wow.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
      <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
      <script src="{{ asset('assets/js/typed-2.0.11.js') }}"></script>
      <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
      <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
      <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
      <script src="{{ asset('assets/js/isotope.js') }}"></script>
      <script src="{{ asset('assets/js/appear.js') }}"></script>
      <script src="{{ asset('assets/js/jarallax.js') }}"></script>

      <!-- template scripts -->
      <script src="{{ asset('assets/js/theme.js') }}"></script>

   </body>
</html>
