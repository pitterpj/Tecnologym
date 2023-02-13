<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- CSSSSSS -->
    <!-- iconos booostrat -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="app\assets\libs\v_index.css">

</head>

<body>



    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-info navbar-dark py-3 fixed-top">

            <!-- img brand -->
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="app\assets\imgs\Brand_Tecnologym.png" height="75" alt="Tecnologym">
                </a>

                <!-- button collapse -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <!-- icono hamburguesa -->
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- menu collapse -->
                <!-- le metemos id navbar para que el boton collapse haga referncia aqui -->
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#questions" class="nav-link">Avatar</a>
                        </li>
                        <li class="nav-item">
                            <a href="#b" class="nav-link">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="#c" class="nav-link">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>


        </nav>


    </header>




    <main>
        <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 pb-lg-1 text-center text-sm-start mt-5">

            <div class="container">

                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>

                        <h1>Become a <span class="text-warning">Web Developer</span> </h1>

                        <p class="lead my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae velit rerum a veniam cumque commodi, qui tenetur dolore animi magnam ratione odio necessitatibus laboriosam cupiditate nobis expedita. Delectus, similique odit.</p>

                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start the enrollment</button>

                    </div>

                    <img class="img-fluid w-30 d-none d-sm-block" src="app\assets\imgs\pruebas\beam-a-person-is-typing-on-a-laptop.png" alt="" srcset="">
                </div>



            </div>
        </section>


        <!-- newsletter -->
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

                    <!-- clase para css -->
                    <div class="input-group news-input">
                        <input type="text" class="form-control" placeholder="Enter Email">

                        <button class="btn btn-dark btn-lg" type="button">Button</button>
                    </div>


                </div>
            </div>
        </section>


        <!-- boxes
    
    -->

        <section class="p-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-laptop"></i>
                                </div>
                                <h3 class="card-title mb-3">Virtual</h3>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio amet, vel tenetur cum ipsam culpa.</p>
                                <a href="Read More" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-person-square"></i>
                                </div>
                                <h3 class="card-title mb-3">Hybrid</h3>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio amet, vel tenetur cum ipsam culpa.</p>
                                <a href="Read More" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h3 class="card-title mb-3">In Person</h3>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio amet, vel tenetur cum ipsam culpa.</p>
                                <a href="Read More" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- doble section info -->
        <section id="learn" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md"><img src="app\assets\imgs\pruebas\beam-analytics.png" alt="" class="img-fluid"></div>
                    <div class="col-md p-5">
                        <h2>Learn the Foundamentals</h2>
                        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum maxime possimus similique impedit voluptas accusamus.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam sunt, nobis optio, asperiores voluptatem distinctio quam reprehenderit assumenda esse laborum eaque ipsa? Ut cumque quo cum neque repellendus molestias quaerat!</p>
                        <a href="@" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section id="learn" class="p-5 bg-dark text-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col-md p-5">
                        <h2>Learn to React</h2>
                        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum maxime possimus similique impedit voluptas accusamus.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam sunt, nobis optio, asperiores voluptatem distinctio quam reprehenderit assumenda esse laborum eaque ipsa? Ut cumque quo cum neque repellendus molestias quaerat!</p>
                        <a href="@" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More
                        </a>
                    </div>

                    <div class="col-md"><img src="app\assets\imgs\pruebas\beam-analytics.png" alt="" class="img-fluid"></div>
                </div>
            </div>

        </section>


        <!-- QUESTION ACCORDION -->
        <section id="questions" class="p-5">
            <div class="container">
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                <div class="accordion accordion-flush" id="questions">
                    <!-- items 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                                Where exactly are you located
                            </button>
                        </h2>
                        <div id="question-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, excepturi deleniti. Quasi assumenda minima delectus possimus ipsa iure, distinctio fugit repudiandae. Laboriosam provident quidem consequatur quod distinctio quis. Alias quae, sint quod id modi praesentium porro eaque nulla harum ut et quas ducimus distinctio? Nobis molestias natus cupiditate praesentium eum.</div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                                How much does it cost to attend?
                            </button>
                        </h2>
                        <div id="question-two" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, excepturi deleniti. Quasi assumenda minima delectus possimus ipsa iure, distinctio fugit repudiandae. Laboriosam provident quidem consequatur quod distinctio quis. Alias quae, sint quod id modi praesentium porro eaque nulla harum ut et quas ducimus distinctio? Nobis molestias natus cupiditate praesentium eum.</div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                                What do I need to know?
                            </button>
                        </h2>
                        <div id="question-three" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, excepturi deleniti. Quasi assumenda minima delectus possimus ipsa iure, distinctio fugit repudiandae. Laboriosam provident quidem consequatur quod distinctio quis. Alias quae, sint quod id modi praesentium porro eaque nulla harum ut et quas ducimus distinctio? Nobis molestias natus cupiditate praesentium eum.</div>
                        </div>
                    </div>
                    <!-- item4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
                                How Do I sign up?
                            </button>
                        </h2>
                        <div id="question-four" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, excepturi deleniti. Quasi assumenda minima delectus possimus ipsa iure, distinctio fugit repudiandae. Laboriosam provident quidem consequatur quod distinctio quis. Alias quae, sint quod id modi praesentium porro eaque nulla harum ut et quas ducimus distinctio? Nobis molestias natus cupiditate praesentium eum.</div>
                        </div>
                    </div>
                    <!-- end items -->
                </div>
            </div>


        </section>


        <!-- section persons -->

        <section id="instructors" class="p-5 bg-primary">
            <div class="container">
                <h2 class="text-center text-white">Our Instructors</h2>
                <p class="lead text-center text-white mb-5">
                    Instructores con más de 5 años de experiencia en el sector
                </p>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center"><img class="rounded-circle mb-3" src="app\assets\imgs\pruebas\martina-womans-face-in-a-circle-1.png" alt="" srcset="">
                                <h3 class="card-title mb-3">jonh Doe</h3>
                                <p class="card text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, optio.</p>
                                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center"><img class="rounded-circle mb-3" src="app\assets\imgs\pruebas\martina-womans-face-in-a-circle-1.png" alt="" srcset="">
                                <h3 class="card-title mb-3">jonh Doe</h3>
                                <p class="card text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, optio.</p>
                                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center"><img class="rounded-circle mb-3" src="app\assets\imgs\pruebas\martina-womans-face-in-a-circle-1.png" alt="" srcset="">
                                <h3 class="card-title mb-3">jonh Doe</h3>
                                <p class="card text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, optio.</p>
                                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center"><img class="rounded-circle mb-3" src="app\assets\imgs\pruebas\martina-womans-face-in-a-circle-1.png" alt="" srcset="">
                                <h3 class="card-title mb-3">jonh Doe</h3>
                                <p class="card text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, optio.</p>
                                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!-- section contact & map  -->
        <section class="p-5">
            <div class="container">
                <div class="orw g-4">
                    <div class="col-md">
                        <h2 class="text-center mb-4">Contact info</h2>
                        <ul class="list-group list-group-flush lead">
                            <li class="list-group-item"><span class="fw-bold">Main Location:</span> 50 main st Boston MA</li>
                            <li class="list-group-item"><span class="fw-bold">Enrollment Phone:</span> 50 main st Boston MA</li>
                            <li class="list-group-item"><span class="fw-bold">Student Phone:</span> 50 main st Boston MA</li>
                            <li class="list-group-item"><span class="fw-bold">Main Location:</span> 50 main st Boston MA</li>
                        </ul>
                    </div>

                    <div class="col-md">
                        <div id="map"></div>
                    </div>

                </div>
            </div>
        </section>




        <footer class="p-5 bg-dark text-white text-center position-relative">
            <!-- place footer here -->

            <div class="container">
                <p class="lead">Copyright &copy; 2023 Pitter PJ</p>
                <a href="" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
            </div>

        </footer>

        <!-- Modal -->
        <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="enrollLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <p class="lead">Fill out this form and we will get back to you</p>
                        <form>
                            <div class="mb-3">
                                <label for="first-name" class="col-form-label">First Name:</label>
                                <input type="text" id="first-name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="first-name" class="col-form-label">Email:</label>
                                <input type="text" id="first-name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="first-name" class="col-form-label">Telefono:</label>
                                <input type="text" id="first-name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="first-name" class="col-form-label">Chanchito feliz:</label>
                                <input type="text" id="first-name" class="form-control">
                            </div>
                        </form>



                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>





        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicGl0dGVycGoiLCJhIjoiY2xlMzB4a25zMDBzcTN2bjIwaHZraGJhdiJ9.s_Q_tlX9fvUrXIIPI3yz9Q';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [-71.060982, 42.35725],
                zoom: 18,
            });
        </script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>