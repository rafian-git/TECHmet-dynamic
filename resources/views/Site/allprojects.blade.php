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

    <style>
        th{
            width: 30%;
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
                    <li class="scroll"><a class="scroll" href="/">home</a></li>
                    <li><a class="scroll" href="#about">services</a></li>
                    <li><a class="scroll" href="{{ route('index') }}#packages">Packages</a></li>
                    <li><a class="scroll active" href="{{ route('index') }}#portfolio">projects</a></li>
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


    <section id="companyProfile" class="container">

        {{--<h3 style="text-align: center; margin-bottom: 20px;">Our projects at a Glance</h3>--}}

        <div class="header" style="margin-top: 30px;">
            our all projects
        </div>

        <hr>

        <div class="works">

            <div id="options" class="filter-menu inline">
                <ul id="filters" class="filters option-set" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">all</a></li>
                    @foreach($category as $c)
                        <li><a href="#filter" data-option-value=".{{ $c->category }}">{{ $c->category }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="items" style="margin-bottom: 60px;">
                @foreach($projects as $p)
                    <div class="work col-xs-4
                        @foreach($project_category as $pc)
                    @if($pc->fk_project_id == $p->project_id)
                    {{ $pc->category }} &nbsp
                            @endif
                    @endforeach
                            ">
                        <a target="_blank" href="{{ route('project.show.details', ['id' => $p->project_id]) }}">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="{{ asset('public/files/project_image/'.$p->project_img1) }}" height="200px;" alt=""/>
                                </div>
                                <div class="work-desc">
                                    <h4>{{ $p->project_name }}</h4>
                                    {{--<p>{{ $p->project_name }}</p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="clear"></div>
            </div>

        </div>

    </section>

    {{--<div class="container">--}}
        {{--<section id="text-area" style="margin-bottom: 40px;border-radius: 6px;">--}}
            {{--<div class="inner text-area" style="padding-top: 8px;">--}}
                {{--<span><h3 style="display: inline-flex">Call us today</h3></span> <span> <a style="" href="tel:+8801624666124">@ (+88) 01624666124</a> </span> or--}}
                {{--<span><h3 style="display: inline-flex">Email us</h3></span> <span> <a style="" href="mailto:index@techmetbd.com">index@techmetbd.com</a> </span>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}


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
</section>


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
