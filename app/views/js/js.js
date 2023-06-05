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

// <!--====== Show skills of Workers ======-->

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

// <!--====== Script Notifications ======-->




