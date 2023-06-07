<form action="<?= BASE_URL . 'c_Users/updateWorker/' . $worker['id_worker'] ?>" method="post" enctype="multipart/form-data">

    <div class="row container-fluid justify-content-around">
        <div class="container col-lg-5 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
            <div class="card h-100">
                <!-- <div class="card-header text-center mr-5">CLASES DIRIGIDAS:</div> -->
                <div class="card-body">
                    <h4 class="card-title text-center ">AVATAR</h4>
                    <div class="mb-3">
                        <img src="<?= BASE_URL . IMG_URL . $worker['avatar'] ?>" width="260" class=" mx-auto d-block img-fluid rounded-top mb-3">
                        <label for="addImg" class="form-label"></label>
                        <input type="file" class="form-control mt-4" name="addImg" aria-describedby="helpId">
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
                    <div class="card-body">
                        <h4 class="card-title text-center">INFORMACIÓN PERSONAL</h4>
                        <div class="mb-3">
                            <label for="updateName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="updateName" aria-describedby="helpId" value="<?= $worker['name'] ?>" onblur="validarCampo(this)" required>
                        </div>
                        <div class="mb-3">
                            <label for="updateLastname" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="updateLastname" aria-describedby="helpId" value="<?= $worker['lastname'] ?>" onblur="validarCampo(this)" required>
                        </div>
                        <div class="mb-3">
                            <label for="updateEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="updateEmail" aria-describedby="helpId" value="<?= $worker['email'] ?>" onblur="validarCampo(this)" required>
                        </div>
                        <div class="mb-3">
                            <label for="updatePhone" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" name="updatePhone" aria-describedby="helpId" value="<?= $worker['phone'] ?>" onblur="validarCampo(this)" required>
                        </div>
                        <div class="d-flex justify-content-around ">
                            <button type="submit" class="btn btn-primary">Actualizar Trabajador</button>
                        </div>

                    </div>
                </div>
            </div> <!--==== end row2 ====-->
        </div>
    </div>
</form>