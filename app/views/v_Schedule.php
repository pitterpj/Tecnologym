<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <h2 class="text-center">Horario</h2>
    <div class="card">
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
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--==== END CONTENT PAGE WITH SHADOWS ====-->