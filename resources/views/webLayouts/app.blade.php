<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('web') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('web') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">




  <!-- Bootstrap CSS File -->
  <link href="{{ asset('web') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('web') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('web') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('web') }}/lib/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('web') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{{ asset('web') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

 @include('webLayouts.nav')

 

    @yield('content')

 

  @include('webLayouts.footer')
 
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('web') }}/lib/jquery/jquery.min.js"></script>
  <script src="{{ asset('web') }}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{ asset('web') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('web') }}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('web') }}/lib/superfish/hoverIntent.js"></script>
  <script src="{{ asset('web') }}/lib/superfish/superfish.min.js"></script>
  <script src="{{ asset('web') }}/lib/wow/wow.min.js"></script>
  <script src="{{ asset('web') }}/lib/venobox/venobox.min.js"></script>
  <script src="{{ asset('web') }}/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('web') }}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('web') }}/js/main.js"></script>
 
</body>

</html>

