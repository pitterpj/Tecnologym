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
                <strong>BS</strong>
            </div>

            <!-- AVATAR ROLE PERSON -->
            <!-- Depending on the person, this avatar is one or the other -->
            <div class="sidebar-header text-center">
                <h3><img src="app/assets/imgs/logos/avatar-prueba.webp" width="200" alt="Brand-Tecnologym"></h3>
                <h4>Worker Name</h4>
                <h5>Role Worker</h5>
            </div>

            <!-- OPTIONS LIST -->
            <!-- PONER ICONOS -->
            <ul class="list-unstyled">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        Crear Horarios
                    </a>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Horario Personal
                    </a>

                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Administrar Personal
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        Entrenamientos Personales
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Vacaciones / Rotaciones
                    </a>
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
                        <span><-</span>
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