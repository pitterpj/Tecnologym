<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded ">
    <h2 class="text-center">Horario Personal</h2>
    <div class="card">
        <div class="table-responsive-sm m-2">
            <div class="card-body text-center">
                <a class="btn btn-primary" href="<?= BASE_URL ?>c_Schedule/showPersonalSchedule//today" role="button">Diario</a>
                <a class="btn btn-primary" href="<?= BASE_URL ?>c_Schedule/showPersonalSchedule//week" role="button">Semanal</a>
                <a class="btn btn-primary" href="<?= BASE_URL ?>c_Schedule/showPersonalSchedule//month" role="button">Mensual</a>
                <a class="btn btn-primary" href="<?= BASE_URL ?>c_Schedule/showPersonalSchedule//year" role="button">Anual</a>
            </div>
            <table class="table table-primary table-striped table-hover ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre Clase</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Día</th>
                        <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personalSchedule as $class) : ?>
                        <tr class="text-center">
                            <td scope="row"><img width="100" src="<?= BASE_URL . IMG_URL . $class['img'] ?>"></td>
                            <td scope="row"><?= $class['name_skill'] ?></td>
                            <td scope="row"><?= $class['name'] ?></td>
                            <td scope="row"><?= $class['capacity'] ?></td>
                            <td scope="row"><?= $class['day'] ?></td>
                            <td scope="row"><?= $class['hour'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--==== END CONTENT PAGE WITH SHADOWS ====-->