<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dolunay - Creative Portfolio Multi-Purpose & Personal HTML Template">
    <meta name="keywords" content="Html, Css, jQuery, JavaScript, Dolunay, Multi-Purpose, responsive, personal, Portfolio, design, creative, template">

    <!-- Favicon -->

    <title>Contact-Us</title>

    <link rel="icon" href="assets/images/icon.png">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="../../css2.css?family=Roboto:wght@300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../../css2-1.css?family=Poppins:wght@300;400;500;600;700;800&display=swap">
        <!-- Site css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <style>
            label{
                color: white !important;
            }
            @media only screen and (max-device-width: 414px) {
    .header:before{
        height: 60% !important;
}
}
/* *{
    font-family: "Gemstone" !important;
} */
</style>



</head>

<body class="portfolio-page cursor-effect">

    <div id="cursor">
        <div id="circle"></div>
    </div>


    <!-- Preloader Start Here -->
    <div class="preloader"><canvas id="canvas"></canvas></div>

    <!-- Preloader End Here -->

    <header class="header">
        <div class="dl-container">
            <div class="header-content">
                <p class="subtitle">Contact Us</p>
                <h1 class="title">Our Best Works</h1>
            </div>
        </div>
    </header>



        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        @include('components.header')
        <!--=====================================-->

        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================
        -->





        <section class="contact" style="font-family: MusticaPro-SemiBold">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">

<!-- form code-->


@if(session()->has('message'))
<div class="alert alert-success" role="alert">
{{ session()->get('message') }}
</div>
@endif
                                <form  action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" required class="form-control" name="name" placeholder="John Doe">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" required class="form-control" name="email" placeholder="example@mail.com">
                                    </div>
                                    <div class="form-group mb--40">
                                        <label>Phone</label>
                                        <input type="tel" required class="form-control" name="phone" placeholder="+123456789">
                                    </div>
                                    <div class="form-group mb--40">
                                        <label>How can we help you?</label>
                                        <textarea name="msg" required id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="axil-btn btn-borderd btn-fluid btn-primary" name="submit-btn">Get Pricing Now</button>

                                        <span class="btn-content d-flex align-items-center">
                                            <span class="btn-circles">
                                                <span class="btn-circle"></span>
                                                <span class="btn-small-circle d-flex">

                                                </span>
                                            </span>
                                            {{-- <span class="btn-txt">Send Message</span> --}}
                                    </span>


                                    </div>

                                </form>

                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="contact-boxes">
                                    <div class="contact-box">
                                        <div class="content-box">
                                            <h5>Visit Our Office</h5>
                                            <p>
                                                2619 Wilshire Blvd,<br>
                                                Los Angeles, CA 90057
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-box">
                                        <div class="content-box">
                                            <h5>Call Us Anytime</h5>
                                            <p>
                                                +1213 478 2978 <br>
                                                +1213 478 2978
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-box">
                                        <div class="content-box">
                                            <h5>Request A Quote</h5>
                                            <p>
                                                <a href="#" >westcoastanimations@gmail.com</a><br>
                                                <a href="#" >info@westcoastanimations.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>


        <div class="container">
            <div class="contact-wrap d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="sub-heading">Get In Touch</p>
                    <h2 class="heading">Let’s Make Something Great Together</h2>
                </div>
                <div class="btn-box d-flex justify-content-end align-items-center">
                    <a class="contact-btn align-items-center" href="{{route("portfolio")}}">
                        <span class="btn-content d-flex align-items-center">
                            <span class="btn-circles">
                                <span class="btn-circle"></span>
                                <span class="btn-small-circle d-flex">

                                </span>
                            </span>
                            <span class="btn-txt">Our Work</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="left-area">
                        <div class="footer-social-media">
                            <ul class="list-unstyled d-flex">
                                <li>
                                    <a class="parallax-item not-hide-cursor" href="https://www.facebook.com/WestcoastAnimation/">Fb.</a>
                                </li>
                                <li>
                                    <a class="parallax-item not-hide-cursor" href="#0">Tw.</a>
                                </li>
                                <li>
                                    <a class="parallax-item not-hide-cursor" href="#0">Be.</a>
                                </li>
                                <li>
                                    <a class="parallax-item not-hide-cursor" href="https://dribbble.com/Animations01">Dr.</a>
                                </li>
                                <li>
                                    <a class="parallax-item not-hide-cursor" href="#0">Ln.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-area">
                        <p>2022 &copy; Copyright <i class="fa fa-heart"></i> <a class="cursor-alter not-hide-cursor" href="#">SMTEK</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <div class="progress-parent">
        <svg class="progress-circle" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>



    <!-- Jquery Js -->
     <!-- Jquery -->
     <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.2.1.min.js"></script>
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
     <!-- Scroll To Top js -->
     <script src="assets/js/scrolltotop.js"></script>
     <!-- Main custom-->
     <script src="assets/js/custom.js"></script>


    <!-- Site Scripts -->

</body>

</html>
