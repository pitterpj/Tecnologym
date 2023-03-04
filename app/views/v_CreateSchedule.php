<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- CONTENT PAGE -->

<div class="row container-fluid justify-content-around">
    <div class="col-6 fondo-2 shadow p-3 mb-5 rounded">
    <div class="card-header">
                <h3>Crear Clase</h3>
            </div>
        <form action="<?= BASE_URL . 'c_Schedule/addClass' ?>" method="post">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="addWorker" class="form-label">Trabajador</label>
                    <select class="form-select form-select-lg" name="addWorker">
                        <?php foreach ($workers as $worker => $value) {
                            echo "<option value='{$value['id_worker']}'>" . $value['name'] . "</option>";
                        } ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="addSkill" class="form-label">Tipo de clase</label>
                    <select class="form-select form-select-lg" name="addSkill">
                        <?php foreach ($datas as $dat => $value) {
                            echo "<option value='{$value['id_skill']}'>" . $value['name_skill'] . "</option>";
                        } ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="addCapacity" class="form-label">Capacidad</label>
                <input type="number" class="form-control" name="addCapacity" aria-describedby="helpId" value="12">
            </div>
            <div class="mb-3">
                <label for="addDay" class="form-label">Día de la clase</label>
                <input type="date" class="form-control" name="addDay" aria-describedby="helpId" value="">
            </div>
            <div class="mb-3">
                <label for="addHour" class="form-label">Día de la clase</label>
                <input type="time" class="form-control" name="addHour" aria-describedby="helpId" value="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>



            <a name="btnCancel" class="btn btn-danger" href="<?= BASE_URL ?>c_Users/managePersonal" role="button">Cancelar</a>

        </form>

    </div>


    <div class="col-5 fondo-2 shadow p-3 mb-5 rounded">
    <div class="card-header">
                <h3>Crear Skill</h3>
            </div>
        <form action="<?= BASE_URL . 'c_Schedule/addSkill' ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="addImg" class="form-label">Imagen Clase: </label>
                <input type="file" class="form-control" name="addImg" aria-describedby="helpId">
            </div>
            
            <div class="mb-3">
                <label for="addNameSkill" class="form-label">Skill</label>
                <input type="text" class="form-control" name="addNameSkill" aria-describedby="helpId" placeholder="nameSkill">
            </div>

            <div class="mb-3">
                <label for="addLevel" class="form-label">Skill</label>
                <input type="text" class="form-control" name="addLevel" aria-describedby="helpId" placeholder="12222">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <a name="btnCancel" class="btn btn-danger" href="<?= BASE_URL ?>c_Users/managePersonal" role="button">Cancelar</a>

        </form>

    </div>
</div>