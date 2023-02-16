<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!doctype html>
<html lang="en">
<!-- <html class="no-js" lang="en"> -->

<?php include_once 'config\config.php' ?>
<script>
    const BASE_URL = '<?= BASE_URL; ?>';
    console.log(BASE_URL);
</script>


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
                            <a class="navbar-brand " href="index.html">
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
                                        <a class="page-scroll" href="<?= BASE_URL ?>c_Director">Sign In</a>
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
                            <p class="wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s">All the power of technology now in your hands.</p>
                            <ul>
                                <li><a class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s" href="<?= BASE_URL ?>c_Director">Sign In</a></li>
                                <li><a class="main-btn main-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s" href="<?= BASE_URL ?>c_Director">Sign Up</a></li>
                            </ul>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

            <div class="header_image d-flex align-items-end">
                <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                    <img src="<?= BASE_URL ?>app\assets\img\iphone.png" width="300" alt="header App">
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
                    <div class="single_features mt-30 features_1 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">

                        <img src="<?= BASE_URL ?>app\assets\img\icons\pullups.gif" alt="" srcset="">
                        <div class="features_content">
                            <h4 class="features_title">Entrenos Personales</h4>
                            <p>Cada monitor podrá llevar un registro de sus entrenos personales y continuo para que midan lo mismo</p>
                        </div>

                    </div> <!-- single featuresow -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_2 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="<?= BASE_URL ?>app\assets\img\icons\administration.gif" alt="" srcset="">
                        <div class="features_content">
                            <h4 class="features_title">Administration</h4>
                            <p>Fácil gestión de las salas y las clases para llevar la gestion perfecta de tu gimnasio</p>
                        </div>
                    </div> <!-- single featuresow -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_3 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                        <img src="<?= BASE_URL ?>app\assets\img\icons\support.gif" alt="" srcset="">
                        <div class="features_content">
                            <h4 class="features_title">Soporte Técnico</h4>
                            <p>Soporte técnico garantizado que solucionara cualquier problema enseguida</p>
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
                        <img class="image" src="<?= BASE_URL ?>app\assets\img\iphone.png" alt="about">
                        <img class="dots" src="<?= BASE_URL ?>app\assets\libs\landing\images\dots.svg" alt="dots">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title">
                            <h4 class="title">Descubre la nueva manera de gestionar tu tiempo!</h4>
                            <p>Si desea gestionar su gimnasio así como sus horarios o sus entrnemaientos personales esta aplciación te ayudará a todo eso y más. Desde gestión de centros a gestión personal tanto para entrenamientos como para horarios distribuidos en diferentes salas en función de las necesidades de su centro.</p>
                        </div>
                        <a class="main-btn" href="#">Descubrelo</a>

                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== PRICNG PART START ======-->

    <section id="pricing" class="pricing_area mt-80 pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">Elige tu Plan</h4>
                        <p>Elige que eres y como deseas gastar tu dinero para ganar tu tiempo.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_color_1 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Entrenador</h5>
                            <i class="lni lni-coffee-cup"></i>
                            <span class="price">9.00€/MES</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>24/7 Support</li>
                                <li>Free Update</li>
                                <li>unimited download</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">Comienza ahora</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_active pricing_color_2 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Gimnasio</h5>
                            <i class="lni lni-crown"></i>
                            <span class="price">15.00€/MES</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>24/7 Support</li>
                                <li>Free Update</li>
                                <li>unimited download</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn">Comienza ahora</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_color_3 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Organizaciones</h5>
                            <i class="lni lni-diamond-alt"></i>
                            <span class="price">20.00€/MES</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>24/7 Support</li>
                                <li>Free Update</li>
                                <li>unimited download</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">Comienza ahora</a>
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
                    <h3 class="download_title">Descarga la APP</h3>
                    <p>Lleva siempre contigo la gestión de tu gimnasio y organiza tu vida y tus horarios desde cualquier sitio</p>
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
                <img src="<?= BASE_URL ?>app\assets\img\iphone.png" alt="download">
            </div> <!-- image -->
        </div> <!-- download app image -->
    </section>

    <!--====== DOWNLOAD APP PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="footer_social text-center mt-60">
                        <ul>
                            <li><a href="#"><span class="lni lni-facebook-filled"></span></a></li>
                            <li><a href="#"><span class="lni lni-twitter-original"></span></a></li>
                            <li><a href="#"><span class="lni lni-instagram-filled"></span></a></li>
                            <li><a href="#"><span class="lni lni-linkedin-original"></span></a></li>
                        </ul>

                    </div> <!-- footer social -->
                    <div class="footer_copyright text-center mt-55">
                        <p>Copyright &copy; 2023. Designed and Developed by <a href="https://github.com/pitterpj" rel="nofollow">Pedro.J</a></p>
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