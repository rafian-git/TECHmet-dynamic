<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8"/>
    <meta property="og:url"            content="http://www.techmetbd.com" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="TECHmet IT Solutions" />
    <meta property="og:description"        content="your TECH demands to be MET" />
    <meta property="og:image"              content="/images/logo-big2.png" />
    <title>TECHmet</title>
    <meta name="description" content="your TECH demands to be MET"/>
    <meta name="keywords"
          content="IT , IT solutions , IT farm , Software farm ,Software solutions , TECHmet bd, TECHmet"/>
    <meta name="author" content="TECHmet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="public/Site/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="public/Site/images/favicon.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/Site/css/reset.css"/>
    <link rel="stylesheet" href="public/Site/css/animate.min.css"/>
    <link rel="stylesheet" href="public/Site/css/bootstrap.css"/>
    <link rel="stylesheet" href="public/Site/css/style.css"/>
    <link rel="stylesheet" href="public/Site/css/flexslider.css"/>
    <link rel="stylesheet" href="public/Site/css/font-awesome.css"/>
    <link rel="stylesheet" href="public/Site/css/owl.carousel.css"/>
    <link rel="stylesheet" href="public/Site/css/settings.css"/>
    <link rel="stylesheet" href="public/Site/css/prettyPhoto.css"/>
    <link rel="stylesheet" href="public/Site/css/responsive.css"/>
    <link rel="stylesheet" href="public/Site/css/player/YTPlayer.css"/>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <link rel="stylesheet" href="public/Site/css/gallery.css">
    <!-- End CSS Files -->

</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

<div id="pageloader">
    <div class="loader-item">
        <img src="public/Site/images/loading.gif" alt='loader'/>
    </div>
</div>

