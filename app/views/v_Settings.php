<form action="<?= BASE_URL . 'c_Users/updateWorker/' . $worker['id_worker'] ?>" method="post" enctype="multipart/form-data">

    <div class="row container-fluid justify-content-around">
        <div class="container col-lg-5 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
            <div class="card h-100">
                <!-- <div class="card-header text-center mr-5">CLASES DIRIGIDAS:</div> -->
                <div class="card-body">
                    <h4 class="card-title text-center ">AVATAR</h4>
                    <div class="mb-3">
                        <img src="<?= BASE_URL . IMG_URL . $worker['avatar'] ?>" width="300" class=" mx-auto d-block img-fluid rounded-top mb-3">
                        <label for="addImg" class="form-label"></label>
                        <input type="file" class="form-control" name="addImg" aria-describedby="helpId">
                    </div>
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
                        <h4 class="card-title text-center">ENTRENOS PARA HOY</h4>
                        <div class="mb-3">
                            <label for="updateName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="updateName" aria-describedby="helpId" value="<?= $worker['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="updateLastname" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="updateLastname" aria-describedby="helpId" value="<?= $worker['lastname'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="updateRole" class="form-label">Puesto:</label>
                            <select class="form-select" name="updateRole">
                                <option selected value="3">Monitor</option>
                                <option value="2">Coordinador</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="updateEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" name="updateEmail" aria-describedby="helpId" value="<?= $worker['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="updatePhone" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="updatePhone" aria-describedby="helpId" value="<?= $worker['phone'] ?>">
                        </div>
                        <div class="d-flex justify-content-around ">
                            <button type="submit" class="btn btn-primary">Actualizar Trabajador</button>
                        </div>

                    </div>
                </div>
            </div> <!--==== end row2 ====-->
        </div>
    </div>
    <div class="row container-fluid justify-content-around">
        <div class="container col-lg-11 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
            <div class="card h-100">
            <h4 class="card-title text-center mt-2">AÑADIR HABILIDAD</h4>
                <div class="row">
                    <div class="mb-3 col-5 m-4">
                        <label for="addWorkerSkill" class="form-label">Selecciona Actividad:</label>
                        <select id="addWorkerSkill" class="form-select form-select-lg" name="addWorkerSkill">
                            <?php foreach ($skills as $skill => $value) {
                                var_dump($skills);
                                echo "<option value='" . $value['id_skill'] . "'>" . $value['name_skill'] . "</option>";
                            }; ?>
                        </select>
                    </div>
                    <div class="mb-3 col-6 text-center mt-5">
                        <button type="submit" class="btn btn-primary">Aprender habilidad</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>