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




        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->

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