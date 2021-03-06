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
        <style>

            .slideshow {
  position: relative !important;
}
        </style>

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
        <!-- ========== End Header Follow ========== -->

        <!-- ========== Start Home Slider ========== -->

        <section class="slideshow" id="js-header">
            <div class="slideshow__slide js-slider-home-slide is-current" data-slide="1">
                <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
                    <div class="slideshow__slide-background-load-wrap background-absolute">
                        <div class="slideshow__slide-background-load background-absolute">
                            <div class="slideshow__slide-background-wrap background-absolute">
                                <div class="slideshow__slide-background background-absolute">
                                    <div class="slideshow__slide-image-wrap background-absolute">
                                      <!--  <div class="slideshow__slide-image background-absolute" style="background-image: url('assets/images/slider/slide01.jpg');">
                                        </div>-->

<video autoplay muted loop class="vid-container">
    <source src="assets/images/slider/FINAL VIDEO.mp4" type="video/mp4">

  </video>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="slideshow__slide-caption">
                    <div class="slideshow__slide-caption-text">
                        <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
                            <h3 class="cat">Empower Your Imagination With Our Skills</h3>
                            <h1 class="slideshow__slide-caption-title" id="bt">WestCoast Animations</h1>
                            <a class="slideshow__slide-btn align-items-center" href="{{route('portfolio')}}">
                                <span class="btn-content d-flex align-items-center">
                                    <span class="btn-circles">
                                        <span class="btn-circle"></span>
                                        <span class="btn-small-circle d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.214 23.057">
                                                <g fill="none" stroke-linecap="square" stroke-width="1.5">
                                                    <path d="M23.528 11.685h-20M16.685 19.528l8-8-8-8"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="btn-txt">View more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           <div class="slideshow__slide js-slider-home-slide" data-slide="2">
                <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
                    <div class="slideshow__slide-background-load-wrap background-absolute">
                        <div class="slideshow__slide-background-load background-absolute">
                            <div class="slideshow__slide-background-wrap background-absolute">
                                <div class="slideshow__slide-background background-absolute">
                                    <div class="slideshow__slide-image-wrap background-absolute">
                                        <!--<div class="slideshow__slide-image background-absolute" style="background-image: url('assets/images/slider/slide02.jpg');">
                                        </div>-->

                                        <video autoplay muted loop class="vid-container">
                                            <source src="assets/images/slider/banner.mp4" type="video/mp4">

                                          </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideshow__slide-caption">
                    <div class="slideshow__slide-caption-text">
                        <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
                            <h3 class="cat">Empower Your Imagination With Our Skills</h3>
                            <h1 class="slideshow__slide-caption-title">WestCoast Animations</h1>
                            <a class="slideshow__slide-btn align-items-center" href="blog.html">
                                <span class="btn-content d-flex align-items-center">
                                    <span class="btn-circles">
                                        <span class="btn-circle"></span>
                                        <span class="btn-small-circle d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.214 23.057">
                                                <g fill="none" stroke-linecap="square" stroke-width="1.5">
                                                    <path d="M23.528 11.685h-20M16.685 19.528l8-8-8-8"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="btn-txt">View more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slideshow__slide js-slider-home-slide" data-slide="3">
                <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
                    <div class="slideshow__slide-background-load-wrap background-absolute">
                        <div class="slideshow__slide-background-load background-absolute">
                            <div class="slideshow__slide-background-wrap background-absolute">
                                <div class="slideshow__slide-background background-absolute">
                                    <div class="slideshow__slide-image-wrap background-absolute">
                                       <!-- <div class="slideshow__slide-image background-absolute" style="background-image: url('assets/images/slider/slide03.jpg');">
                                        </div>-->
                                        <video autoplay muted loop class="vid-container">
                                            <source src="assets/images/slider/3d particles.mp4" type="video/mp4">

                                          </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideshow__slide-caption">
                    <div class="slideshow__slide-caption-text">
                        <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
                            <h3 class="cat">Empower Your Imagination With Our Skills</h3>
                            <h1 class="slideshow__slide-caption-title">WestCoast Animations</h1>
                            <a class="slideshow__slide-btn align-items-center" href="blog.html">
                                <span class="btn-content d-flex align-items-center">
                                    <span class="btn-circles">
                                        <span class="btn-circle"></span>
                                        <span class="btn-small-circle d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.214 23.057">
                                                <g fill="none" stroke-linecap="square" stroke-width="1.5">
                                                    <path d="M23.528 11.685h-20M16.685 19.528l8-8-8-8"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="btn-txt">View more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slideshow__slide js-slider-home-slide" data-slide="4">
                <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
                    <div class="slideshow__slide-background-load-wrap background-absolute">
                        <div class="slideshow__slide-background-load background-absolute">
                            <div class="slideshow__slide-background-wrap background-absolute">
                                <div class="slideshow__slide-background background-absolute">
                                    <div class="slideshow__slide-image-wrap background-absolute">
                                      <!--  <div class="slideshow__slide-image background-absolute" style="background-image: url('assets/images/slider/slide04.jpg');">
                                        </div>-->
                                        <video autoplay muted loop class="vid-container">
                                            <source src="assets/images/slider/FINAL CHANGES with music.mp4" type="video/mp4">

                                          </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideshow__slide-caption">
                    <div class="slideshow__slide-caption-text">
                        <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
                            <h3 class="cat">Empower Your Imagination With Our Skills</h3>
                            <h1 class="slideshow__slide-caption-title">WestCoast Animations</h1>
                            <a class="slideshow__slide-btn align-items-center" href="blog.html">
                                <span class="btn-content d-flex align-items-center">
                                    <span class="btn-circles">
                                        <span class="btn-circle"></span>
                                        <span class="btn-small-circle d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.214 23.057">
                                                <g fill="none" stroke-linecap="square" stroke-width="1.5">
                                                    <path d="M23.528 11.685h-20M16.685 19.528l8-8-8-8"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="btn-txt">View more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="slideshow__slide-caption">
                    <div class="slideshow__slide-caption-text">
                        <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
                            <h3 class="cat">Empower Your Imagination With Our Skills</h3>
                            <h1 class="slideshow__slide-caption-title">WestCoast Animations</h1>
                            <a class="slideshow__slide-btn align-items-center" href="blog.html">
                                <span class="btn-content d-flex align-items-center">
                                    <span class="btn-circles">
                                        <span class="btn-circle"></span>
                                        <span class="btn-small-circle d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.214 23.057">
                                                <g fill="none" stroke-linecap="square" stroke-width="1.5">
                                                    <path d="M23.528 11.685h-20M16.685 19.528l8-8-8-8"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="btn-txt">View more</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-home_footer">
                <div class="d-flex">
                    <div class="slider-home-prev">
                        <div class="slider-home-prev-container js-slider-home-button js-slider-home-prev">
                            <span class="arrow"></span>
                        </div>
                    </div>
                    <div class="slider-home-next">
                        <div class="slider-home-next-container js-slider-home-button js-slider-home-next">
                            <span class="arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <span class="pagination-current-number"></span>
                <div class="pagination-progress">
                    <span class="pagination-progressbar"></span>
                </div>
                <span class="pagination-total-number"></span>
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

    </body>

</html>
