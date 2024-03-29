<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!--==== Left Menu that contracts and header with collapsing buttons ====-->

<body>

    <div class="wrapper">

        <!--====== SIDEBAR ======-->
        <nav id="sidebar">

            <!--====== BRAND ======-->
            <div class="sidebar-header">
                <a href="<?= BASE_URL . "./c_Users/dashboard" ?>"><img class="img-fluid" src="<?= BASE_URL ?>app/assets/img/Brand_Tecnologym.png" width="200" alt="Brand-Tecnologym"></a>
            </div>

            <!--====== AVATAR ROLE PERSON======-->
            <div class="sidebar-header text-center push ">
                <?php if (isset($_SESSION['session']['avatar'])) {
                    echo '<img class="img-fluid rounded-circle" src="' . BASE_URL . IMG_URL . $_SESSION['session']['avatar'] . '" width="200" "height=200" alt="Brand-Tecnologym">';
                } else {
                    echo '<img class="img-fluid rounded-circle" src="' . BASE_URL . 'app\assets\img\icons\avatar_person.jpg" width="200" alt="Brand-Tecnologym">';
                } ?>
                <span class="disappear fs-3"><?= $_SESSION['session']['name']; ?></span>
                <p></p>
                <span class="disappear fs-4"><?= $_SESSION['session']['role']; ?></span>
                <strong class="mt-4">
                    <?php switch ($_SESSION['session']['role']) {
                        case "Director":
                            echo "D";
                            break;
                        case "Monitor":
                            echo "M";
                            break;
                        case "Coordinador":
                            echo "C";
                            break;
                    } ?>
                </strong>
            </div>

            <!--====== SIDEBAR OPTIONS======-->
            <ul class="list-unstyled">
                <li class="active"> <!--====== Icon home ======-->
                    <a href="<?= BASE_URL . "c_Users/dashboard" ?>">
                        <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\homeGym2.png" width="50" alt="Inicio"></i>
                        <span class="disappear">Inicio</span>
                    </a>
                </li>

                <!--==== Depending on the role, this shows one menu of options or another ====-->
                <li> <!--====== Icon Create schedules  ======-->
                    <?php if ($_SESSION['session']['role'] == "Monitor") {
                        echo "<a href='" . BASE_URL . "c_Schedule/showPersonalSchedule'  class=''>";
                        echo "<i class='fas fa-home'>";
                        echo "<img src='" . BASE_URL . "app\assets\img\icons\schedule2.png' width='50' alt='Horario'>";
                        echo "</i>";
                        echo "<span class='disappear'>Horarios</span>";
                        echo "</a>";
                    } ?>

                    <?php if ($_SESSION['session']['role'] != "Monitor") {
                        echo "<a href='" . BASE_URL . "c_Schedule/showPersonalSchedule'  class=''>";
                        echo "<i class='fas fa-home'>";
                        echo "<img src='" . BASE_URL . "app\assets\img\icons\schedule2.png' width='50' alt='Horario'>";
                        echo "</i>";
                        echo "<span class='disappear'>Horarios</span>";
                        echo "</a>";
                        // <!--====== subclass schedules  ======-->

                        // <!--== Create ==-->


                        echo "<a href='" . BASE_URL . "c_Schedule/createSchedule'>";
                        echo "<i class='fas fa-home'>";
                        echo "<img src='" . BASE_URL . "app\assets\img\icons\schedule_plus2.png' width='50' alt='Crear Horario'>";
                        echo "</i>";
                        echo "<span class='disappear'>Crear Horarios</span></a>";

                        if ($_SESSION['session']['role'] == "Director") {

                            echo "<a href='" . BASE_URL . "c_Users/managePersonal'>";
                            echo "<i class='fas fa-home'>";
                            echo "<img src='" . BASE_URL . "app/assets/img/icons/adminPerson.png' width='50' alt='Administrar Personal'>";
                            echo "</i>";
                            echo "<span class='disappear'>Administrar Person</span></a>";
                        }
                    } ?>
                </li>

                <li> <!-- Icon Personal Training  -->
                    <a href="<?= BASE_URL ?>c_PersonalTraining/showPersonalTraining">
                        <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\personalTrainer2.png" width="50" alt="Entrenamientos Personales"></i>
                        <span class="disappear">Entrenamientos</span></a>
                </li>

                <!-- TODO:  Ability to request vacations and add shift changes-->
                <!-- <li> Icon Vacations / Rotations 
                    <a href="#holidaysSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\time_out.png" width="50" alt="Horario"></i>
                        <span class="disappear">Vacaciones</span>
                    </a>

                     subclass schedules 
                    <ul class="collapse list-unstyled" id="holidaysSubmenu">
                        <li>
                            <a href="#">
                                <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\overtime.png" width="30" alt="Horario Personal"></i>
                                <span class="disappear">Solicitar Vacaciones</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\calendar_time.png" width="30" alt="Crear Horario"></i>
                                <span class="disappear">Pedir Rotacion</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\grinch.png" width="35" alt="Administrar Personal"></i>
                                <span class="disappear">Días disponibles</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav> <!--====== END SIDEBAR======-->

        <!--====== PAGE CONTENT HEADER ======-->
        <div id="content">
            <nav class="fondo-2 shadow p-3 mb-5 rounded navbar navbar-expand-lg navbar-light">
                <div class="container-fluid ">

                    <!--====== COLLAPSE BUTTON ======-->
                    <button type="button" id="sidebarCollapse" class="btn row">
                        <i class="fas fa-home"><img class="rotation" src="<?= BASE_URL ?>app\assets\img\icons\left_arrow.png" width="35" alt="Cerrar Menu"></i>
                    </button>

                    <!--====== RIGHT ICON COLLAPSE ======-->
                    <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"><img src="<?= BASE_URL ?>app\assets\img\icons\avatar.png" width="35" alt="X"></i>
                    </button>

                    <!--====== OPTIONS RIGHT BUTTON COLLAPSE ======-->
                    <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto text-end">

                            <li class="nav-item active">
                                <a class="text-light nav-link rounded" href="<?= BASE_URL . "c_Users/dashboard" ?>">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a class="text-light nav-link rounded" href="<?= BASE_URL . 'c_Users/settings/' . $_SESSION["session"]["id_person"] ?>">Ajustes</a>
                            </li>

                            <li class=" nav-item">
                                <a id="btn_logOut" class="text-light nav-link rounded" href="<?= BASE_URL ?>c_Home/logOut">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!--====== END PAGE CONTENT HEADER ======-->