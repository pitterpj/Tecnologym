<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->


<!-- CONTENT PAGE -->
<div class="row container-fluid justify-content-around">

    <div class="container col-lg-5 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">
        <div class="card h-100">
            <div class="card-header text-center">
                Horario personal
            </div>
            <div class="card-body">
                <h4 class="card-title text-center">Hoy</h4>
                <!-- <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dolor laboriosam fugit omnis eius aut? Accusamus odio expedita dolore, hic veniam aliquam doloremque laborum eveniet? Repellendus labore accusamus rerum aperiam?</p>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dolor laboriosam fugit omnis eius aut? Accusamus odio expedita dolore, hic veniam aliquam doloremque laborum eveniet? Repellendus labore accusamus rerum aperiam?</p> -->
                <div id='calendar'></div>
            </div>
        </div>
    </div> <!-- END CONTENT PAGE WITH SHADOWS -->

    <!-- col 2 -->
    <div class="container col-lg-5 col-md-9 col-sm-8 ">

        <!-- row 2 -->
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <!-- col2.1 -->
            <div class="col-12 card  ">
                <div class="card-header text-center">
                    Entrenamientos personales esta semana
                </div>
                <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">id_client</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">training_date</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($logs as $log) : ?>
                            <tr class="">
                                <td scope="row"><?= $log['id_client'] ?></td>
                                <td><?= $log['training_date'] ?></td>
                                <td>Nombre</td>
                                <td>
                                    <a name="updateWorker" class="btn btn-info" href="<?= BASE_URL . 'c_Users/updateWorkers/' . $worker['id_worker'] ?>" type="button">Editar</a>
                                    
                                    <a name="deleteWorker" class="btn btn-warning" href="#" role="button">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            </div>



        </div> <!-- end row2 -->
        <div class="row fondo-2 shadow p-3 mb-5 rounded">
            <!-- col.2.2 -->
            <div class="col-12 card ">
                <div class="card-header text-center">
                    Notificaciones
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">Notificaciones</h4>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dolor laboriosam fugit omnis eius aut? Accusamus odio expedita dolore, hic veniam aliquam doloremque laborum eveniet? Repellendus labore accusamus rerum aperiam?</p>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dolor laboriosam fugit omnis eius aut? Accusamus odio expedita dolore, hic veniam aliquam doloremque laborum eveniet? Repellendus labore accusamus rerum aperiam?</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- row1 -->












<!-- <div class=" container col-9 fondo-2 shadow p-3 mb-5 rounded">
        <div class="row col-5">
            <div class="card">
                <div class="card-header">
                    Header
                </div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eligendi at accusamus ipsam natus, explicabo voluptatum, voluptas mollitia, corrupti quam iusto eaque quos reiciendis itaque ea provident nesciunt quidem. Tempora.</p>
                </div>

            </div>
        </div>  END CONTENT PAGE WITH SHADOWS 
        <div class=" container col-9 fondo-2 shadow p-3 mb-5 rounded">

            <div class="card">
                <div class="card-header">
                    Header
                </div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, laudantium porro laborum, est cum nesciunt reiciendis ipsum earum eligendi animi, facere nostrum sequi? Odio animi vel laudantium deleniti eos dolores?</p>
                </div> -->