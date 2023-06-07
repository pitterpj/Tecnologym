<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <form action="<?= BASE_URL . "c_Users/updateClient/" . $client[0]['id_person'] ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="addImg" class="form-label">Foto de Perfil:</label>
            <input type="file" class="form-control" name="addImg" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="updateName" class="form-label">Nombre:*</label>
            <input type="text" class="form-control" name="updateName" aria-describedby="helpId" value="<?= $client[0]['name'] ?>" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="updateLastName" class="form-label">Apellidos:*</label>
            <input type="text" class="form-control" name="updateLastName" aria-describedby="helpId" value="<?= $client[0]['lastname'] ?>" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="updateBMI" class="form-label">BMI:</label>
            <input type="text" class="form-control" name="updateBMI" aria-describedby="helpId" value="<?= $client[0]['BMI'] ?>" >
        </div>
        <div class="mb-3">
            <label for="updateWeight" class="form-label">Peso:</label>
            <input type="number" class="form-control" name="updateWeight" aria-describedby="helpId" value="<?= $client[0]['weight'] ?>">
        </div>
        <div class="mb-3">
            <label for="updateDate" class="form-label">Fecha de Nacimiento:*</label>
            <input type="date" class="form-control" name="updateDate" aria-describedby="helpId" max="<?php echo date('2005-m-d'); ?>" value="<?= $client[0]['birth_date'] ?>" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="updateComments" class="form-label">Notas:</label>
            <textarea class="form-control" name="updateComments" aria-describedby="helpId"> <?= $client[0]['comments'] ?></textarea>
            <!-- <input type="date" class="form-control" name="updateComments" aria-describedby="helpId" value=""> -->
        </div>
        <div class="d-flex justify-content-around ">
            <button type="submit" class="btn btn-primary">Actualizar CLiente</button>
        </div>
    </form>
</div><!--==== END CONTENT PAGE WITH SHADOWS ====-->