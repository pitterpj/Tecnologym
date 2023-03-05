<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- TO DO tiene que seleccionar solo las clases que pueda dar el trabajador seleccionado arriba  -->


<!--====  CREATE CLASS====-->
<div class="row container-fluid justify-content-around ">
    <div class="container card col-lg-6 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
        <div class="card-header text-center">
            <h3>Crear Clase</h3>
        </div>
        <form action="<?= BASE_URL . 'c_Schedule/addClass' ?>" method="post">
            <div class="mb-3">
                <label for="addWorker" class="form-label">Selecciona Trabajador:</label>
                <select class="form-select form-select-lg" name="addWorker">
                    <?php foreach ($workers as $worker => $value) {
                        echo "<option value='" . $value['id_worker'] . "'>" . $value['name'] . "</option>";
                    }; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="addSkill" class="form-label">Selecciona Actividad:</label>
                <select class="form-select form-select-lg" name="addSkill">
                    <?php foreach ($datas as $dat => $value) {
                        echo "<option value='" . $value['id_skill'] . "'>" . $value['name_skill'] . "</option>";
                    }; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="addCapacity" class="form-label">Capacidad de la clase:</label>
                <input type="number" class="form-control" name="addCapacity" aria-describedby="helpId" placeholder="Introduce un número">
            </div>
            <div class="mb-3">
                <label for="addDay" class="form-label">Día:</label>
                <input type="date" class="form-control" name="addDay" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="addHour" class="form-label">Hora:</label>
                <input type="time" class="form-control" name="addHour" aria-describedby="helpId">
            </div>
            <div class="d-flex justify-content-around ">
                <button type="submit" class="btn btn-primary">Crear</button>
                <a name="btnCancel" class="btn btn-danger" href="<?= BASE_URL ?>c_Users/managePersonal" role="button">Cancelar</a>
            </div>
        </form>
    </div>

    <!--==== CREATE SKILL ====-->

    <div class="container col-lg-5 col-md-9 col-sm-8  ">
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <div class="col-12">
                <div class="card-header text-center">
                    <h3>Crear Actividad</h3>
                </div>
                <form action="<?= BASE_URL . 'c_Schedule/addSkill' ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="addImg" class="form-label"></label>
                        <input type="file" class="form-control" name="addImg" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="addNameSkill" class="form-label">Nombre de la habilidad:</label>
                        <input type="text" class="form-control" name="addNameSkill" aria-describedby="helpId" placeholder="Nombre de la Actividad">
                    </div>
                    <div class="mb-3">
                        <label for="addLevel" class="form-label">Nivel de la Actividad:</label>
                        <input type="text" class="form-control" name="addLevel" aria-describedby="helpId" placeholder="Nivel de la actividad">
                    </div>
                    <div class="d-flex justify-content-around ">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a name="btnCancel" class="btn btn-danger" href="<?= BASE_URL ?>c_Users/managePersonal" role="button">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>



        <div class="row fondo-2 shadow p-3 mb-5 rounded">

            <div class=" col-lg-12 col-md-9 col-sm-8 text-center ">

                <div class="card-header ">
                    <h3>Horario completo del centro</h3>

                </div>
                <div class="card-body"> 
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Ver horario completo</a>
            </div>


            </div>
        </div>
    </div>
</div>

<script>
    swal("Hello world!");
</script>