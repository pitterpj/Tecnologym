<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!-- Left Menu that contracts  and header with collapsing buttons -->

<body>
    <div class="wrapper">

        <!-- SIDEBAR  -->

        <nav id="sidebar">
            <!-- BRAND -->
            <div class="sidebar-header">
                <h3><img src="app/assets/imgs/Brand_Tecnologym.png" width="200" alt="Brand-Tecnologym"></h3>

                <!-- Miniature Brand -->
                <strong><img src="app/assets/imgs/Brand_Tecnologym.png" width="50" alt="Brand-Tecnologym"></strong>
            </div>

            <!-- AVATAR ROLE PERSON -->
            <!-- Depending on the person, this avatar is one or the other -->
            <div class="sidebar-header text-center">
                <h3><img src="app/assets/imgs/logos/avatar-prueba.webp" width="200" alt="Brand-Tecnologym"></h3>
                <h3>Worker Name</h3>
                <h3>Role Worker</h3>
            </div>

            <!-- OPTIONS LIST -->
            <!--TODO ----------------- PONER ICONOS -->
            <ul class="list-unstyled">
                <li class="active">

                    <!-- Icon Home -->
                    <a href="#">
                        <i class="fas fa-home"> <img src="app\assets\imgs\icons\home_gym.png" width="50" alt="Inicio"></i>
                        Inicio
                    </a>
                </li>
                <li class="active">

                    <!-- Icon Create schedules  -->
                    <a href="#homeSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home">
                            <img src="app\assets\imgs\icons\calendar.png" width="50" alt="Horario">
                        </i>
                        Horarios
                    </a>
                    <!-- subclass schedules -->
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\calendar_watch.png" width="30" alt="Horario Personal">
                                </i>
                                Horario Personal</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\calendar_plus.png" width="30" alt="Crear Horario">
                                </i>
                                Crear Horario</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\tasks.png" width="35" alt="Administrar Personal">
                                </i>
                                Administrar Personal</a>
                        </li>
                    </ul>
                </li>

                <!-- Icon Personal Training  -->
                <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\personal_training.png" width="50" alt="Entrenamientos Personales">
                                </i>
                                Entrenamientos</a>
                        </li>

                <!-- Icon Vacations / Rotations -->
                <li>
                            <a href="#">
                                <i class="fas fa-home">
                                    <img src="app\assets\imgs\icons\time_out.png" width="50" alt="Vacaciones Rotaciones">
                                </i>
                                Vacaciones</a>
                        </li>
            </ul>
        </nav>

        <!-- PAGE CONTENT  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <!-- COLLAPSE BUTTON -->
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span><-< /span>
                    </button>

                    <!-- RIGHT BUTTON COLLAPSE -->
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <!-- OPTIONS RIGHT BUTTON COLLAPSE -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>