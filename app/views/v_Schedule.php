<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <h2 class="text-center">Horario Completo del Centro</h2>
    <div class="card">
        <div class="table-responsive-sm m-2">
            <div class="card-body text-center">
                <div class="d-flex justify-content-around ">
                    <a class="btn btn-primary" href="<?= BASE_URL ?>c_Schedule/showPersonalSchedule//today" role="button">Hoy</a>
                    <a class="btn btn-primary" href="<?= BASE_URL ?>c_Schedule/showPersonalSchedule//week" role="button">Semanal</a>
                    <a class="btn btn-primary" href="<?= BASE_URL . "c_Schedule/completeSchedule" ?>" role="button">Ver horario completo</a>
                </div>
            </div>
        </div>
        <div class="table-responsive-sm m-2">
            <table class="table table-primary table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre Clase</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Día</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($classes as $class) : ?>
                        <tr class="text-center">
                            <td scope="row"><img width="100" src="<?= BASE_URL . "app/assets/img/uploaded_images/" . $class['img'] ?>"></td>
                            <td><?= $class['name_skill'] ?></td>
                            <td><?= $class['name'] ?></td>
                            <td><?= $class['capacity'] ?></td>
                            <td><?= $class['day'] ?></td>
                            <td><?= $class['hour'] ?></td>
                            <td>
                                <a name="updateClass" class="btn btn-info" href="<?= BASE_URL . 'c_Schedule/updateClasses/' . $class['id_class'] ?>" type="button">Editar</a>
                                <a name="deleteClass" data-id="<?= $class['id_class'] ?>" class="delClas btn btn-warning" role="button">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--==== END CONTENT PAGE WITH SHADOWS ====-->