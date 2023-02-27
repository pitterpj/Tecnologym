<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- CONTENT PAGE -->


<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <div class="">
        <h2 class="text-center">Administrar Personal</h2>
        <?php var_dump($workers) ?>

        <div class="card">
            <div class="card-header">
                <a name="addWorker" class="btn btn-info" href="#" role="button">Agregar Trabajador</a>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Email</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Horas en Contrato</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($workers as $worker) : ?>
                            <tr class="">
                                <td scope="row">Avatar</td>
                                <td><?= $worker['name'] ?></td>
                                <td>Pan Pum</td>
                                <td>Director</td>
                                <td>pitter@correo.es</td>
                                <td>123456789</td>
                                <td>40</td>
                                <td>
                                    <a name="updateWorker" class="btn btn-info" href="#" role="button">Editar</a>
                                    <a name="deleteWorker" class="btn btn-warning" href="#" role="button">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>





</div> <!-- END CONTENT PAGE WITH SHADOWS -->