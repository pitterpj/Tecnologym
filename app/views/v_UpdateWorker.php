<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- CONTENT PAGE -->


<div class="row-6 fondo-2 shadow p-3 mb-5 rounded">
    <div class="">
        <form action="" method="post">
           

            <div class="mb-3">
              <label for="updateName" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" name="updateName" aria-describedby="helpId" value="<?= $worker['name'] ?>">
            </div>
            <div class="mb-3">
              <label for="updateLastname" class="form-label">Apellidos</label>
              <input type="text"
                class="form-control" name="updateLastname" aria-describedby="helpId" value="<?= $worker['lastname'] ?>">
            </div>
            <div class="mb-3">
              <label for="updateRole" class="form-label">Puesto</label>
              <input type="text"
                class="form-control" name="updateRole" aria-describedby="helpId" value="<?= $worker['role'] ?>">
            </div>
            <div class="mb-3">
              <label for="updateEmail" class="form-label">Email</label>
              <input type="text"
                class="form-control" name="updateEmail" aria-describedby="helpId" value="<?= $worker['email'] ?>">
            </div>
            <div class="mb-3">
              <label for="updatePhone" class="form-label">Teléfono</label>
              <input type="text"
                class="form-control" name="updatePhone" aria-describedby="helpId" value="<?= $worker['phone'] ?>">
            </div>
            <div class="mb-3">
              <label for="updateHours" class="form-label">Horas de Contrato</label>
              <input type="text"
                class="form-control" name="updateHours" aria-describedby="helpId" value="<?= $worker['hours'] ?>">
            </div>

            <a name="btnUpdate" type="submit" class="btn btn-primary" href="#" role="button">Actualizar</a>

            <a name="btnCancel" class="btn btn-danger" href="<?= BASE_URL ?>c_Users/managePersonal" role="button">Cancelar</a>

        </form>






    </div>
</div>