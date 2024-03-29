<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name','Laravel')}}</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>


@include('layouts.inc.header')
@include('layouts.inc.sidebar')

@yield('content')



   <!-- jquery vendor -->
   <script src="{{ asset('js/lib/jquery.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}" defer></script>
   <!-- nano scroller -->
   <script src="{{ asset('js/lib/menubar/sidebar.js') }}" defer></script>
   <script src="{{ asset('js/lib/preloader/pace.min.js') }}" defer></script>
   <!-- sidebar -->

   <script src="{{ asset('js/lib/bootstrap.min.js') }}" defer></script>
   <script src="{{ asset('js/scripts.js') }}" defer></script>
   <!-- bootstrap -->

   <script src="{{ asset('js/lib/calendar-2/moment.latest.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/calendar-2/pignose.calendar.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/calendar-2/pignose.init.js') }}" defer></script>


   <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/weather/weather-init.js') }}" defer></script>
   <script src="{{ asset('js/lib/circle-progress/circle-progress.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/circle-progress/circle-progress-init.js') }}" defer></script>
   <script src="{{ asset('js/lib/chartist/chartist.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/sparklinechart/jquery.sparkline.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/sparklinechart/sparkline.init.js') }}" defer></script>
   <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}" defer></script>
   <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}" defer></script>
   <!-- scripit init-->
   <script src="{{ asset('js/dashboard2.js') }}" defer></script>
</body>

</html>