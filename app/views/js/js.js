

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
