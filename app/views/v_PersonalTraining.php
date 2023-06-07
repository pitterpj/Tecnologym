<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <h2 class="text-center">Entrenamientos Personales</h2>
    <div class="card">
        <div class="card-header">
            <a name="addClient" class="btn btn-info" href="<?= BASE_URL . "c_PersonalTraining/addPersonalTraining" ?>" role="button">Agregar Entreno Personal </a>
        </div>
        <div class="table-responsive-sm m-2">
            <table class="table table-primary table-striped table-hover align-baseline">
                <thead>
                    <tr class="text-center">
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
                        <tr class="text-center  ">
                            <td scope="row">
                                <?php if (isset($client['avatar']) or $client['avatar'] != NULL) {
                                    echo '<img class="img-fluid rounded-circle" src="' . BASE_URL . IMG_URL . $client['avatar'] . '" width="100" alt="Brand-Tecnologym">';
                                } else {
                                    echo '<img class="img-fluid rounded-circle" src="' . BASE_URL . 'app\assets\img\icons\avatar_person.jpg" width="100" alt="Brand-Tecnologym">';
                                }  ?>
                            </td>
                            <td><?= $client['name'] ?></td>
                            <td><?= $client['lastname'] ?></td>
                            <td><?= $client['BMI'] ?></td>
                            <td><?= $client['weight'] ?></td>
                            <td><?= $client['birth_date'] ?></td>
                            <td>
                                <a name="updatePersonalTraining" class="btn btn-info" href="<?= BASE_URL . "c_PersonalTraining/updateClients/" . $client['id_person'] ?>" type="button">Editar</a>
                                <a id="" class="btn_delete_PT btn btn-warning" role="button">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--==== END CONTENT PAGE WITH SHADOWS ====-->
<script>
    id = "<?= $client['id_person'] ?>";
</script>