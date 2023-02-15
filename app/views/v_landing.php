<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!doctype html>
<html lang="en">
<!-- <html class="no-js" lang="en"> -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Tecnologym</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= BASE_URL ?>app/assets/img/Brand_Tecnologym.png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?= BASE_URL ?>app\assets\libs\landing\css\animate.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= BASE_URL ?>app\assets\libs\landing\css\LineIcons.2.0.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= BASE_URL ?>app\assets\libs\landing\css\bootstrap.4.5.2.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= BASE_URL ?>app\assets\libs\landing\css\default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= BASE_URL ?>app\assets\libs\landing\css\style.css">

</head>

<body>

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <!--====== LOGO NAVBAR ======-->
                            <a class="navbar-brand" href="index.html">
                                <img src="<?= BASE_URL ?>app\assets\img\Brand_Tecnologym.png" alt="Logo">
                            </a>
                            <!--====== BOTON RIGHT COLLAPSE ======-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <!--====== TOP MENU ======-->
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#">Sign In</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_hero d-lg-flex align-items-center">
            <!--====== Backgroung shapes======-->
            <img class="shape shape-1" src="<?= BASE_URL ?>app\assets\libs\landing\images\shape-1.svg" alt="shape">
            <img class="shape shape-2" src="<?= BASE_URL ?>app\assets\libs\landing\images\shape-2.svg" alt="shape">
            <img class="shape shape-3" src="<?= BASE_URL ?>app\assets\libs\landing\images\shape-3.svg" alt="shape">

            <!--====== Left Container ======-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header_hero_content mt-45">
                            <h2 class="header_title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s">Tecnologym</h2>
                            <p class="wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s">Toda la fuerza de la tecnología ahora en tus manos.</p>
                            <ul>
                                <li><a class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s" href="#">Sign In</a></li>
                                <li><a class="main-btn main-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s" href="#">Sign Up</a></li>
                            </ul>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_image d-flex align-items-end">
                <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                    <img src="<?= BASE_URL ?>app\assets\libs\landing\images\header_app.png" alt="header App">
                    <img src="<?= BASE_URL ?>app\assets\libs\landing\images\dots.svg" alt="dots" class="dots">
                </div> <!-- image -->
            </div> <!-- header image -->
        </div> <!-- header hero -->
    </section> <!--====== HEADER PART ENDS ======-->



    <!--====== FEATURES PART START ======-->

    <section id="features" class="features_area pt-35 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_1 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="features_icon">
                            <i class="lni lni-code"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title">Bootstrap</h4>
                            <p>Lorem ipsum dolor sit ame consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                        </div>
                    </div> <!-- single featuresow -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_2 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="features_icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title">HTML5</h4>
                            <p>Lorem ipsum dolor sit ame consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                        </div>
                    </div> <!-- single featuresow -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_3 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                        <div class="features_icon">
                            <i class="lni lni-exit-down"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title">Free</h4>
                            <p>Lorem ipsum dolor sit ame consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                        </div>
                    </div> <!-- single featuresow -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-30 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-9">
                    <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img class="image" src="<?= BASE_URL ?>app\assets\libs\landing\images\about.png" alt="about">
                        <img class="dots" src="<?= BASE_URL ?>app\assets\libs\landing\images\dots.svg" alt="dots">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title">
                            <h4 class="title">Discover New Experience!</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sediam nonumy eirmod tempor invidunt ut labore et dolore malquyam erat, sed diam voluptua. At vero eos et accusam et justo doloes et ea rebum. Stet clita kasd gubergren, nod sea takmaa santus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitdse ametr consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        </div>
                        <a class="main-btn" href="#">Discover</a>

                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APP FEATURES PART START ======-->

    <section id="app_features">

    </section>

    <!--====== APP FEATURES PART ENDS ======-->

    <!--====== VIDEO PART START ======-->

    <section id="video" class="video_area pt-80 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center">
                        <h4 class="title">You are using free lite version</h4>
                        <p>Please, purchase full version of the template to get all sections, features and permission to remove footer credits.</p></br>

                        <a href="https://rebrand.ly/advanced-ud" rel="nofollow" class="main-btn">Purchase Now</a>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="screenshot">

    </section>

    <!--====== PRICNG PART START ======-->

    <section id="pricing" class="pricing_area mt-80 pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">Choose a Plan</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sediam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_color_1 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Startup</h5>
                            <i class="lni lni-coffee-cup"></i>
                            <span class="price">$9.00</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>24/7 Support</li>
                                <li>Free Update</li>
                                <li>unimited download</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">Get Started</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_active pricing_color_2 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Standard</h5>
                            <i class="lni lni-crown"></i>
                            <span class="price">$15.00</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>24/7 Support</li>
                                <li>Free Update</li>
                                <li>unimited download</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn">Get Started</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_color_3 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Premium</h5>
                            <i class="lni lni-diamond-alt"></i>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>24/7 Support</li>
                                <li>Free Update</li>
                                <li>unimited download</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">Get Started</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICNG PART ENDS ======-->

    <!--====== DOWNLOAD APP PART START ======-->

    <section id="download" class="download_app_area pt-80 mb-80">
        <div class="container">
            <div class="download_app">
                <div class="download_shape">
                    <img src="<?= BASE_URL ?>app\assets\libs\landing\images\shape-5.svg" alt="shape">
                </div>
                <div class="download_shape_2">
                    <img src="<?= BASE_URL ?>app\assets\libs\landing\images\shape-6.png" alt="shape">
                </div>
                <div class="download_app_content">
                    <h3 class="download_title">Download The App</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sediam nonumy eirmod.</p>
                    <ul>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <span class="icon">
                                    <i class="lni lni-play-store"></i>
                                </span>
                                <span class="content media-body">
                                    <h6 class="title">Play Store</h6>
                                    <p>Download Now</p>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <span class="icon">
                                    <i class="lni lni-apple"></i>
                                </span>
                                <span class="content">
                                    <h6 class="title">App Store</h6>
                                    <p>Download Now</p>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- download app content -->
            </div> <!-- download app -->
        </div> <!-- container -->
        <div class="download_app_image d-none d-lg-flex align-items-end">
            <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                <img src="<?= BASE_URL ?>app\assets\libs\landing\images\download.png" alt="download">
            </div> <!-- image -->
        </div> <!-- download app image -->
    </section>

    <!--====== DOWNLOAD APP PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-80 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">From The Blog</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sediam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="single_blog blog_1 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="blog_image">
                            <img src="<?= BASE_URL ?>app\assets\libs\landing\images\blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta d-flex justify-content-between">
                                <div class="meta_date">
                                    <span>20 December, 2023</span>
                                </div>
                                <div class="meta_like">
                                    <ul>
                                        <li><a href="#"><i class="lni lni-comments-alt"></i> 20</a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i> 15</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="blog_title"><a href="#">Unlimited featrues with free updates.</a></h4>
                            <a href="#" class="main-btn">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="single_blog blog_2 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="blog_image">
                            <img src="<?= BASE_URL ?>app\assets\libs\landing\images\blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta d-flex justify-content-between">
                                <div class="meta_date">
                                    <span>20 December, 2023</span>
                                </div>
                                <div class="meta_like">
                                    <ul>
                                        <li><a href="#"><i class="lni lni-comments-alt"></i> 20</a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i> 15</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="blog_title"><a href="#">Easy to use and customize the App.</a></h4>
                            <a href="#" class="main-btn">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="single_blog blog_3 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="blog_image">
                            <img src="<?= BASE_URL ?>app\assets\libs\landing\images\blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta d-flex justify-content-between">
                                <div class="meta_date">
                                    <span>20 December, 2023</span>
                                </div>
                                <div class="meta_like">
                                    <ul>
                                        <li><a href="#"><i class="lni lni-comments-alt"></i> 20</a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i> 15</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="blog_title"><a href="#">Super fast and strong security.</a></h4>
                            <a href="#" class="main-btn">Read More</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="footer_subscribe text-center">
                        <h3 class="subscribe_title">Subscribe our newsletter</h3>
                        <p>Join thousands of users who believe this is the one app.</p>

                        <div class="subscribe_form">
                            <form action="#">
                                <input type="text" placeholder="Enter Email...">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div> <!-- subscribe form -->
                    </div> <!-- footer subscribe -->
                    <div class="footer_social text-center mt-60">
                        <ul>
                            <li><a href="#"><span class="lni lni-facebook-filled"></span></a></li>
                            <li><a href="#"><span class="lni lni-twitter-original"></span></a></li>
                            <li><a href="#"><span class="lni lni-instagram-filled"></span></a></li>
                            <li><a href="#"><span class="lni lni-linkedin-original"></span></a></li>
                        </ul>
                    </div> <!-- footer social -->
                    <div class="footer_copyright text-center mt-55">
                        <p>Copyright &copy; 2023. Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                    </div> <!-- footer copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->





    <!--====== Jquery js ======-->
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\vendor\jquery-1.12.4.min.js"></script>
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\vendor\modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\popper.min.js"></script>
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\bootstrap.4.5.2.min.js"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\jquery.easing.min.js"></script>
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="<?= BASE_URL ?>app\assets\libs\landing\js\main.js"></script>

</body>

</html>