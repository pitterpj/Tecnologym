<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!-- Left Menu that contracts  and header with collapsing buttons -->

<body>
    <div class="wrapper">

        <!-- SIDEBAR  -->

        <nav id="sidebar">
            <!-- BRAND -->
            <div class="sidebar-header">
                <h3><img class="img-fluid" src="app/assets/imgs/Brand_Tecnologym.png" width="200" alt="Brand-Tecnologym"></h3>

                <!-- Miniature Brand -->
                <strong><img src="app/assets/imgs/Brand_Tecnologym.png" width="50" alt="Brand-Tecnologym"></strong>
            </div>

            <!-- AVATAR ROLE PERSON -->
            <!-- Depending on the person, this avatar is one or the other -->
            <div class="sidebar-header text-center push ">
                <h3><img class="img-fluid rounded-circle" src="app\assets\imgs\icons\avatar_person.jpg" width="200" alt="Brand-Tecnologym"></h3>
                <span class="disappear fs-3">Worker Name</span>
                <span class="disappear fs-4">Role</span>

            </div>

            <!-- OPTIONS LIST -->
            <ul class="list-unstyled">
                <li class="active">

                    <!-- Icon Home -->
                    <a href="#">
                        <i class="fas fa-home"> <img src="app\assets\imgs\icons\home_gym.png" width="50" alt="Inicio"></i>
                        <span class="disappear">Inicio</span>
                    </a>
                </li>

                <li>
                    <!-- Icon Create schedules  -->
                    <a href="#schudeleSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home">
                            <img src="app\assets\imgs\icons\calendar.png" width="50" alt="Horario">
                        </i>
                        <span class="disappear">Horarios</span>
                    </a>
                    <!-- subclass schedules -->
                    <ul class="collapse list-unstyled" id="schudeleSubmenu">
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\calendar_watch.png" width="30" alt="Horario Personal">
                                </i>
                                <span class="disappear">Horario personal</span></a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\calendar_plus.png" width="30" alt="Crear Horario">
                                </i>
                                <span class="disappear">Crear Horarios</span></a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\tasks.png" width="35" alt="Administrar Personal">
                                </i>
                                <span class="disappear">Administrar Personal</span></a>
                        </li>
                    </ul>
                </li>

                <!-- Icon Personal Training  -->
                <li>
                    <a href="#">
                        <i class="fas fa-home">
                            <img src="app\assets\imgs\icons\personal_training.png" width="50" alt="Entrenamientos Personales">
                        </i>
                        <span class="disappear">Entrenamientos</span></a>
                </li>

                <!-- Icon Vacations / Rotations -->
                <li>
                    <!-- Icon Create schedules  -->
                    <a href="#holidaysSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home">
                            <img src="app\assets\imgs\icons\time_out.png" width="50" alt="Horario">
                        </i>
                        <span class="disappear">Vacaciones</span>
                    </a>
                    <!-- subclass schedules -->
                    <ul class="collapse list-unstyled" id="holidaysSubmenu">
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\overtime.png" width="30" alt="Horario Personal">
                                </i>
                                <span class="disappear">Solicitar Vacaciones</span></a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\calendar_time.png" width="30" alt="Crear Horario">
                                </i>
                                <span class="disappear">Pedir Rotacion</span></a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\grinch.png" width="35" alt="Administrar Personal">
                                </i>
                                <span class="disappear">Días disponibles</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- PAGE CONTENT HEADER -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <!-- COLLAPSE BUTTON -->
                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-home">
                            <img src="app\assets\imgs\icons\return.png" width="35" alt="Cerrar Menu">
                        </i>
                    </button>

                    <!-- RIGHT BUTTON COLLAPSE -->
                    <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                        <img src="app\assets\imgs\icons\avatar.png" width="35" alt="X">
                    </button>

                    <!-- OPTIONS RIGHT BUTTON COLLAPSE -->
                    <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto text-end">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Settings

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Log Out

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>