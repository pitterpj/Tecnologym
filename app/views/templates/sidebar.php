<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!-- Left Menu that contracts and header with collapsing buttons -->

<body>
    <div class="wrapper">
        <!--====== SIDEBAR ======-->
        <nav id="sidebar">
            <!--====== BRAND ======-->
            <div class="sidebar-header">
                <a href="<?= BASE_URL ?>c_Dashboard/dashboard"><img class="img-fluid" src="<?= BASE_URL ?>app/assets/img/Brand_Tecnologym.png" width="200" alt="Brand-Tecnologym"></a>
            </div>
            <!--====== AVATAR ROLE PERSON======-->
            <!-- TODO -- AÑADIR LA FOTO DE LA PERSONA.
                    -- CAMBIAR LA LETRA DEL ROL SEGÚN LA PERSONA -->
            <div class="sidebar-header text-center push ">
                <!-- Depending on the person, this avatar is one or the other -->
                <img class="img-fluid rounded-circle" src="<?= BASE_URL ?>app\assets\img\icons\avatar_person.jpg" width="200" alt="Brand-Tecnologym">
                <span class="disappear fs-3"><?= $_SESSION['session']['name']; ?></span>
                <span class="disappear fs-4"><?= $_SESSION['session']['role']; ?></span>
                <strong class="mt-4">G</strong>
            </div>

            <!--====== SIDEBAR OPTIONS======-->
            <ul class="list-unstyled">
                <li class="active"> <!--====== icon home ======-->
                    <a href="<?= BASE_URL ?>c_Dashboard/dashboard">
                        <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\home_gym.png" width="50" alt="Inicio"></i>
                        <span class="disappear">Inicio</span>
                    </a>
                </li>

                <li> <!--====== Icon Create schedules  ======-->
                    <a href="#schudeleSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home">
                            <img src="<?= BASE_URL ?>app\assets\img\icons\calendar.png" width="50" alt="Horario">
                        </i>
                        <span class="disappear">Horarios</span>
                    </a>

                    <!--====== subclass schedules  ======-->
                    <ul class="collapse list-unstyled" id="schudeleSubmenu">
                        <li>
                            <a href="<?= BASE_URL ?>c_Schedule/schedule">
                                <i class="fas fa-home">
                                    <img src="<?= BASE_URL ?>app\assets\img\icons\calendar_watch.png" width="30" alt="Horario Personal">
                                </i>
                                <span class="disappear">Horario personal</span></a>
                        </li>

                        <li>
                            <a href="<?= BASE_URL ?>c_Schedule/createSchedule">
                                <i class="fas fa-home">
                                    <img src="<?= BASE_URL ?>app\assets\img\icons\calendar_plus.png" width="30" alt="Crear Horario">
                                </i>
                                <span class="disappear">Crear Horarios</span></a>
                        </li>

                        <li>
                            <a href="<?= BASE_URL ?>c_Schedule/managePersonal">
                                <i class="fas fa-home">
                                    <img src="<?= BASE_URL ?>app\assets\img\icons\tasks.png" width="35" alt="Administrar Personal">
                                </i>
                                <span class="disappear">Administrar Personal</span></a>
                        </li>
                    </ul>
                </li>


                <li> <!-- Icon Personal Training  -->
                    <a href="<?= BASE_URL ?>c_PersonalTraining/personalTraining">
                        <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\personal_training.png" width="50" alt="Entrenamientos Personales"></i>
                        <span class="disappear">Entrenamientos</span></a>
                </li>

                <li> <!-- Icon Vacations / Rotations -->
                    <a href="#holidaysSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home"><img src="<?= BASE_URL ?>app\assets\img\icons\time_out.png" width="50" alt="Horario"></i>
                        <span class="disappear">Vacaciones</span>
                    </a>

                    <!-- subclass schedules -->
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
                </li>
            </ul>
        </nav> <!--====== END SIDEBAR======-->

        <!--====== PAGE CONTENT HEADER ======-->
        <div id="content">
            <nav class="fondo-2 shadow p-3 mb-5 rounded navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <!--====== COLLAPSE BUTTON ======-->
                    <button type="button" id="sidebarCollapse" class="btn">
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
                                <a class="text-light nav-link  rounded" href="<?= BASE_URL ?>c_Dashboard/">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a class="text-light nav-link rounded" href="<?= BASE_URL ?>c_Dashboard/settings">Ajustes</a>
                            </li>

                            <li class="nav-item">
                                <a class="text-light nav-link rounded" href="<?= BASE_URL ?>c_Dashboard/logOut">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!--====== END PAGE CONTENT HEADER ======-->