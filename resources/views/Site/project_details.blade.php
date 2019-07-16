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
    <link rel="shortcut icon" href="../public/Site/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../public/Site/images/favicon.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/Site/css/reset.css"/>
    <link rel="stylesheet" href="../public/Site/css/animate.min.css"/>
    <link rel="stylesheet" href="../public/Site/css/bootstrap.css"/>
    <link rel="stylesheet" href="../public/Site/css/style.css"/>
    <link rel="stylesheet" href="../public/Site/css/flexslider.css"/>
    <link rel="stylesheet" href="../public/Site/css/font-awesome.css"/>
    <link rel="stylesheet" href="../public/Site/css/owl.carousel.css"/>
    <link rel="stylesheet" href="../public/Site/css/settings.css"/>
    <link rel="stylesheet" href="../public/Site/css/prettyPhoto.css"/>
    <link rel="stylesheet" href="../public/Site/css/responsive.css"/>
    <link rel="stylesheet" href="../public/Site/css/player/YTPlayer.css"/>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <link rel="stylesheet" href="../public/Site/css/gallery.css">
    <!-- End CSS Files -->

    <style>
        .img-thumbnail {
            height: 265px !important;
        }
    </style>

<!-- Hotjar Tracking Code for https://techmetbd.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1368141,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> </head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

<div id="pageloader">
    <div class="loader-item">
        <img src="../public/Site/images/loading.gif" alt='loader'/>
    </div>
</div>

<!-- Home Section -->
<section id="home" class="">


    <!-- Navigation Section -->
    <section id="navigation" class="shadow">

        <div class="inner navigation">

            <!-- Logo Img -->
            <div class="logo">
                <a class="scroll" href="#home"><img src="../public/Site/images/logo.png" alt="Logo"/></a>
            </div>

            <!-- Nav Menu -->
            <div class="nav-menu">

                <ul class="nav main-nav">
                    <li><a class="scroll" href="{{ route('index') }}#home">home</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#about">services</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#packages">Packages</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#portfolio">projects</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#services">about</a></li>
                    <li><a class="scroll" href="{{ route('company.profile') }}">Profile</a></li>
                    <li><a class="scroll" href="{{ route('team') }}">team</a></li>
                    <li><a class="scroll" href="{{ route('contact') }}">contact</a></li>

                </ul>

            </div>


            <!-- Dropdown Menu For Mobile Devices-->
            <div class="dropdown mobile-drop">
                <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                <ul class="nav dropdown-menu fullwidth" role="menu">
                    <li><a class="scroll" href="{{ route('home') }}#home">home</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#about">services</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#packages">Packages</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#portfolio">projects</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#services">about</a></li>
                    <li><a class="scroll" href="{{ route('company.profile') }}">Profile</a></li>
                    <li><a class="scroll" href="{{ route('team') }}">team</a></li>
                    <li><a class="scroll" href="{{ route('contact') }}">contact</a></li>
                </ul>
            </div>

            <div class="clear"></div>
        </div>

    </section>
    <!-- End Navigation Section -->

    <section id="main_content">

        <div class="container">
            <h2>Project Description</h2>
            <p>
                <b>Project Name : </b> {{ $project->project_name }}
            </p>

            @if(strpos($project->project_website, 'http') === false)
                <i class="fa fa-globe"> </i> <a href="{{ "http://" . ($project->project_website) }}" target="_blank">{{ $project->project_website }}</a>
            @else
                <i class="fa fa-globe"> </i> <a href="{{ ($project->project_website) }}" target="_blank">{{ $project->project_website }}</a>
            @endif


            <!--gallery start-->
            <h3 class="title-4 float-center">Project Demo Images</h3>
            <div class="tz-gallery" style="margin-bottom: 50px; margin-top: 20px;">
                <div class="row" style="margin-bottom: 20px;">

                    @if($project->project_img1 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img1) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img1) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img2 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img2) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img2) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img3 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img3) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img3) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img4 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img4) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img4) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img5 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img5) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img5) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img6 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img6) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img6) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img7 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img7) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img7) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img8 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img8) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img8) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img9 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img9) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img9) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img10 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img10) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img10) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img11 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img11) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img11) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($project->project_img12 != null)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ asset('public/files/project_image/'.$project->project_img12) }}">
                                    <img src="{{ asset('public/files/project_image/'.$project->project_img12) }}" alt="Park" class="img-thumbnail card-img-top">
                                </a>
                            </div>
                        </div>
                    @endif
            </div>
            <!--gallery end-->

        </div>
        </div>

    </section>





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

    <script type="text/javascript" src="../public/Site/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../public/Site/js/bootstrap.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.appear.js"></script>
    <script type="text/javascript" src="../public/Site/js/waypoints.min.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../public/Site/js/modernizr-latest.js"></script>
    <script type="text/javascript" src="../public/Site/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../public/Site/js/owl.carousel.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="../public/Site/js/rev-slider/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="../public/Site/js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="../public/Site/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../public/Site/js/plugins.js"></script>
    <script type="text/javascript" src="../public/Site/js/gallery.js"></script>
../
    <!-- End JS Files -->

    <script>
        baguetteBox.run('.tz-gallery');
    </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d11dcd253d10a56bd7bb5ac/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>


</html>
