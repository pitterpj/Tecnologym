<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- CONTENT PAGE -->


<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <div class="">
        <h2 class="text-center">Entrenamientos Personales</h2>

        <div class="card">
            <div class="card-header">
                <a name="addClient" class="btn btn-info" href="<?=BASE_URL."c_PersonalTraining/addPersonalTraining"?>" role="button">Agregar Entreno Personal </a>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">BMI</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($clients as $client) : ?>
                            <tr class="">
                                <td scope="row">Avatar</td>
                                <td><?= $client['name'] ?></td>
                                <td><?= $client['lastname'] ?></td>
                                <td><?= $client['BMI'] ?></td>
                                <td><?= $client['weight'] ?></td>
                                <td><?= $client['birth_date'] ?></td>
                                <td>
                                    <a name="updatePersonalTraining" class="btn btn-info" href="" type="button">Editar</a>

                                    <a name="" class="btn btn-warning" href="#" role="button">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> <!-- END CONTENT PAGE WITH SHADOWS -->