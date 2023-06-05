<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row container-fluid justify-content-around">
    <div class="container col-lg-5 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
        <div class="card h-100">
            <!-- <div class="card-header text-center mr-5">CLASES DIRIGIDAS:</div> -->
            <div class="card-body">
                <h4 class="card-title text-center ">HOY</h4>
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">CLASE</th>
                            <th scope="col">HORA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($personalScheduleToday as $class) : ?>
                            <tr class="text-center">
                                <td scope="row"><img width="100" src="<?= BASE_URL . IMG_URL . $class['img'] ?>"></td>
                                <!-- <td scope="row"><?= strtoupper($class['name_skill']);  ?></td> -->
                                <td scope="row"><?= substr($class['hour'], 0, 5); ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--==== col 2 ====-->
    <div class="container col-lg-5 col-md-9 col-sm-8">
        <!--==== row 2 ====-->
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <!--==== col2.1 ====-->
            <div class="col-12 card">
                <!-- <div class="card-header text-center">ENTRENOS PERSONALES:</div> -->
                <div class="card-body text-center">
                    <h4 class="card-title text-center">ENTRENOS PERSONALES</h4>
                    <p class="card-text">
                    <!-- <h3> <?= $logTraining['log'] ?> </h3> -->
                    </p>
                    <div class="d-flex justify-content-around ">
                        <a name="addClient" class="btn btn-color shadow" href="<?= BASE_URL . "c_PersonalTraining/addPersonalTraining" ?>" role="button">AÑADIR</a>
                        <a name="addClient" class="btn btn-color shadow" href="<?= BASE_URL . "c_PersonalTraining/showPersonalTraining" ?>" role="button">VER TODOS</a>
                    </div>
                </div>
            </div>
        </div> <!--==== end row2 ====-->
        <!--==== col 2 - row 2 ====-->
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <!--==== col 2.2 ====-->
            <div class="col-12 card ">
                <!-- <div class="card-header text-center">Notificaciones</div> -->
                <div class="card-body text-center">
                    <h4 class="card-title text-center">Notificaciones</h4>
                    <?php foreach ($notifications as $notification => $not) : ?>
                        <div class="d-flex justify-content-between">
                            <p class=""><?= $not['notification']; ?> </p>
                            <a name="deleteNot" class="btn btn-warning m-2" href="<?= BASE_URL . 'c_Users/deleteNotification/' . $not['id'] ?> " role="button">Eliminar</a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div><!--==== row1 - END CONTENT PAGE WITH SHADOWS ====-->