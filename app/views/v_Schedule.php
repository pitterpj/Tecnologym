<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- CONTENT PAGE -->


<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <div class="">
        <h2 class="text-center">Horario Personal</h2>

        <div class="card">
            <div class="table-responsive-sm m-2">
                <table class="table table-primary table-striped table-hover ">
                    <thead>
                        <tr>
                            <th class="d-none d-lg-block" scope="col">Imagen</th>
                            <th scope="col">Nombre Clase</th>
                            <th scope="col">Instructor</th>
                            <th class="d-none d-lg-block" scope="col">Capacidad</th>
                            <th scope="col">Día</th>
                            <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($classes as $class) : ?>
                            <tr class="">
                                <td class="d-none d-lg-block" scope="row">Avatar</td>
                                <td><?= $class['name_skill'] ?></td>
                                <td><?= $class['name'] ?></td>
                                <td class="d-none d-lg-block"><?= $class['capacity'] ?></td>
                                <td><?= $class['day'] ?></td>
                                <td><?= $class['hour'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>





</div> <!-- END CONTENT PAGE WITH SHADOWS -->