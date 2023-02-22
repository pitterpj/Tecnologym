<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!doctype html>
<html lang="en">

<?php include_once 'config\config.php' ?>

<script>
    // <---====== I have created this constant to be used as BASE_URL ======--->
    const BASE_URL = '<?= BASE_URL; ?>';
</script>

<head><!--====== Required meta tags ======-->

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

<!--====== MODAL LOGIN ======-->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
    <!-- The modal needs me to place it outside the body to let me interact. Problems with the z-index-->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Accede a tu cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group"> <!--== USER ==-->
                        <label class="control-label">Usuario: </label>
                        <div>
                            <input type="text" class="form-control input-lg" name="user" placeholder="Nombre de Usuario" value="">
                        </div>
                    </div>
                    <div class="form-group"><!--== PASSWORD ==-->
                        <label class="control-label">Contraseña: </label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password" placeholder="********" value="">
                        </div>
                    </div>
                    <div class="form-group"><!--== REMEMBER ME ==-->
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Recuérdame
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><!--== SUBMIT ==-->
                        <div>
                            <button type="submit" class="btn btn-success">Acceder</button>

                            <a class="btn btn-link" href="">¿Contraseña olvidada?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--====== END MODAL ======-->

<body>
    <!--====== PRELOADER PART START ======-->
    <!--====== When the page loading time is long, the loading spinner appears ======-->
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
        <!--====== HEADER NAVBAR ======-->
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <!--====== LOGO NAVBAR ======-->
                            <a class="navbar-brand " href="<?= BASE_URL ?>">
                                <img src="<?= BASE_URL ?>app\assets\img\Brand_Tecnologym.png" width="200" alt="Logo">
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
                                        <a class="page-scroll" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Características</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Acerca de</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Precios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#download">App</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="page-scroll" href="<?= BASE_URL ?>c_Users">Accede</a> -->
                                        <!-- Button trigger modal -->
                                        <a type="button" data-toggle="modal" data-target="#modalLogin">Accede</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

        </div> <!-- end header navbar -->
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
                            <!--====== Brand ======-->
                            <h2 class="header_title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s">TECNOLOGYM</h2>
                            <!--====== Slogan ======-->
                            <p class="wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s">Toda la fuerza de la tecnología ahora en tus manos.</p>
                            <ul>
                                <!--====== Buttons to Register ======-->
                                <li><a class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s" href="<?= BASE_URL ?>c_Users">Accede</a></li>
                                <li><a class="main-btn main-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s" href="<?= BASE_URL ?>c_Users">Registrate</a></li>
                            </ul>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- end left container -->

            <!--====== Right Container ======-->
            <div class="header_image d-flex align-items-end">
                <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                    <img src="<?= BASE_URL ?>app\assets\img\iphone.png" width="300" alt="header App">
                    <img src="<?= BASE_URL ?>app\assets\libs\landing\images\dots.svg" alt="dots" class="dots">
                </div> <!-- image -->
            </div> <!-- end image container -->
        </div> <!-- header hero -->


    </section> <!--====== HEADER PART ENDS ======-->

    <!--====== FEATURES PART START ======-->
    <section id="features" class="features_area pt-35 pb-80">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_1 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">

                        <img src="<?= BASE_URL ?>app\assets\img\icons\calendar.gif" alt="" srcset="">
                        <div class="features_content">
                            <h4 class="features_title">Creador de Horarios</h4>
                            <p>Podrás gestionar las clases de tu gimnasio o centro deportivo semanal, mensual e incluso anualmente.</p>
                        </div>

                    </div> <!-- single featuresow -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_2 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="<?= BASE_URL ?>app\assets\img\icons\pullups.gif" alt="" srcset="">
                        <div class="features_content">
                            <h4 class="features_title">Entrenamientos Personales</h4>
                            <p>Cada entrenador podrá llevar un seguimiento de la alimentación y las tablas de cada usuario desde un solo dispositivo</p>
                        </div>
                    </div> <!-- single featuresow -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_3 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                        <img src="<?= BASE_URL ?>app\assets\img\icons\edition.gif" alt="" srcset="">
                        <div class="features_content">
                            <h4 class="features_title">Soporte Técnico</h4>
                            <p>Administración total de tu centro o tu perfil. Ya sea para organizaciones como para profesionales individuales.</p>
                        </div>
                    </div> <!-- single featuresow -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section><!--====== FEATURES PART ENDS ======-->

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
                            <h4 class="title">¡Descubre la nueva manera de gestionar tu centro o tu tiempo!</h4>
                            <p>Si deseas gestionar tu gimnasio o tu centro, así como sus horarios o tu seguimiento de entrenamientos personales, esta aplciación te ayudará a todo eso y más. Desde la gestión interna del centro a la gestión personal tanto para entrenamientos como para horarios distribuidos en diferentes salas en función de las necesidades de organizaciones o individuales.</p>
                        </div>
                        <a class="main-btn" href="#">Descubrelo</a>

                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section><!--====== ABOUT PART ENDS ======-->

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
                <!--====== Training ======-->
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_color_1 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Entrenador</h5>
                            <i class="lni lni-coffee-cup"></i>
                            <span class="price">9.00€/MES</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>Soporte 24/7</li>
                                <li>Actualizaciones automáticas</li>
                                <li>Gestión de alimentación</li>
                                <li>Gestión de tablas</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">Soy Entrenador</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <!--====== Gym ======-->
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_active pricing_color_2 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Gimnasio</h5>
                            <i class="lni lni-crown"></i>
                            <span class="price">15.00€/MES</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>Soporte 24/7</li>
                                <li>Actualizaciones automáticas</li>
                                <li>Gestión de entrenos</li>
                                <li>Gestión de horarios</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn">Soy Gimnasio</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <!--====== Organization ======-->
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center pricing_color_3 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="pricing_top_bar">
                            <h5 class="pricing_title">Organizaciones</h5>
                            <i class="lni lni-diamond-alt"></i>
                            <span class="price">20.00€/MES</span>
                        </div>
                        <div class="pricing_list">
                            <ul>
                                <li>Soporte 24/7</li>
                                <li>Actualizaciones automáticas</li>
                                <li>Gestión de personal</li>
                                <li>Gestión de salas</li>
                            </ul>
                        </div>
                        <div class="pricing_btn">
                            <a href="#" class="main-btn main-btn-2">Soy Organización</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section><!--====== PRICNG PART ENDS ======-->

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
                    <p>Lleva siempre contigo la gestión de tu gimnasio. Organiza tus entrenos y tus horarios desde cualquier sitio.</p>
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
    </section> <!--====== DOWNLOAD APP PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <section id="footer" class="footer_area pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="footer_social text-center mt-60">
                        <ul>
                            <li><a href="https://t.me/PitterPJ"><span class="lni lni-telegram-original"></span></a></li>
                            <li><a href="https://twitter.com/pitterpjc"><span class="lni lni-twitter-original"></span></a></li>
                            <li><a href="https://www.linkedin.com/in/pedro-jorge-cid/"><span class="lni lni-linkedin-original"></span></a></li>
                            <li><a href="https://github.com/pitterpj"><span class="lni lni-github-original"></span></a></li>
                        </ul>
                    </div> <!-- footer social -->
                    <div class="footer_copyright text-center mt-55">
                        <p>Copyright &copy; 2023. Diseñado y desarrolado por <a href="https://github.com/pitterpj" rel="nofollow">Pedro.J (Pitter)</a></p>
                    </div> <!-- footer copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <!--====== BACK TOP TOP PART START ======-->
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    </section> <!--====== FOOTER PART ENDS ======-->

    <!--=========================================================================-->
    <!--====== SCRIPTS ======-->
    <!--=========================================================================-->

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