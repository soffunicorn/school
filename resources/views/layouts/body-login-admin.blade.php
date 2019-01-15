<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Title Page-->
      <title>Íbero Spanish School | Spanish made easy!</title>
      <!-- Favicon -->
      <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png" />
      <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png" />
      <!-- Fontfaces CSS-->
      <link href="{{asset('/css/font-face.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
      <!-- Bootstrap CSS-->
      <link href="{{asset('/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
      <!-- vendor CSS-->
      <link href="{{asset('/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
      <link href="{{asset('/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
      <!-- google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
      <!--Css heredado de la plantilla web-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" media="screen,projection" />
      <!-- Main CSS-->
      <link href="{{asset('/css/theme.css')}}" rel="stylesheet" media="all">
      <!-- Jquery JS-->
      <script src="{{asset('/vendor/jquery-3.2.1.min.js')}}"></script>
      @yield('header')
   </head>
   <body class="animsition">
        <nav class="navbar navbar-expand-lg social-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link social-link" href="/#"><i class="fab fa-whatsapp"></i> +54 9 11 3264-4289</a>
            </li>
            <li class="nav-item">
                <a class="nav-link social-link" href="{{route('web.contact')}}"><i class="far fa-envelope"></i> Contact us</a>
            </li>
        </ul>

        <ul class="navbar-nav  social-net">
            <li class="nav-item">
                <a class="nav-link social-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link social-link" href="#"><i class="fab fa-facebook"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link social-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link social-link" href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </nav>


    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand logo-a" href="{{route('web.home')}}">
            <img src="img/iberoschool2.png" class="img-logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link orange-link" href="{{route('web.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange-link" href="{{route('web.aboutus')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange-link" href="{{route('web.spanish.levels')}}">Spanish Levels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange-link" href="{{route('web.news')}}">News</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('web.apply')}}"><button type="button" class="btn btn-apply-nav">Apply now</button></a>
                </li>
            </ul>
        </div>
    </nav>
            <div>
            @yield('content')
       </div>
  

  
    <!-- Bootstrap JS-->
      <script src="{{asset('/vendor/bootstrap-4.1/popper.min.js')}}"></script>
      <script src="{{asset('/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
      <!-- vendor JS       -->
      <script src="{{asset('/vendor/slick/slick.min.js')}}"></script>
      <script src="{{asset('/vendor/wow/wow.min.js')}}"></script>
      <script src="{{asset('/vendor/animsition/animsition.min.js')}}"></script>
      <script src="{{asset('/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
      <script src="{{asset('/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('/vendor/counter-up/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('/vendor/circle-progress/circle-progress.min.js')}}"></script>
      <script src="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
      <script src="{{asset('/vendor/chartjs/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('/vendor/select2/select2.min.js')}}"></script>
      <!-- Main JS-->
      <script src="{{asset('/js/main.js')}}"></script>
      @yield('footer')
   </body>
</html>
