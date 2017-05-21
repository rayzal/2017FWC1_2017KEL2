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
        <link rel="stylesheet" type="text/css" href="{{('component1/css/bootstrap.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/bootstrap-responsive.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/style.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/pluton.css ')}}" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/jquery.cslider.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/jquery.bxslider.css ')}}" />
        {{-- <link rel="stylesheet" type="text/css" href="{{(' component1/css/animate.css ')}}" /> --}}
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/bootstrap/css/bootstrap.min.css')}}"> -->
        <link rel="stylesheet" href="{{asset('component/Font-Awesome/css/font-awesome.min.css')}}">
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{(' component1/images/ico/apple-touch-icon-144.png ')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{(' component1/images/ico/apple-touch-icon-114.png ')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{(' component1/images/apple-touch-icon-72.png ')}}">

        <link rel="apple-touch-icon-precomposed" href="{{(' component1/images/ico/apple-touch-icon-57.png ')}}">
        <link rel="shortcut icon" href="{{(' component1/images/ico/favicon.ico ')}}">

    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="component1/images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li><a href="#contact">Contact Us</a></li>
                            
                            <!-- <li><p class="navbar-text">Already have an account?</p></li> -->
                            <li><p class="navbar-text">Sudah punya akun?</p></li>
                            <li class="dropdown" >

                            
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li>
                                         <div class="row">                                                
                                                <!-- anu -->
                                                <div class="clearfix"></div>
                                                <div class="col-md-4 col-md-offset-4">
                                                    @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    <div class="panel panel-default" style="margin-bottom: 5px;">
                                                        
                                                        {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Username</label>
                                                            <div class="col-sm-8">
                                                                {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Password</label>
                                                            <div class="col-sm-8">
                                                                {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                                                            </div>
                                                        </div>
                                                        <div style="width: 100%;text-align: right;">
                                                            <button class="btn btn-primary">    <i class="fa fa-lock"></i>Masuk</button>
                                                            <button type="reset" class="btn btn-danger">    <i class="fa fa-undo"></i>Ulangi</button>

                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>

                                                <!-- wes -->
                                                <div class="bottom text-center" style="color: #363636;">
                                                    pengguna baru? <a href="{{url('lamandaftartamu')}}"><b>Register</b></a>
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
            <div id="da-slider" class="da-slider" >
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <!-- Content Header (Page header) -->
                    <div class="clearfix"></div>
                    <div class="col-md-2 col-md-offset-4" >
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="panel panel-primary" style="margin-left: 100px;margin-right: 100px; margin-top: 50px; text-align: center; ">
                            <div class="panel-heading" style="text-align: center; margin-bottom:20px;" >
                                <strong>Register Tamu</strong>
                            </div>
                            {!! Form::open(['url'=>'tamu/register','class'=>'form-horizontal']) !!}
                            <div class="col-sm-6 form-group" >

                                <label class="col-sm-2 control-label" style=" text-align: right; width:38.5%; margin-left:15px;">Nama tamu</label>
                                <div class="col-sm-2" style="width:80%;">
                                {!! Form::text('nama_tamu',null,['class'=>'form-control','placeholder'=>"Nama tamu"]) !!}
                                </div>
                                </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label" style=" text-align: right; width:40%;">No Identitas tamu</label>
                                <div class="col-sm-10" style="width:80%;">
                                {!! Form::text('no_identitas_tamu',null,['class'=>'form-control','placeholder'=>"No Identitas tamu"]) !!}
                                </div>
                                </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label" style=" text-align: right; width:40%;">Alamat tamu</label>
                                <div class="col-sm-10" style="width:80%;">
                                {!! Form::text('alamat_tamu',null,['class'=>'form-control','placeholder'=>"Alamat tamu"]) !!}
                                </div>
                                </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label" style=" text-align: right; width:40%;">No.Telpon tamu</label>
                                <div class="col-sm-10" style="width:80%;">
                                {!! Form::text('no_telepon_tamu',null,['class'=>'form-control','placeholder'=>"No.Telpon tamu"]) !!}
                                </div>
                                </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label" style=" text-align: right; width:40%;">Email tamu</label>
                                <div class="col-sm-10" style="width:80%;">
                                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email tamu"]) !!}
                                </div>
                                </div>
                            <div class="form-group" >
                            <label class="col-sm-2 control-label" style=" text-align: right; width:40%;">Username</label>
                                <div class="col-sm-10" style="width:80%;">
                                {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
                                </div>
                            </div>
                                <div class="form-group" >
                            <label class="col-sm-2 control-label" style=" text-align: right; width:40%;">Password</label>
                                <div class="col-sm-10" style="width:80%;">
                                {!! Form::password('password',null,['class'=>'form-control','placeholder'=>"password"]) !!}
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-sm-10" style="width:80%;">
                                    {!! Form::hidden('level',2,['class'=>'form-control','type'=>'hidden','placeholder'=>"level"]) !!}
                                </div>
                            </div>

                            <!-- button action -->
                            <div style=" width:115%; text-align: center; padding-right:5px; margin-top: 15px;">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
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
        <script src="{{(' component1/js/jquery.js ')}}"></script>
        <script type="text/javascript" src="component1/js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="component1/js/bootstrap.js"></script>
        <script type="text/javascript" src="component1/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="component1/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="component1/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="component1/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="component1/js/jquery.inview.js"></script>
        <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="component1/js/app.js"></script>
    </body>
</html>