<!-- Home Section -->
<section id="home" class="">


    <!-- Navigation Section -->
    <section id="navigation" class="shadow">

        <div class="inner navigation">

            <!-- Logo Img -->
            <div class="logo">
                <a class="scroll" href="#home"><img src="public/Site/images/logo.png" alt="Logo"/></a>
            </div>

            <!-- Nav Menu -->
            <div class="nav-menu">

                <ul class="nav main-nav">
                    <li class="active"><a class="scroll" href="#home">home</a></li>
                    <li><a class="scroll" href="#about">services</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#packages">Packages</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#portfolio">projects</a></li>
                    <li><a class="scroll" href="#services">about</a></li>
                    <li><a class="scroll" href="{{ route('company.profile') }}">Profile</a></li>
                    <li><a class="scroll" href="{{ route('team') }}">team</a></li>
                    <li><a class="scroll" href="{{ route('contact') }}">contact</a></li>

                </ul>

            </div>


            <!-- Dropdown Menu For Mobile Devices-->
            <div class="dropdown mobile-drop">
                <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                <ul class="nav dropdown-menu fullwidth" role="menu">
                    <li><a class="scroll" href="#home">home</a></li>
                    <li><a class="scroll" href="#about">services</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#packages">Packages</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#portfolio">projects</a></li>
                    <li><a class="scroll" href="#services">about</a></li>
                    <li><a class="scroll" href="{{ route('company.profile') }}">Profile</a></li>
                    <li><a class="scroll" href="{{ route('team') }}">team</a></li>
                    <li><a class="scroll" href="{{ route('contact') }}">contact</a></li>
                </ul>

                <div class="clear"></div>
            </div>
        </div>

    </section>
    <!-- End Navigation Section -->


    <section id="prices" class="container-fluid">

        <div class="inner prices" style="padding-bottom:0px;margin-bottom:0px;">


            <!-- Header -->
            <div class="header ">
                Hosting Plans
            </div>

            <!-- Second Header -->
            <div class="page-desc ">
                We offer a wide range of hosting plans for you. Find the one that suits your need.
            </div>

            <div class="packages">
                <!-- First Package -->
                <div class="package first animated" data-animation="flipInY" data-animation-delay="100">
                    <!-- Package Header -->
                    <h1>Personal Light</h1>
                    <!-- Package Price -->
                    <div class="circle">
                        <h2>৳900 <span>.00</span></h2>
                        <p>anually</p>
                    </div>
                    <!-- Package Properties -->
                    <ol>
                        <li><b> 500MB </b>Web space</li>
                        <li><span>20GB </span>Data Transfer</li>
                        <li><span>PHP & Mysql </span>Supported</li>
                        <li><span>500 email </span>accounts</li>
                        <li><span>100 </span> Sub-domains</li>
                        <li><span>FTP & cPanel</span> support</li>
                        <li><span>1 </span> max SQL database</li>
                    </ol>
                    <!-- Package Button -->
                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                </div>

                <!-- Second Package -->
                <div class="package active animated" data-animation="flipInY" data-animation-delay="300">
                    <!-- Package Header -->
                    <h1>Personal Heavy</h1>
                    <!-- Package Price -->
                    <div class="circle">
                        <h2>৳1250 </h2>
                        <p>anually</p>
                    </div>
                    <!-- Package Properties -->
                    <ol>
                        <li><b> 1GB </b>Web space</li>
                        <li><span>40GB </span>Data Transfer</li>
                        <li><span>PHP & Mysql </span>Supported</li>
                        <li><span>500 email </span>accounts</li>
                        <li><span> 200 </span> Sub-domains</li>
                        <li><span>FTP & cPanel</span> support</li>
                        <li><span>2 </span> max SQL database</li>
                    </ol>
                    <!-- Package Button -->
                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                </div>

                <!-- Third Package -->
                <div class="package animated" data-animation="flipInY" data-animation-delay="500">
                    <!-- Package Header -->
                    <h1>SME Light</h1>
                    <!-- Package Price -->
                    <div class="circle">
                        <h2>৳5000 </h2>
                        <p>anually</p>
                    </div>
                    <!-- Package Properties -->
                    <ol>
                        <li><b> 5GB </b>Web space</li>
                        <li><span>100GB </span>Data Transfer</li>
                        <li><span>PHP & Mysql </span>Supported</li>
                        <li><span>500 email </span>accounts</li>
                        <li><span>500 </span> Sub-domains</li>
                        <li><span>FTP & cPanel</span> support</li>
                        <li><span>5 </span> max SQL database</li>
                    </ol>
                    <!-- Package Button -->
                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                </div>

                <!-- Fourth Package -->
                <div class="package last animated" data-animation="flipInY" data-animation-delay="700">
                    <!-- Package Header -->
                    <h1>SME Heavy</h1>
                    <!-- Package Price -->
                    <div class="circle">
                        <h2>৳8000</h2>
                        <p>anually</p>
                    </div>
                    <!-- Package Properties -->
                    <ol>
                        <li><b> 10GB </b>Web space</li>
                        <li><span>200GB </span>Data Transfer</li>
                        <li><span>PHP & Mysql </span>Supported</li>
                        <li><span>750 email </span>accounts</li>
                        <li><span>500 </span> Sub-domains</li>
                        <li><span>FTP & cPanel</span> support</li>
                        <li><span>10 </span> max SQL database</li>
                    </ol>
                    <!-- Package Button -->
                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                </div>
                <div class="clear"></div>
            </div><!-- End Packages -->
        </div><!-- End inner div -->
        <div class="inner prices" style="padding:0px;margin-top:0px;margin-left:auto;margin-right:auto;">
            <div class="packages text-center">

                <div class="package last animated" data-animation="flipInY" data-animation-delay="700" style="border:1px solid white;">
                </div>
                <!-- Fourth Package -->
                <div class="package last animated" data-animation="flipInY" data-animation-delay="700">
                    <!-- Package Header -->
                    <h1>Corporate Light</h1>
                    <!-- Package Price -->
                    <div class="circle">
                        <h2>৳12,500</h2>
                        <p>anually</p>
                    </div>
                    <!-- Package Properties -->
                    <ol>
                        <li><b> 20GB </b>Web space</li>
                        <li><span>400GB </span>Data Transfer</li>
                        <li><span>PHP & Mysql </span>Supported</li>
                        <li><span>1000 email </span>accounts</li>
                        <li><span>500 </span> Sub-domains</li>
                        <li><span>FTP & cPanel</span> support</li>
                        <li><span>20 </span> max SQL database</li>
                    </ol>
                    <!-- Package Button -->
                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                </div>

                <!-- Fourth Package -->
                <div class="package last animated" data-animation="flipInY" data-animation-delay="700">
                    <!-- Package Header -->
                    <h1>Corporate Heavy</h1>
                    <!-- Package Price -->
                    <div class="circle">
                        <h2>৳20,000</h2>
                        <p>anually</p>
                    </div>
                    <!-- Package Properties -->
                    <ol>
                        <li><b> 40GB </b>Web space</li>
                        <li><span>600GB </span>Data Transfer</li>
                        <li><span>PHP & Mysql </span>Supported</li>
                        <li><span>UNLIMITED email </span>accounts</li>
                        <li><span>UNLIMITED </span> Sub-domains</li>
                        <li><span>FTP & cPanel</span> support</li>
                        <li><span>40 </span> max SQL database</li>
                    </ol>
                    <!-- Package Button -->
                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                </div>

                <div class="clear"></div>
            </div><!-- End Packages -->
        </div><!-- End inner div -->
    </section><!-- End Prices Section -->

    <div class="container">
        <section id="text-area" style="margin-bottom: 40px;border-radius: 6px;">
            <div class="inner text-area" style="padding-top: 8px;">
                <span><h3 style="display: inline-flex">Call us today</h3></span> <span> <a style="" href="tel:+8801624666124">@ (+88) 01624666124</a> </span> or
                <span><h3 style="display: inline-flex">Email us</h3></span> <span> <a style="" href="mailto:index@techmetbd.com">index@techmetbd.com</a> </span>
            </div>
        </section>
    </div>


    <section id="footer">

        <div class="inner footer">

            <!-- Phone -->
            <div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">
                <a class="footer-links" href="tel:+8801307108222">
                    <i class="fa fa-mobile"></i>
                </a>

                <p class="footer-text">
                    <a class="" href="tel:+8801307108222"> <span>(+88) 01307108222</span> </a> <br>
                    <a class="" href="tel:+8801624666124"> <span>(+88) 01624666124</span> </a>
                </p>
            </div>

            <!-- Socials and Mail -->
            <div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">

                <!-- Social 1 -->
                <a class="footer-links" href="https://fb.me/TECHmetbd" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>

                <!-- Social 2 -->
                <a class="footer-links" href="https://fb.me/TECHmetbd" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>

                <!-- Social 3 -->
                <a class="footer-links" href='mailto:inbox.techmet@gmail.com'>
                    <i class="fa fa-google-plus"></i>
                </a>

                <!-- Social 4 -->
                <a class="footer-links" href="https://fb.me/TECHmetbd" target="_blank">
                    <i class="fa fa-pinterest"></i>
                </a>

                <!-- Mail -->
                <p class="footer-text">
                    <span>Mail</span>:<span><a href="mailto:inbox@techmetbd.com">inbox@techmetbd.com</a></span>
                </p>

                <!-- Copyright -->
                <p class="footer-text ">
                    2018 TECHmet Bangladesh ❍ Your TECH demands to be met
                </p>
            </div>

            <!-- Adress -->
            <div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">

                <!-- Icon -->
                <a class="footer-links" href="https://goo.gl/maps/AJQicNc5BxZrLmGm9" target="_blank">
                    <i class="fa fa-map-marker"></i>
                </a>

                <a class="" href="https://goo.gl/maps/AJQicNc5BxZrLmGm9" target="_blank"><p class="footer-text">
                        House #229, Road #6, Mohammadi Housing LTD, Dhaka-1207, Bangladesh
                    </p></a>
            </div>

            <div class="clear"></div>
        </div> <!-- End Footer inner -->

    </section><!-- End Footer Section -->


    <!-- Back To Top Button -->
    <section id="back-top">
        <a href="#home" class="scroll"></a>
    </section>
    <!-- End Back To Top Button -->

    <!-- JS Files -->

    <script type="text/javascript" src="public/Site/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="public/Site/js/bootstrap.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.appear.js"></script>
    <script type="text/javascript" src="public/Site/js/waypoints.min.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="public/Site/js/modernizr-latest.js"></script>
    <script type="text/javascript" src="public/Site/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="public/Site/js/owl.carousel.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="public/Site/js/rev-slider/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="public/Site/js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="public/Site/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="public/Site/js/plugins.js"></script>
    <script type="text/javascript" src="public/Site/js/gallery.js"></script>
    public/Site/
    <!-- End JS Files -->

    <script>

    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5d11dcd253d10a56bd7bb5ac/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>


</html>
