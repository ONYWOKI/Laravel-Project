
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>NaivashaGirls</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('assest/img/favicon.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link href="{{ asset('assest/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assest/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assest/css/icons.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('assest/css/responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('assest/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="{{ asset('assest/img/NaivashaLogo.png') }}" alt="logo"><i>NAIVASHA GIRLS HIGH SCHOOL</i></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav pull-right">
                                <li class="active"><a href="#home">Home</a></li>
                                <li><a href="#features">About Us</a>
                                    <ul>
                                    <li><a href="#Mission">Mission & Vision</a></li>
                                    <!-- <li><a href="#">Vision</a></li> -->
                                    <li><a href="#">Core Values</a></li>
                                    <li><a href="#">History</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Departments</a>
                                    <ul>
                                    <li><a href="#">Teaching</a>
                                        <ul>
                                        <li><a href="">Languages</a>
                                            <ul>
                                                <li><a href="{{url('/kiswahili')}}">Kiswahili Department</a></li>
                                                <li><a href="{{url('/english')}}">English Department</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Humanities</a>
                                             <ul>
                                                <li><a href="#">History & C.R.E Department</a></li>
                                                <li><a href="#">Germany & French Department</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Sciences</a>
                                            <ul> 

                                                <li><a href="#">Biology Department</a></li>
                                                <li><a href="#">Physics Department</a></li>
                                                <li><a href="#">Chemistry Department</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Mathematics</a></li>
                                        <li><a href="">Technicals and Creative Arts</a></li>
                                        </ul>
                                        </li>
                                    <li><a href="#">Non-teaching</a>
                                        <ul>
                                        <li><a href="#">Boarding</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Clinical</a></li>
                                        </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#blog">Events & Calendars</a></li>
                                <li><a href="#">Teaching Staff</a></li> 
                                <li><a href="#testmonial">Academics</a></li>
                                
                                <li><a href="#faqs">Contact Us</a></li>
<!--                                <li><a href="#contact">Contact</a></li>-->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--WELCOME SLIDER AREA-->
        <div class="welcome-slider-area white font16">
            <div class="welcome-single-slide">
                <div class="slide-bg-one slide-bg-overlay"></div>
                <div class="welcome-area">
                    <div class="container">
                        <div class="row flex-v-center">
                            <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                                <div class="welcome-text">
                                    <h1>Welcome to Naivasha Girls</h1>
                                    <p>A centre of exellence where academic execellence is holds</p>
                                    <div class="home-button">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide">
                <div class="slide-bg-two slide-bg-overlay"></div>
                <div class="welcome-area">
                    <div class="container">
                        <div class="row flex-v-center">
                            <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                                <div class="welcome-text">
                                    <h1>Develop a passion empowering our daughters.</h1>
                                    <p>The future is promising for our young daughters, it is our responsibility to educate them because it is their power in future.</p>
                                    <div class="home-button">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide">
                <div class="slide-bg-three slide-bg-overlay"></div>
                <div class="welcome-area">
                    <div class="container">
                        <div class="row flex-v-center">
                            <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                                <div class="welcome-text">
                                    <h1>We have been able to shine leading others</h1>
                                    <p>Our Performance has been articulated by hardwork, discipline and sacrifice from both teachers and students and above all God</p>
                                    <div class="home-button">
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME SLIDER AREA END-->
    </header>
    <!--END TOP AREA-->

    <!--FEATURES TOP AREA-->
    <section class="features-top-area" id="features">
        <div class="container">
            <div class="row promo-content">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.1s">
                        <div class="box-icon features-box-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h3 class="box-title">Principal</h3>
                        <p>Madam Susan</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb20 xs-mb0  wow fadeInUp padding30" data-wow-delay="0.2s">
                        <div class="box-icon features-box-icon">
                            <i class="icofont icofont-business-man-alt-1"></i>
                        </div>
                        <h3 class="box-title">Deputy Principal Academics</h3>
                        <p>Hellen Kataka.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.3s">
                        <div class="box-icon features-box-icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <h3 class="box-title">Deputy Principal Discipline</h3>
                        <p>Hellen Kataka2</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb20 xs-mb0 wow fadeInUp padding30 visible-sm" data-wow-delay="0.4s">
                        <div class="box-icon features-box-icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <h3 class="box-title">Quality Service</h3>
                        <p>A Google Docs scam that appears to be widespread began landing in Wednesday in what seemed to be a phishing attack.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    <!--COURSE AREA END-->

    <!--ABOUT AREA-->
    <section class="section-padding about-area" id="about">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50 wow fadeIn" id="Mission">
                        <h3 class="xs-font20 mb30">Mission</h3>
                        <p>To prepare the girl child for total integration and participation in national life through wholesome and quality education.</p>
                    </div>
                </div>
               <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50 wow fadeIn">
                        <h3 class="xs-font20 mb30">Vision</h3>
                        <p>To be acclaimed centre of excellence in provision of quality secondary education to the girl child</p>
                    </div>
                </div>
                 <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-content xs-mb50 wow fadeIn">
                        <h3 class="xs-font20 mb30">Core Values</h3>
                        <p>To be acclaimed centre of excellence in provision of quality secondary education to the girl child</p>
                    </div>
                </div>
            </div>
        </div>
   @yield('content')
    <footer>
        <div class="footer-bottom-area white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<p>Phone Number: 0796719354</p>
<p>Address: P.O Box 155, Naivasha 20117</p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with Zalego</a>
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{ asset('assest/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assest/js/vendor/bootstrap.min.js') }}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{ asset('assest/js/vendor/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assest/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assest/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('assest/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assest/js/stellar.js') }}"></script>
    <script src="{{ asset('assest/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assest/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assest/js/wow.min.js') }}"></script>
    <script src="{{ asset('assest/js/jquery-modal-video.min.js') }}"></script>
    <script src="{{ asset('assest/js/stellarnav.min.js') }}"></script>
    <script src="{{ asset('assest/js/placeholdem.min.js') }}"></script>
    <script src="{{ asset('assest/js/contact-form.js') }}"></script>
    <script src="{{ asset('assest/js/jquery.ajaxchimp.js') }}"></script>
    <script src="{{ asset('assest/js/jquery.sticky.js') }}"></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{ asset('assest/js/main.js') }}"></script>

    <!--===== MAPS JS=====-->
    <script type="{{ asset('text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&sensor=false') }}"></script>
    <script src="{{ asset('assest/js/maps.active.js') }}"></script>
</body>

</html>

