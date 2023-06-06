<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!--====  CREATE CLASS====-->
<div class="row container-fluid justify-content-around ">

    <div class="container card col-lg-6 col-md-9 col-sm-8 fondo-2 shadow p-3 mb-5 rounded">

        <div class="text-center">
            <h3>Editar Clase</h3>
        </div>
        <form action="<?= BASE_URL . 'c_Schedule/updateClass/' . $class[0]['id_class'] ?>" method="post">
            <div class="mb-3">
                <label for="addCapacity" class="form-label">Capacidad de la clase:</label>
                <input type="number" class="form-control" name="addCapacity" aria-describedby="helpId" value="<?= $class[0]['capacity'] ?>">
            </div>
            <div class="mb-3">
                <label for="addDay" class="form-label">Día:</label>
                <input type="date" class="form-control" name="addDay" aria-describedby="helpId" min="<?php echo date('Y-m-d'); ?>" value="<?= $class[0]['day'] ?>">
            </div>
            <div class="mb-3">
                <label for="addHour" class="form-label">Hora:</label>
                <input type="time" class="form-control" name="addHour" aria-describedby="helpId" value="<?= $class[0]['hour'] ?>">
            </div>
            <div class="d-flex justify-content-around ">
                <button type="submit" class="btn btn-primary">Actualizar Clase</button>
            </div>
        </form>
        <?= var_dump($_POST) ?>
        <?= var_dump($class[0]['id_class']) ?>
    </div>

</div>


<!-- <script>
    // ====== Script Select Workers and skills on load ======
    $(window).on("load", function(e) {
        $.post(
            BASE_URL + "c_Schedule/showSkillsWorker", {
                id_person: $("#addWorker").val(),
            },
            function(skills) {
                showSkills(JSON.parse(skills));
            }
        ); //end post
    });

    // ====== Script Select Show Skills of Workers on change ======

    $("#addWorker").on("change", function(e) {
        //console.log($("#addWorker").val());
        $.post(
            BASE_URL + "c_Schedule/showSkillsWorker", {
                id_person: $("#addWorker").val(),
            },
            function(skills) {
                showSkills(JSON.parse(skills));
            }
        ); //end post
    }); 
</script> 
-->