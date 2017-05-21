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
        <link rel="stylesheet" type="text/css" href="{{('
component1/css/bootstrap.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/bootstrap-responsive.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/style.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/pluton.css ')}}" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/jquery.cslider.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/jquery.bxslider.css ')}}" />
        <link rel="stylesheet" type="text/css" href="{{(' component1/css/animate.css ')}}" />
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
                                                    pengguna baru? <a href="{{url('tamu/daftar')}}"><b>Register</b></a>
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
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Selamat Datang di Paragon Hotel</h2>
                        <h4>Paragon Hotel</h4>
                        <p>Hotel bintang lima berlian yang terletak tepat dipusat kota Samarinda. Berada di 23 hektar taman tropis dan didukung dengan fasilitas rekreasi yang luas, Paragon Hotel telah menjadi oasis dimana orang bisa rileks dan luput dari keramaian dan hiruk pikuk kota.</p>
                        <div class="da-img">
                            <img src="component1/images/Slider01.png" alt="image01" width="240">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>PELAYANAN</h2>
                        <h4>Pelayanan-Pelayanan yang memuaskan</h4>
                        <p>Paragon Hotel sangat memperhatikan kepuasan tamu, banyak sekali pelayanan pelayanan yang di suguhkan sehingga tamu akan merasa nyaman dan puas.</p>
                        
                        <div class="da-img">
                            <img src="component1/images/Slider02.png" width="240" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>FASILITAS</h2>
                        <h4>Fasilitas yang lengkap dan menarik</h4>
                        <p>Paragon Hotel diciptakan dengan konsep elegan dan mewah sehingga memiliki fasilitas-fasilitas kelas atas. selain itu, Kebersihan Hotel Paragon sangat terjaga sehingga tamu akan merasa nyaman.</p>
                        <div class="da-img">
                            <img src="component1/images/Slider03.png" width="240" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Pelayanan Paragon Hotel</h1>
                    <!-- Section's title goes here -->
                    <p>Paragon Hotel menyediakan fasilitas-fasilitas yang memiliki konsep elegan dan mewah</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="component1/images/Balroom.jpg" alt="service 1">
                            </div>
                            <h3>Ballroom</h3>
                            <p>Dengan Fasilitas Ballroom yang luas dan bersih anda dapat mengadakan pertemuan atau rapat dengan nyaman.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="component1/images/kol.jpg" alt="service 2" />
                            </div>
                            <h3>Kolam Renang</h3>
                            <p>Bersantai bersama keluarga dan teman-teman serta menikmati indah dan segarnya kolam renang. </p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="component1/images/Restaurant1.jpg" alt="service 3">
                            </div>
                            <h3>Restaurant</h3>
                            <p>Dekorasi Restaurant yang elegan membuat tamu merasa nyaman dan rileks. </p>
                        </div>
                    </div>
                    </div>
                    <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="component1/images/Spa.jpg" alt="service 4">
                            </div>
                            <h3>SPA</h3>
                            <p>Paragon Hotel juga menyediakan Fasilitas Spa untuk perawatan tubuh, kesehatan, kebugaran dan kenyamanan anda.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="component1/images/Gym.jpg" alt="service 5">
                            </div>
                            <h3>GYM</h3>
                            <p>Meluangkan waktu untuk berolahraga didalam ruangan untuk kesehatan dan kebugaran anda.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="component1/images/Lap.jpg" alt="service 4">
                            </div>
                            <h3>Lapangan Golf</h3>
                            <p>Berolahraga sambil menikmati indahnya alam dengan Bermain Golf.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Kamar</h1>
                    <p>Paragon Hotel menyediakan kamar-kamar yang cukup mewah, aman, dan nyaman.</p>
                </div>
                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all">
                        <a href="#noAction">All</a>
                    </li>
                    <li class="filter" data-filter="Standard">
                        <a href="#noAction">Standard</a>
                    </li>
                    <li class="filter" data-filter="vip">
                        <a href="#noAction">VIP</a>
                    </li>
                    <!-- <li class="filter" data-filter="identity">
                        <a href="#noAction">Identity</a>
                    </li> -->
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/vip1.jpeg" alt="project 1" />
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>VIP Room 001</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">      
                                    <div>
                                        <span>Harga</span> Rp. 1.200.000,00</div>                              
                                    <div>
                                        <span>Fasilitas</span> Tempat tidur nyaman, TV Layar Datar 60 inc, Kulkas, AC, Kolam Renang, SPA, GYM, Lapangan Golf</div>
                                    <div>
                                        <span>Check-in</span> 14.00</div>
                                    <div>
                                        <span>Check-out</span> 12.00</div>

                                    
                                </div>
                                
                                    <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>
                                
                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>                                                                                        
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/vip2.jpeg" alt="project 2">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>VIP Room 002</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                    <div>
                                        <span>Harga</span> Rp. 1.500.000,00</div>                              
                                    <div>
                                        <span>Fasilitas</span> Tempat tidur nyaman, TV Layar Datar 60 inc, Kulkas, AC, Kolam Renang, SPA, GYM, Lapangan Golf</div>
                                    <div>
                                        <span>Check-in</span> 14.00</div>
                                    <div>
                                        <span>Check-out</span> 12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>

                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/vip3.jpeg" alt="project 3">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>VIP Room 003</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                    <div>
                                        <span>Harga</span> Rp. 1.750.000,00</div>                              
                                    <div>
                                        <span>Fasilitas</span> Tempat tidur nyaman, TV Layar Datar 60 inc, Kulkas, AC, Kolam Renang, SPA, GYM, Lapangan Golf</div>
                                    <div>
                                        <span>Check-in</span> 14.00</div>
                                    <div>
                                        <span>Check-out</span> 12.00</div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>

                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/vip4.jpeg" alt="project 4">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>VIP Room 004</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                   <div>
                                        <span>Harga</span> Rp. 2.000.000,00</div>                              
                                    <div>
                                        <span>Fasilitas</span> Tempat tidur nyaman, TV Layar Datar 60 inc, Kulkas, AC, Kolam Renang, SPA, GYM, Lapangan Golf</div>
                                    <div>
                                        <span>Check-in</span> 14.00</div>
                                    <div>
                                        <span>Check-out</span> 12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>

                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 -->
                    <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/vip5.jpeg" alt="project 5">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>VIP Room 005</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                    <div>
                                        <span>Harga</span> Rp. 2.300.000,00</div>                              
                                    <div>
                                        <span>Fasilitas</span> Tempat tidur nyaman, TV Layar Datar 60 inc, Kulkas, AC, Kolam Renang, SPA, GYM, Lapangan Golf</div>
                                    <div>
                                        <span>Check-in</span> 14.00</div>
                                    <div>
                                        <span>Check-out</span> 12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>

                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/eko1.jpeg" alt="project 6">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Standard Room 001</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">          
                                    <div>
                                        <span>Harga</span> Rp. 500.000,00</div>                            
                                    <div>
                                        <span>Fasilitas</span>Tempat tidur nyaman, TV Layar Datar 32 inc, Kulkas, AC</div>
                                    <div>
                                        <span>Check-in</span>14.00</div>
                                    <div>
                                        <span>Check-out</span>12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>
                                
                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 6 -->
                    <!-- Start details for portfolio project 7 -->
                    <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/eko5.jpeg" alt="project 7">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Standard Room 002</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                    <div>
                                        <span>Harga</span> Rp. 650.000,00</div>                            
                                    <div>
                                        <span>Fasilitas</span>Tempat tidur nyaman, TV Layar Datar 32 inc, Kulkas, AC</div>
                                    <div>
                                        <span>Check-in</span>14.00</div>
                                    <div>
                                        <span>Check-out</span>12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>
                                
                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 -->
                    <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/eko3.jpeg" alt="project 8">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Standard Room 003</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                    <div>
                                        <span>Harga</span> Rp. 750.000,00</div>                            
                                    <div>
                                        <span>Fasilitas</span>Tempat tidur nyaman, TV Layar Datar 32 inc, Kulkas, AC</div>
                                    <div>
                                        <span>Check-in</span>14.00</div>
                                    <div>
                                        <span>Check-out</span>12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm-10">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>

                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 -->
                    <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                        <div class="span12">
                            <img src="component1/images/kamar/eko4.jpeg" alt="project 9">
                        </div>
                        <div class="span11">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Standard Room 004</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">                                    
                                    <div>
                                        <span>Harga</span> Rp. 800.000,00</div>                            
                                    <div>
                                        <span>Fasilitas</span>Tempat tidur nyaman, TV Layar Datar 32 inc, Kulkas, AC</div>
                                    <div>
                                        <span>Check-in</span>14.00</div>
                                    <div>
                                        <span>Check-out</span>12.00</div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Menginap</label>
                                <div class="col-sm- 2">
                                {!! Form::text('lama_menginap',null,['class'=>'form-control','placeholder'=>"Lama Menginap"]) !!}
                                Hari
                                </div>
                                </div>
                                
                                <label class="col-sm-2 control-label">Jumlah Orang</label>
                                <div class="form-group">
                                <select class="form-control" id="jumlah_orang" name="jumlah_orang">
                                <option selected ="selected" value>1 Orang</option>
                                <option selected ="selected" value>2 Orang</option>
                                <option selected ="selected" value>3 Orang</option>
                                </select>
                                </div>
                                
                                <button class="btn btn-primary">PESAN</button>

                                <ul>
                                <br>
                                <p><strong>Note:</strong>
                                <li>
                                Untuk pasangan beda jenis kelamin akan dimintakan dokumen yang menyatakan memiliki hubungan suami istri atau hubungan darah. Alkohol sangat dilarang di properti ini dan merupakan properti bebas asap rokok. Dan pemesanan yang telah dikonfirmasi tidak bisa dibatalkan.</li>
                                <li>Menyerahkan data identitas pada Resepsionis Hotel</li></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix vip">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/vip1.jpeg" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar VIP</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix vip">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/vip2.jpeg" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar VIP</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix vip">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/vip3.jpeg" alt="project 3">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar VIP</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix vip">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/vip4.jpeg" alt="project 4">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar VIP</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix vip">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/vip5.jpeg" alt="project 5">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar VIP</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix Standard">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/eko1.jpeg" alt="project 6">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar Standard</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix Standard">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/eko5.jpeg" alt="project 7" />
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar Standard</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix Standard">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/eko3.jpeg" alt="project 8">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar Standard</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix Standard">
                            <div class="thumbnail">
                                <img src="component1/images/kamar/eko4.jpeg" alt="project 9">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Kamar Standard</h3>
                                <p>Klik untuk Detail...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
        <!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div> 
            <div class="container">
                <div class="title">
                    <h1>Tentang Pengembang</h1>
                </div>
                <div class="row-fluid team">
                    <div class="span3" id="first-person">
                        <div class="thumbnail">
                            <img src="component1/images/Team1.png" alt="team 1">
                            <h3>Arif Fahrizal</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/corelzavieralfiansyah">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/young_gneration">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/105134275472137786170">
                                        <span class="icon-gplus-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Programer</h2>
                                <p>Cukup sulit menemukan kesalahan dalam kode Anda saat Anda mencarinya; Itu lebih sulit lagi bila Anda menganggap kode Anda bebas dari kesalahan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span3" id="second-person">
                        <div class="thumbnail">
                            <img src="component1/images/Team2.png" alt="team 1">
                            <h3>Muhammad Rizal</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/ridzalborneo1">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/RizalMhamad8">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/111240685464209157186">
                                        <span class="icon-gplus-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Programer</h2>
                                <p>Debugging dua kali lebih keras seperti menulis kode di tempat pertama. Oleh karena itu, jika Anda menulis kode dengan cerdik mungkin, Anda, menurut definisi, tidak cukup pintar untuk men-debugnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="component1/images/Team3.png" alt="team 1">
                            <h3>Taufikurrahman Khosyi</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/TaufikurrahmanKhosyi">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/KhosyiTaufik">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/113726276910410952294">
                                        <span class="icon-gplus-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Designer</h2>
                                <p>Seorang desainer tau bahwa desainnya sudah sempurna bukan ketika tidak ada sesuatu yang bisa ditambahkan ke dalam desainnya, melainkan ketika tidak ada sesuatu yang bisa dihilangkan lagi dari desainnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span3" id="fourth-person">
                        <div class="thumbnail">
                            <img src="component1/images/Team4.png" alt="team 1">
                            <h3>M. Sarman Noorlah</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/sarman.xlite">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Sarman_Hrc15">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/113146106916072731346">
                                        <span class="icon-gplus-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Designer</h2>
                                <p>Kalau kamu melakukan pekerjaan baik untuk klien yang baik, dia akan memberikanmu pekerjaan baik lainnya untuk klien baik lainnya. Jika kamu melakukan pekerjaan buruk untuk klien yang buruk, dia juga akan memberikanmu pekerjaan buruk lainnya untuk klien buruk lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text centered">
                    <h3>About Us</h3>
                    <p><strong>Website Paragon Hotel</strong> dikembangkan oleh 4 orang mahasiswa muda berprestasi Fakultas Ilmu Komputer dan Teknologi Informasi. yang sedang menempuh jenjang studi S1 Teknik Informatika, Website ini di buat untuk memenuhi tugas akhir Praktikum Pemrograman Framework, dengan basis Framework Laravel dipadukan dengan penggunaan Bootstrap serta JavaScript menjadikan website ini elegan dan resposive</p>
                </div>

        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
            <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1>Hubungi Kami    </h1>
                        <p>Paragon Hotel Siap Melayani dengan sepenuh hati dengan pelayanan yang memuaskan</p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Loading map...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Katakan Hello</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Selesai!</strong>Pesan anda telah terkirim.</div>
                                <div id="errorSend" class="alert alert-error invisible">Terdapat sebuah masalah.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Nama anda..." />
                                            <div class="error left-align" id="err-name">Silahkan Masukan nama.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Email anda..." />
                                            <div class="error left-align" id="err-email">Silahkan Masukan Email yang sesuai.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Komentar..."></textarea>
                                            <div class="error left-align" id="err-comment">Silahkan Masukan pesan anda.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="component1/js/app.js"></script>
    </body>
</html>