// <!--====== Sweet Alert log out======-->
$("#btn_logOut").on("click", function (e) {
  e.preventDefault();

  Swal.fire({
    title: "¿Desea cerrar sesión?",
    text: "",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#1E7361",
    confirmButtonText: "Si, deseo cerrar sesión.",
    cancelButtonText: "Seguir entrenando",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.replace(BASE_URL + "c_Home/logOut");
    }
  });
});

// <!--====== Select skills of Workers ======-->

function selectSkills(skills) {
  console.log(skills);
  cadena = "";

  for (skill of skills) {
    cadena +=
      "<option value = '" +
      skill["id_skill"] +
      "'>" +
      skill["name_skill"] +
      "</option>";
  }
  $("#addWorkerSkill").html(cadena);
}

// <!--====== Show skills of Workers ======-->

function showSkills(skills) {
  //console.log(skills);
  cadena = "";

  for (skill of skills) {
    cadena +=
      "<option value = '" +
      skill["id_skill"] +
      "'>" +
      skill["name_skill"] +
      "</option>";
  }
  $("#addSkill").html(cadena);
}

// <!--====== Script Sidebar Collapsable ======-->

$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

// <!--====== Script to Validate input ======-->

function validarCampo(campo) {
  if (campo.value.trim() === "") campo.classList.add("campo-error");
  else campo.classList.remove("campo-error");

  var elementosError = document.querySelectorAll(".campo-error");
  var cantidadElementosError = elementosError.length;

  if (cantidadElementosError == 0) {
    // <!--====== Sweet Alert PersonalTraining ======-->
    $("#addWorker").on("click", function (e) {
      e.preventDefault();

      Swal.fire({
        title: "¿Dar de alta al nuevo cliente?",
        text: "Va a crear un nuevo registro",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#1E7361",
        confirmButtonText: "Si, estoy seguro.",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          $("#formAdd").trigger("submit");
        }
      });
    });
  }
}

// <!--====== Script Select Show Skills of Workers on change ======-->

$("#addWorker").on("change", function (e) {
  $.post(
    BASE_URL + "c_Schedule/showSkillsWorker",
    {
      id_person: $("#addWorker").val(),
    },
    function (skills) {
      showSkills(JSON.parse(skills));
    }
  ); //end post
});

// <!--====== Script to Sweet Alert to deletePerson ======-->
$(".del").on("click", function (e) {
  e.preventDefault();

  var id_person = parseInt($(this).data("id_p"));

  Swal.fire({
    title: "¿Desea eliminar a esta persona?",
    text: "Una vez realizado se redireccionará a Inicio",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#1E7361",
    confirmButtonText: "Si, estoy seguro.",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = BASE_URL + "c_Users/deletePerson/" + id_person;
    }
  });
});

// <!--====== Script to Sweet Alert to deleteClass ======-->
$(".delClas").on("click", function (e) {
  e.preventDefault();

  var id_class = parseInt($(this).data("id"));

  console.log(id_class);

  Swal.fire({
    title: "¿Desea eliminar a esta clase?",
    text: "Va a eliminar por completo una clase",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#1E7361",
    confirmButtonText: "Si, estoy seguro.",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = BASE_URL + "c_Schedule/deleteClass/" + id_class;
    }
  });
});

// <!--====== Sweet Alert Delete PersonalTraining ======-->
$("#btn_delete_PT").on("click", function (e) {
  e.preventDefault();

  Swal.fire({
    title: "¿Seguro desea eliminar?",
    text: "Una vez realizado se redireccionará a Inicio",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#1E7361",
    confirmButtonText: "Si, estoy seguro.",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.replace(BASE_URL + "c_Users/deletePerson/" + id);
    }
  });
});
