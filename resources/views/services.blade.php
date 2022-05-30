<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dolunay - Creative Portfolio Multi-Purpose & Personal HTML Template">
        <meta name="keywords" content="Html, Css, jQuery, JavaScript, Dolunay, Multi-Purpose, responsive, personal, Portfolio, design, creative, template">

        <!-- Title -->
        <title>WestCoastAnimations</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/images/icon.png">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="../../css2.css?family=Roboto:wght@300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../../css2-1.css?family=Poppins:wght@300;400;500;600;700;800&display=swap">
        <!-- Site css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="css/kube.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/swipebox.css">
        <link rel="stylesheet" href="css/style.css">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="cursor-effect">

        <!-- ========== Start Cursor ========== -->

        <div id="cursor">
            <div id="circle"></div>
        </div>

        <!-- ========== End Cursor ========== -->

         <!-- ========== Start Preloader ========== -->

         <div class="preloader"><canvas id="canvas"></canvas></div>

         <!-- ========== End Preloader ========== -->

        <!-- ========== Start Navbar ========== -->

      @include('components.header')


        <!-- ========== End Navbar ========== -->

        <!-- ========== Start Header Follow ========== -->



        <!-- ========== End Header Follow ========== -->



        <div class="photty_split_showcase_wrapper">
            <div class="photty_split_showcase wait4load">
                <div class="photty_split_slide photty_preload_slide photty_odd_slide1 photty_odd_slide photty_js_bg_image" data-count="1" data-src="img/14.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">3D Animation</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('animation3d')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_even_slide1 photty_even_slide photty_js_bg_image" data-count="1" data-src="img/13.jfif">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">2D Animation</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('animation2d')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_odd_slide2 photty_odd_slide photty_js_bg_image" data-count="2" data-src="img/21.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">Logo Animation</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('logo')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_even_slide2 photty_even_slide photty_js_bg_image" data-count="2" data-src="img/12.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">White-Board Animation</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('whiteboard')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_odd_slide3 photty_odd_slide photty_js_bg_image" data-count="3" data-src="img/17.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">Typography</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('typography')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_even_slide3 photty_even_slide photty_js_bg_image" data-count="3" data-src="img/28.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">Explainer Videos</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route("explainer")}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>


                <div class="photty_split_slide photty_preload_slide photty_odd_slide4 photty_odd_slide photty_js_bg_image" data-count="4" data-src="img/26.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">Screen-Cast</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('screencast')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_even_slide4 photty_even_slide photty_js_bg_image" data-count="4" data-src="img/10.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">Illustration</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="{{route('illustration')}}"></a>
                    <div class="photty_split_overlay"></div>
                </div>
            <!--	<div class="photty_split_slide photty_preload_slide photty_odd_slide5 photty_odd_slide photty_js_bg_image" data-count="5" data-src="img/35.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">2D-Logo</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a href="3dlogo.html"></a>
                    <div class="photty_split_overlay"></div>
                </div>
                <div class="photty_split_slide photty_preload_slide photty_even_slide5 photty_even_slide photty_js_bg_image" data-count="5" data-src="img/45.jpg">
                    <div class="photty_split_title_wrapper">
                        <h2 class="photty_split_title">NFt</h2>
                        <div class="photty_split_caption"></div>
                    </div>
                    <a class="swipebox" href="img/45.jpg" title=""></a>
                    <div class="photty_split_overlay"></div>
                </div>-->
            </div>
            <a href="javascript:void(0)" class="photty_split_btn_prev"></a>
            <a href="javascript:void(0)" class="photty_split_btn_next"></a>
        </div>






        <!-- ========== Start Home Slider ========== -->

        <section class="slideshow" id="js-header">




            <div class="slideshow__slide js-slider-home-slide" data-slide="5">
                <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
                    <div class="slideshow__slide-background-load-wrap background-absolute">
                        <div class="slideshow__slide-background-load background-absolute">
                            <div class="slideshow__slide-background-wrap background-absolute">
                                <div class="slideshow__slide-background background-absolute">
                                    <div class="slideshow__slide-image-wrap background-absolute">
                                       <!-- <div class="slideshow__slide-image background-absolute" style="background-image: url('assets/images/slider/slide05.jpg');">
                                        </div>-->
                                        <video autoplay muted loop class="vid-container">
                                            <source src="assets/images/slider/vid_header2.mp4" type="video/mp4">

                                          </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>

        <!-- ========== End Home Slider ========== -->

        <!-- ========== Js ========== -->

        <!-- Jquery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <!-- popper -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Libs and Plugins JS -->
		<script src="assets/js/gsap/gsap.min.js"></script>
		<script src="assets/js/gsap/ScrollToPlugin.min.js"></script>
		<script src="assets/js/gsap/ScrollTrigger.min.js"></script>
        <!-- Owl Carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Preloader -->
        <script src="assets/js/preloader.js"></script>
         <!-- Slider Js -->
        <script src="assets/js/slider.js"></script>
        <!-- Main custom-->
        <script src="assets/js/custom.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.swipebox.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/split_showcase.js"></script>
        <script src="js/index.js"></script>
    </body>

</html>
