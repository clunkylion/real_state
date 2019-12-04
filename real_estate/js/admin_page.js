$(document).ready(function() {
    $("#tab_user_espera").click(function() {
      $("#dropdown-Gestor").hide();
      $("#dropdown-Propietario").hide();
      $("#dropdown-G").show();
      $("#dropdown-P").show();
    });
    $("#tab_user_activos").click(function() {
      $("#dropdown-Gestor").show();
      $("#dropdown-Propietario").show();
      $("#dropdown-G").hide();
      $("#dropdown-P").hide();
    });
  });
  