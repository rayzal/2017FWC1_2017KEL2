<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paragon Hotel</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/bootstrap.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/bootstrap-responsive.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/style.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/pluton.css ')}}" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/jquery.cslider.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/jquery.bxslider.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('component1/css/animate.css ')}}" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('component1/images/ico/apple-touch-icon-144.png ')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('component1/images/ico/apple-touch-icon-114.png ')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('component1/images/apple-touch-icon-72.png ')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('component1/images/ico/apple-touch-icon-57.png ')}}">
        <link rel="shortcut icon" href="{{asset('component1/images/ico/favicon.ico ')}}">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="/" class="brand">
                        <img src="{{asset('component1/images/logo.png')}}" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#service">Pelayanan</a></li>
                            <li><a href="#portfolio">Kamar</a></li>
                            <li><a href="#about">About</a></li>
                            <!-- <li><a href="#clients">Clients</a></li>
                            <li><a href="#price">Price</a></li> -->
                            <li><a href="#contact">Contact</a></li>
                            
                            <!-- <li><p class="navbar-text">Already have an account?</p></li> -->
                            
                            <li class="dropdown" >
                            
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li>
                                         <div class="row">
                                                <div class="col-md-8">
                                                     <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                            <div class="form-group">
                                                                 <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                            </div>
                                                            <div class="form-group">
                                                                 <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                                 <div class="help-block text-right"><a href="">Lupa password ?</a></div>
                                                            </div>
                                                            <div class="form-group">
                                                                 <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                                            </div>
                                                            <div class="checkbox">
                                                                 <label>
                                                                 <input type="checkbox"> biarkan saya tetap masuk
                                                                 </label>
                                                            </div>
                                                     </form>
                                                </div>
                                                <div class="bottom text-center" style="color: #363636;">
                                                    pengguna baru? <a href="#"><b>Register</b></a>
                                                </div>
                                         </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider" style="padding-bottom: 250px;"s>
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <!-- Content Header (Page header) -->
                    <div style="margin-top: 3px; margin-bottom: 50px;">
                        <section>
                          <h1>
                            @yield('title')
                            <small>@yield('subtitle')</small>
                          </h1>
                          <!-- <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                          </ol> -->
                        </section>

                        <!-- Main content -->
                        <section class="content">

                        {{-- validasi --}}
                          @if(count($errors)>0)
                          <div class="alert alert-danger">
                          <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                          </ul>
                          </div>
                          @endif

                        @yield('content')
                        </section>
                    </div>
                        
                        <!-- /.content -->
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>



            <div id="contact" class="contact">
            <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container">
                    <div class="span9 center contact-info">
                        <p>Jl. Kuaro, Gunung Kelua, Samarinda Ulu, Gn. Kelua, Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75119</p>
                        <p class="info-mail">info@paragonhotel.co.id</p>
                        <p>Tel : (62-263) 5241110</p>
                        <p>Fax : (62-263) 5241112</p>
                        <div class="title">
                            <h3>Sosial Media Kami</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2017 Edited By Kelompok 2 C1 2015</p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="{{asset(' component1/js/jquery.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/jquery.mixitup.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/bootstrap.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/modernizr.custom.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/jquery.bxslider.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/jquery.cslider.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/jquery.placeholder.js ')}}"></script>
        <script type="text/javascript" src="{{asset(' component1/js/jquery.inview.js ')}}"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="{{asset(' component1/js/app.js ')}}"></script>
    </body>
</html>