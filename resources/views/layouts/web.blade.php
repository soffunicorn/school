<!DOCTYPE html>
<html lang="en-USA">

<head>
    <title>Íbero Spanish School | Spanish made easy!</title>

    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="TechMov">
    <meta name="theme-color" content="#0079ba">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png" />
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png" />

    <!--Import fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!--Import css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/mobile.css')}}" media="screen,projection" />

    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <!-- Import js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    @yield('header')
</head>

<body class="white">
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
      @yield('banner')
    </div>
        <div>
            @yield('content')
        </div>
  

    <div class="container footer">
        <div class="row">
            <div class="col-12">
                <p>Copyright © 1999 - <script>
                        document.write(new Date().getFullYear());

                    </script> Íbero Spanish School</p>
            </div>
        </div>
    </div>
    @yield('footer')
</body>
</html>
