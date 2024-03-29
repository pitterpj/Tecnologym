<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <form id="formAdd" action="<?= BASE_URL ?>c_PersonalTraining/addClient" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="addImg" class="form-label">Foto de Perfil:</label>
            <input type="file" class="form-control" name="addImg" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="addName" class="form-label">Nombre:*</label>
            <input type="text" class="form-control" name="addName" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addLastName" class="form-label">Apellidos:*</label>
            <input type="text" class="form-control" name="addLastName" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addBMI" class="form-label">BMI:</label>
            <input type="text" class="form-control" name="addBMI" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="addWeight" class="form-label">Peso:</label>
            <input type="number" class="form-control" name="addWeight" aria-describedby="helpId" required>
        </div>
        <div class="mb-3">
            <label for="addDate" class="form-label">Fecha de Nacimiento:*</label>
            <input type="date" class="form-control" max="<?php echo date('2005-m-d'); ?>" name="addDate" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addComments" class="form-label">Notas:</label>
            <textarea class="form-control" name="addComments" aria-describedby="helpId"></textarea>
        </div>
        <div class="d-flex justify-content-around ">
            <button id="addWorker" type="submit" class="btn btn-primary">Agregar CLiente</button>
        </div>
    </form>
</div><!--==== END CONTENT PAGE WITH SHADOWS ====-->