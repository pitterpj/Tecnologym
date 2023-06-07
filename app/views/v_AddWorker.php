<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!--==== CONTENT PAGE ====-->
<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <form action="<?= BASE_URL ?>c_Users/addWorker" method="post" enctype="multipart/form-data">
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
            <label for="addUser" class="form-label">Usuario:*</label>
            <input type="text" class="form-control" name="addUser" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addPass" class="form-label">Contraseña:*</label>
            <input type="password" class="form-control" name="addPass" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addRole" class="form-label">Puesto:*</label>
            <select class="form-select" name="addRole" onblur="validarCampo(this)" required>
                <option selected value="3">Monitor</option>
                <option value="2">Coordinador</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="addEmail" class="form-label">Email:*</label>
            <input type="text" class="form-control" minlength="3" maxlength="25" pattern="[A-Za-z0-9@.]+" name="addEmail" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addPhone" class="form-label">Teléfono:*</label>
            <input type="number" class="form-control" name="addPhone" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="mb-3">
            <label for="addHours" class="form-label">Horas de Contrato:*</label>
            <input type="number" class="form-control" name="addHours" aria-describedby="helpId" onblur="validarCampo(this)" required>
        </div>
        <div class="d-flex justify-content-around ">
            <button type="submit" class="btn btn-primary">Agregar Trabajador</button>
        </div>
    </form>
</div><!--==== END CONTENT PAGE WITH SHADOWS ====-->