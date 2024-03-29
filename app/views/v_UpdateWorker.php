<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <form action="<?= BASE_URL . 'c_Users/updateWorker/' . $worker['id_worker'] ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <img src="<?= BASE_URL . IMG_URL . $worker['avatar'] ?>"  width="100" class="img-fluid rounded-top mb-3">
            <label for="addImg" class="form-label"></label>
            <input type="file" class="form-control" name="addImg" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="updateName" class="form-label">Nombre:*</label>
            <input type="text" class="form-control" name="updateName" aria-describedby="helpId" value="<?= $worker['name'] ?>" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="updateLastname" class="form-label">Apellidos:*</label>
            <input type="text" class="form-control" name="updateLastname" aria-describedby="helpId" value="<?= $worker['lastname'] ?>"onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="updateRole" class="form-label">Puesto:</label>
            <select class="form-select" name="updateRole" onblur="validarCampo(this)" required>
                <option selected value="3">Monitor</option>
                <option value="2">Coordinador</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="updateEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="updateEmail" aria-describedby="helpId" value="<?= $worker['email'] ?>" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="updatePhone" class="form-label">Teléfono</label>
            <input type="number" class="form-control" name="updatePhone" aria-describedby="helpId" value="<?= $worker['phone'] ?>">
        </div>
        <div class="mb-3">
            <label for="updateHours" class="form-label">Horas de Contrato</label>
            <input type="number" class="form-control" name="updateHours" aria-describedby="helpId" value="<?= $worker['hours'] ?>" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addWorkerSkill" class="form-label">Selecciona Actividad:</label>
            <select id="addWorkerSkill" class="form-select form-select-lg" name="addWorkerSkill">
                <option value=""></option>
                <?php foreach ($skills as $skill => $value) {
                    var_dump($skills);
                    echo "<option value='" . $value['id_skill'] . "'>" . $value['name_skill'] . "</option>";
                }; ?>
            </select>
        </div>
        <div class="d-flex justify-content-around ">
            <button type="submit" class="btn btn-primary">Actualizar Trabajador</button>
        </div>
    </form>
</div><!--==== END CONTENT PAGE WITH SHADOWS ====-->