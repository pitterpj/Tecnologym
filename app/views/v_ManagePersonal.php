<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">

    <h2 class="text-center">Administrar Personal</h2>
    <div class="card">
        <div class="table-responsive-sm m-2">
            <a class="btn btn-info" href="<?= BASE_URL ?>c_PersonalTraining/addWorker" role="button">Agregar Trabajador</a>
        </div>
        <div class="table-responsive-sm m-2">
            <table class="table table-primary table-striped table-hover align-baseline">
                <thead>
                    <tr class="text-center ">
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
                        <tr class="text-center">
                            <td scope="row">
                                <?php if (isset($worker['avatar'])) {
                                    echo '<img class="img-fluid rounded-circle" src="' . BASE_URL . IMG_URL . $worker['avatar'] . '" width="200" alt="Brand-Tecnologym">';
                                } else {
                                    echo '<img class="img-fluid rounded-circle" src="' . BASE_URL . 'app\assets\img\icons\avatar_person.jpg" width="200" alt="Brand-Tecnologym">';
                                }                                ?>
                            </td>
                            <td><?= $worker['name'] ?></td>
                            <td><?= $worker['lastname'] ?></td>
                            <td><?= $worker['role'] ?></td>
                            <td><?= $worker['email'] ?></td>
                            <td><?= $worker['phone'] ?></td>
                            <td><?= $worker['hours'] ?></td>
                            <td>
                                <a name="updateWorker" class="btn btn-info" href="<?= BASE_URL . 'c_Users/updateWorkers/' . $worker['id_worker'] ?>" type="button">Editar</a>
                                <a name="deleteWorker" class="del btn btn-warning" role="button">Eliminar</a>
                                <!-- <a name="deleteWorker" class="del btn btn-warning" href="<?= BASE_URL . 'c_Users/deletePerson/' . $worker['id_person'] ?> " role="button">Eliminar</a> -->
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!--==== END CONTENT PAGE WITH SHADOWS ====-->
<script>
    $(".del").on("click", function(e) {
        e.preventDefault();

        Swal.fire({
            title: "¿Desea eliminar a este trabajador?",
            text: "Va dar de baja a este trabajador",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#1E7361",
            confirmButtonText: "Si, estoy seguro.",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= BASE_URL . 'c_Users/deletePerson/' . $worker['id_person'] ?>";
            }
        });
    });
</script>