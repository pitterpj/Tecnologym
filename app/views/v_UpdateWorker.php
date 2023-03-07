<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <form action="<?= BASE_URL . 'c_Users/updateWorker/' . $worker['id_worker'] ?>" method="post">
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
        <div class="mb-3">
            <label for="updateHours" class="form-label">Horas de Contrato</label>
            <input type="text" class="form-control" name="updateHours" aria-describedby="helpId" value="<?= $worker['hours'] ?>">
        </div>
        <div class="mb-3">
            <label for="addWorkerSkill" class="form-label">Selecciona Actividad:</label>
            <select id="addWorkerSkill" class="form-select form-select-lg" name="addWorkerSkill">
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