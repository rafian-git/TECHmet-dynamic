<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>TECHmet</title>
    <meta name="description" content="your TECH demands to be MET" />
    <meta name="keywords"
        content="IT , IT solutions , IT farm , Software farm ,Software solutions , TECHmet bd, TECHmet" />
    <meta name="author" content="TECHmet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="public/Site/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="public/Site/images/favicon.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/Site/css/reset.css" />
    <link rel="stylesheet" href="public/Site/css/animate.min.css" />
    <link rel="stylesheet" href="public/Site/css/bootstrap.css" />
    <link rel="stylesheet" href="public/Site/css/style.css" />
    <link rel="stylesheet" href="public/Site/css/flexslider.css" />
    <link rel="stylesheet" href="public/Site/css/font-awesome.css" />
    <link rel="stylesheet" href="public/Site/css/owl.carousel.css" />
    <link rel="stylesheet" href="public/Site/css/settings.css" />
    <link rel="stylesheet" href="public/Site/css/prettyPhoto.css" />
    <link rel="stylesheet" href="public/Site/css/responsive.css" />
    <link rel="stylesheet" href="public/Site/css/player/YTPlayer.css" />
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <!-- End CSS Files -->

</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

    <div id="pageloader">
        <div class="loader-item">
            <img src="public/Site/images/loading.gif" alt='loader' />
        </div>
    </div>

    <!-- Home Section -->
    <section id="home" class="">



        <!-- Navigation Section -->
		<section id="navigation" class="shadow">

			<div class="inner navigation">

				<!-- Logo Img -->
				<div class="logo">
					<a class="scroll" href="#home"><img src="public/Site/images/logo.png" alt="Logo" /></a>
				</div>

				<!-- Nav Menu -->
				<div class="nav-menu">

					<ul class="nav main-nav">
						<li><a class="scroll" href="{{ route('index') }}#home">home</a></li>
						<li><a class="scroll" href="{{ route('index') }}#about">services</a></li>
						<li><a class="scroll" href="{{ route('index') }}#services">about</a></li>
                        <li><a class="scroll" href="{{ route('index') }}#portfolio">projects</a></li>
						<li class="active"><a class="scroll" href="{{ route('team') }}">team</a></li>
						<li><a class="scroll" href="{{ route('contact') }}">contact</a></li>

					</ul>

				</div>


				<!-- Dropdown Menu For Mobile Devices-->
				<div class="dropdown mobile-drop">
					<a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
					<ul class="nav dropdown-menu fullwidth" role="menu">
						<li><a class="scroll" href="{{ route('home') }}#home">home</a></li>
						<li><a class="scroll" href="{{ route('index') }}#about">services</a></li>
						<li><a class="scroll" href="{{ route('index') }}#services">about</a></li>
                        <li><a class="scroll" href="{{ route('index') }}#portfolio">projects</a></li>
						<li><a class="scroll" href="{{ route('team') }}">team</a></li>
						<li><a class="scroll" href="{{ route('contact') }}">contact</a></li>
					</ul>
				</div>

				<div class="clear"></div>
			</div>

		</section>
		<!-- End Navigation Section -->

        <!-- Our Team Section -->
        <section id="team" class="contain " style="padding-top:0px;">

            <div class="inner">

                <!-- Header -->
                <h1  style=" text-align: center;">
                <b>TECHmet is</b>
                </h1>

                <!-- Second Header -->
                <!-- <div class="page-desc ">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old.
                </div> -->


                <div class="team-items slide-boxes">

                    <div class="item animated" data-animation="flipInY" data-animation-delay="0">
                        <img src="public/Site/images/team/1.jpg" alt="" class="img-circle" />
                        <h3>Usman Hossain</h3>
                        <h4>Director</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>usmantajer@gmail.com</p>

                        <div class="socials">
                            <a href="https://www.facebook.com/md.usman.9887"><i class="fa fa-facebook"></i></a>
                            <a href="mailto:usmantajer@gmail.com"><i class="fa fa-google-plus"></i></a>
                        </div>

                    </div>


                    <div class="item animated" data-animation="flipInY" data-animation-delay="300">
                        <img src="public/Site/images/team/2.jpg" alt="" class="img-circle" />
                        <h3>Rakib Bin Awal</h3>
                        <h4>Managing Director</h4>
                        <p> <i class="fa fa-envelope">&nbsp;&nbsp;</i>rakib@techmetbd.com</p>

                        <div class="socials">
                            <a href="https://www.facebook.com/RakibBinAwal"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/rakib_bin_awal/"><i class="fa fa-instagram"></i></a>
                            <a href="mailto:rakib.nadvi@gmail.com"><i class="fa fa-google-plus"></i></a>
                        </div>

                    </div>

                    <div class="item animated" data-animation="flipInY" data-animation-delay="600">
                        <img src="public/Site/images/team/3.jpg" alt="" class="img-circle" />
                        <h3>Safkat Ullah Khan</h3>
                        <h4>Marketing Executive</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>joga90zim@gmail.com</p>

                        <div class="socials">
                            <a href="https://www.facebook.com/safkat.u.khan"><i class="fa fa-facebook"></i></a>
                            <a href="mailto:joga90zim@gmail.com"><i class="fa fa-google-plus"></i></a>
                        </div>

                    </div>

                    <div class="item animated" data-animation="flipInY" data-animation-delay="900">
                        <img src="public/Site/images/team/4.jpg" alt="" class="img-circle" />
                        <h3>Jaber Al Rafian</h3>
                        <h4>Project Manager</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>rafian@techmetbd.com</p>

                        <div class="socials">
                            <a href="https://www.facebook.com/ra.fi.an.94"><i class="fa fa-facebook"></i></a>
                            <a href="mailto:rafian@techmetbd.com"><i class="fa fa-google-plus"></i></a>
                            <a href="https://github.com/rafian-git"><i class="fa fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/ra-fi-an-b52a71152/"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="item animated" data-animation="flipInY" data-animation-delay="800">
                        <img src="public/Site/images/team/5.JPG" alt="" class="img-circle" />
                        <h3>Rifat Hossain Khan</h3>
                        <h4>Software Developer</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>rifat.hk889@gmail.com</p>

                        <div class="socials">
                            <a href="https://www.facebook.com/rifathossain.khan"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/rifat.hossain.khan/"><i class="fa fa-instagram"></i></a>
                            <a href="mailto:rifat.hk889@gmail.com"><i class="fa fa-google-plus"></i></a>
                            <a href="https://github.com/Rifat-Hossain-Khan"><i class="fa fa-github"></i></a>
                        </div>

                    </div>

                    <div class="item animated" data-animation="flipInY" data-animation-delay="1000">
                        <img src="public/Site/images/team/6.jpg" alt="" class="img-circle" />
                        <h3>Md. Didarul Islam</h3>
                        <h4>Graphics Designer</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>didarul1713@gmail.com</p>


                        <div class="socials">
                            <a href="https://www.facebook.com/didarulislam.rony.77"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/didarul_islam_rony/"><i class="fa fa-instagram"></i></a>
                            <a href="mailto:didarul1713@gmail.com"><i class="fa fa-google-plus"></i></a>
                        </div>

                    </div>

                    <div class="item animated" data-animation="flipInY" data-animation-delay="1000">
                        <img src="public/Site/images/team/7.jpg" alt="" class="img-circle" />
                        <h3>Saika Farhin</h3>
                        <h4>Digital Marketing Manager</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>saikafarhin1811@gmail.com</p>


                        <div class="socials">
                            <a href="https://www.facebook.com/saika.farhin"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/_farhin_saika/"><i class="fa fa-instagram"></i></a>
                            <a href="mailto:saikafarhin1811@gmail.com"><i class="fa fa-google-plus"></i></a>
                        </div>

                    </div>


                    <div class="item animated" data-animation="flipInY" data-animation-delay="1000">
                        <img src="public/Site/images/team/8.jpg" alt="" class="img-circle" />
                        <h3>Arabi Kabir</h3>
                        <h4>Full Stack Developer</h4>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>mail2arabi@gmail.com</p>


                        <div class="socials">
                            <a href="https://www.facebook.com/arabi-kabir"><i class="fa fa-facebook"></i></a>
                            <a href="https://github.com/arabi-kabir"><i class="fa fa-github"></i></a>
                            <a href="mailto:mail2arabi@gmail.com"><i class="fa fa-google-plus"></i></a>
                        </div>

                    </div>

                </div>

            </div><!-- End inner div -->

        </section><!-- End Our Team Section -->



        <section id="footer">

    		<div class="inner footer">

    			<!-- Phone -->
    			<div class="col-xs-4 animated footer-box" data-animation="flipInY" data-animation-delay="0">
    				<a class="footer-links" href="tel:+8801307108222">
    					<i class="fa fa-mobile"></i>
    				</a>

    				<p class="footer-text">
    					<a class="" href="tel:+8801307108222">  <span>(+88) 01307108222</span>	</a> <br>
    				<a class="" href="tel:+8801624666124">	<span>(+88) 01624666124</span> 	</a>
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
    					<i class="fa fa-google-plus" ></i>
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

    			<a class="" href="https://goo.gl/maps/AJQicNc5BxZrLmGm9" target="_blank">	<p class="footer-text">
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

    </section>

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

        <!-- End JS Files -->

        <script>

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
