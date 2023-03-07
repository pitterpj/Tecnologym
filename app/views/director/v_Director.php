<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row container-fluid justify-content-around">
    <div class="container col-lg-5 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
        <div class="card h-100">
            <div class="card-header text-center">Horario personal (D)</div>
            <div class="card-body">
                <h4 class="card-title text-center">Hoy</h4>
                <table class="table table-primary table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Imagen</th>
                            <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($personalScheduleToday as $class) : ?>
                            <tr class="text-center">
                                <td scope="row"><img width="100" src="<?= BASE_URL . IMG_URL . $class['img'] ?>"></td>
                                <td scope="row"><?= $class['hour'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--==== col 2 ====-->
    <div class="container col-lg-5 col-md-9 col-sm-8 ">
        <!--==== row 2 ====-->
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <!--==== col2.1 ====-->
            <div class="col-12 card">
                <div class="card-header text-center">Entrenamientos personales esta semana</div>
                <div class="card-body text-center">
                    <h4 class="card-title text-center">Entrenos</h4>
                    <p class="card-text">
                    <h3> <?= $logTraining['log'] ?> </h3>
                    </p>
                </div>
            </div>
        </div> <!--==== end row2 ====-->
        <!--==== col 2 - row 2 ====-->
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <!--==== col 2.2 ====-->
            <div class="col-12 card ">
                <div class="card-header text-center">Notificaciones</div>
                <div class="card-body text-center">
                    <h4 class="card-title text-center">Notificaciones</h4>
                    <p class="card-text">No tiene notificaciones actualmente</p>
                </div>
            </div>
        </div>
    </div>
</div><!--==== row1 - END CONTENT PAGE WITH SHADOWS ====-->