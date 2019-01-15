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
      <div class="page-wrapper">
         <!-- HEADER MOBILE-->
         <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
               <div class="container-fluid">
                  <div class="header-mobile-inner">
                     <a class="logo" href="index.html">
                     <img src="{{url('/')}}/img/iberoschool2.png" alt="CoolAdmin" />
                     </a>
                     <button class="hamburger hamburger--slider" type="button">
                     <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                     </span>
                     </button>
                  </div>
               </div>
            </div>
            <nav class="navbar-mobile">
               <div class="container-fluid">
                  <ul class="navbar-mobile__list list-unstyled">
                     <li class="has-sub">
                        <a class="js-arrow" href="{{url('/')}}/admin/">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     </li>
                     <li class="has-sub">
                        <a class="js-arrow" href="{{url('/')}}/admin/usuarios">
                        <i class="fas fa-users"></i>Usuarios</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/blog-detalle">
                        <i class="fas fa-chart-bar"></i>Blogs</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/cursos">
                        <i class="fas fa-table"></i>Cursos</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/logs-email">
                        <i class="far fa-check-square"></i>Logs de Emails</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/chart">
                        <i class="far fa-chart-bar"></i>Estadistica</a>
                     </li>
                     <li>
                        <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- END HEADER MOBILE-->
         <!-- MENU SIDEBAR-->
         <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
               <a href="#">
               <img src="{{url('/')}}/img/iberoschool2.png" alt="Cool Admin" />
               </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
               <nav class="navbar-sidebar">
                  <ul class="list-unstyled navbar__list">
                     <li class="has-sub">
                        <a class="js-arrow" href="{{url('/')}}/admin/">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     </li>
                     <li class="has-sub">
                        <a class="js-arrow" href="{{url('/')}}/admin/usuarios">
                        <i class="fas fa-users"></i>Usuarios</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/blog-detalle">
                        <i class="fas fa-chart-bar"></i>Blog</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/cursos">
                        <i class="fas fa-table"></i>Cursos</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/logs-mail">
                        <i class="far fa-check-square"></i>Logs de Emails</a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/admin/chart">
                        <i class="far fa-chart-bar"></i>Estadistica</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </aside>
         <!-- END MENU SIDEBAR-->
         <!-- PAGE CONTAINER-->
         <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
               <div class="section__content section__content--p30">
                  <div class="container-fluid">
                     <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                           <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                           <button class="au-btn--submit" type="submit">
                           <i class="zmdi zmdi-search"></i>
                           </button>
                        </form>
                        <div class="header-button">
                           <div class="noti-wrap">
                              <div class="noti__item js-item-menu">
                                 <i class="zmdi zmdi-email"></i>
                                 <span class="quantity">1</span>
                                 <div class="email-dropdown js-dropdown">
                                    <div class="email__title">
                                       <p>You have 3 New Emails</p>
                                    </div>
                                    <div class="email__item">
                                       <div class="image img-cir img-40">
                                          <img src="{{url('/')}}/img/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                       </div>
                                       <div class="content">
                                          <p>Meeting about new dashboard...</p>
                                          <span>Cynthia Harvey, 3 min ago</span>
                                       </div>
                                    </div>
                                    <div class="email__item">
                                       <div class="image img-cir img-40">
                                          <img src="{{url('/')}}/img/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                       </div>
                                       <div class="content">
                                          <p>Meeting about new dashboard...</p>
                                          <span>Cynthia Harvey, Yesterday</span>
                                       </div>
                                    </div>
                                    <div class="email__item">
                                       <div class="image img-cir img-40">
                                          <img src="{{url('/')}}/img/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                       </div>
                                       <div class="content">
                                          <p>Meeting about new dashboard...</p>
                                          <span>Cynthia Harvey, April 12,,2018</span>
                                       </div>
                                    </div>
                                    <div class="email__footer">
                                       <a href="#">See all emails</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="account-wrap">
                              <div class="account-item clearfix js-item-menu">
                                 <div class="image">
                                    <img src="{{url('/')}}/img/icon/avatar-01.jpg" alt="John Doe" class="rounded-circle" />
                                 </div>
                                 <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                 </div>
                                 <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                       <div class="image">
                                          <a href="#">
                                          <img src="{{url('/')}}/img/icon/avatar-01.jpg" alt="John Doe" class="rounded-circle" />
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h5 class="name">
                                             <a href="#">john doe</a>
                                          </h5>
                                          <span class="email">johndoe@example.com</span>
                                       </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                       <div class="account-dropdown__item">
                                          <a href="{{url('/')}}/admin/account">
                                          <i class="zmdi zmdi-account"></i>Account</a>
                                       </div>
                                       <div class="account-dropdown__item">
                                          <a href="{{url('/')}}/admin/setting">
                                          <i class="zmdi zmdi-settings"></i>Settings</a>
                                       </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                       <a href="#">
                                       <i class="zmdi zmdi-power"></i>Log Out</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            @yield('contenido')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
         </div>
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
<!-- end document-->
