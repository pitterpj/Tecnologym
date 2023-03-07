

$("#addWorker").on("change", function (e) {
  //console.log($("#addWorker").val());
  $.post(
    BASE_URL + "c_Schedule/showSkills",
    {
      id_person: $("#addWorker").val(),
    },
    function (skills) {
      showSkills(JSON.parse(skills));
      //console.log(JSON.parse(skills));
    }
  ); //end post
});

function showSkills(skills) {
  console.log(skills);

  cadena = "";
  for (skill of skills) {
    cadena +=
      "<option value = '" +
      skill['id_skill'] +
      "'>" +
      skill["name_skill"] +
      "</option>";
  }
  $("#addSkill").html(cadena);
}
