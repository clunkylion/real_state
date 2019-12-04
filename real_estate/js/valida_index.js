//


function validar(btn) {
  if (btn == "Registrar") {
    //var rutUser = $.trim($('#rut_login').val());
    var rutGestor = $.trim($('#rut_gestor').val());
    var fechaGestor = $.trim($('#fecha_nac_corr').val());
    var nomGestor = $.trim($('#nom_corredor').val());
    var apeGestor = $.trim($('#ape_corredor').val());
    var mailGestor = $.trim($('#mail_corredor').val());
    var telefonoGestor = $.trim($('#telefono_corredor').val());
    var sexGestor = $.trim($('#sexo_corredor').val());
    var claveGestor = $.trim($('#pass_corr').val());
    var certificadoGestor = $.trim($('#certificado').val());
    if (rutGestor== "") {
      swal({
      title: "Error",
      text: "Debe ingresar el Rut",
      timer: 1050,
      icon: "error",
      button : false,
      });
      document.FormOne.rut_gestor.focus();
      return false;
    }
    if (fechaGestor == "") {
      swal({
        title: "Error",
        text: "Debe ingresar Fecha de nacimiento",
        timer: 1050,
        icon: "error",
        button : false,
      });
      document.FormOne.fecha_nac_corr.focus();
      return false;
    }
    if (nomGestor == "") {
      swal({
        title: "Error",
        text: "Debe ingresar el nombre",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.nombre_corr.focus();
      return false;
    }
    if (apeGestor == "") {
      swal({
        title: "Error",
        text: "Debe ingresar el apellido",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.apellido_corr.focus();
      return false;
    }
    if (mailGestor == "") {
      swal({
        title: "Error",
        text: "Debe ingresar el correo electronico",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.mail_gestor.focus();
      return false;
    }
    if (telefonoGestor== "") {
      swal({
        title: "Error",
        text: "Debe ingresar el telefono",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.telefono_corredor.focus();
      return false;
    }
    if (sexGestor == 0) {
      swal({
        title: "Error",
        text: "Selecione el sexo",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.sexo_corredor.focus();
      return false;
    }
    if (claveGestor == "") {
      swal({
        title: "Error",
        text: "Debe ingresar la clave",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.pass_corr.focus();
      return false;
    }
    if (certificadoGestor == "") {
      swal({
        title: "Error",
        text: "Debe subir su certificado de antecedentes",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.certificado.focus();
      return false;
    }
    if (!(rutGestor && fechaGestor && nomGestor && apeGestor && mailGestor 
      && telefonoGestor && sexGestor && claveGestor && certificadoGestor == "")) {
        //Formdata toma todos los datos del formulario, en este caso del gestor...
        var formData = new FormData(document.getElementById("FormOne"));
        formData.append('accion', 'Registrar');
        //console.log(formData);
        $.ajax({
          type: "POST",
          url: "funciones/procesa_gestor.php",
          contentType: false,
          cache: false,
          processData:false,
          data: formData,
        beforeSend: function(){
          swal({
            title: "Cargando...",
            text: "Espere un momento",
            icon: "img/load_animation.gif",
            button: false,
            timer: 6560
          });
        },
          success: function (data) {
            console.log(data);
            if (data==4 || data ==3) {
              console.log("el usuario ya está registrado, debe iniciar sesion")
                swal({
                  title: "Error",
                  text: "El usuario ya está registrado, debe iniciar sesion...",
                  timer: 1750,
                  icon: "error",
                  button : false,
                  });
                  document.getElementById('rut_gestor').value="";
                  document.getElementById('fecha_nac_corr').value="";
                  document.getElementById('nom_corredor').value="";
                  document.getElementById('ape_corredor').value="";
                  document.getElementById('mail_corredor').value="";
                  document.getElementById('telefono_corredor').value="";
                  document.getElementById('sexo_corredor').value="";
                  document.getElementById('pass_corr').value="";
                  $('#certificado').val("");
                  $('#rut_gestor').focus();
                  

            }else{
              if (data ==1) {
                //colocar mensaje correcto
                swal({
                  title: "Usuario registrado correctamente...",
                  text: false,
                  icon: "success",
                  button : false,
                  });
                  window.location.reload();            
               }
              //document.FormOne.accion.value = btn;
              //document.FormOne.submit();
            }
          }
        });  
    }  
  }
}

function validar2 (btn) {
  if (btn == "Registrar") {
  var rutPropietario = $.trim($("#rut_prop").val());
  var fechaPropietario = $.trim($("#fecha_nac_prop").val());
  var nomPropietario = $.trim($("#nom_prop").val());
  var apePropietario = $.trim($("#ape_prop").val());
  var mailPropietario = $.trim($("#mail_prop").val());
  var telefonoPropietario = $.trim($("#telefono_prop").val());
  var sexPropietario = $.trim($("#sexo_prop").val());
  var clavePropietario = $.trim($("#pass_prop").val());
  var numBienRaiz = $.trim($("#n_prop").val());
    if (rutPropietario== "") {
      swal({
        title: "Error",
        text: "Debe ingresar el Rut",
        timer: 1050,
        icon: "error",
        button : false,
        });
        document.FormTwo.rut_propi.focus();
        return false;
      }
    }
    if (fechaPropietario == "") {
      swal({
        title: "Error",
        text: "Debe ingresar la fecha de nacimiento",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.fecha_nac_propi.focus();
      return false;
    }
    if (nomPropietario== "") {
      swal({
        title: "Error",
        text: "Debe ingresar el nombre",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.nom_propi.focus();
      return false;
    }
    if (apePropietario == "") {
      swal({
        title: "Error",
        text: "Debe ingresar el apellido",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.ape_propi.focus();
      return false;
    }
    if (mailPropietario== "") {
      swal({
        title: "Error",
        text: "Debe ingresar el correo... ",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.mail_prop.focus();
      return false;
    }
    if (telefonoPropietario== "") {
      swal({
        title: "Error",
        text: "Debe ingresar el telefono...",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormOne.telefono_prop.focus();
      return false;
    }
    if (sexPropietario== 0) {
      swal({
        title: "Error",
        text: "Debe ingresar selecionar el sexo... ",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.sexo_prop.focus();
      return false;
    }
    if (numBienRaiz== "") {
      swal({
        title: "Error",
        text: "Debe ingresar el número de la propiedad... ",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.n_prop.focus();
      return false;
    }
    if (clavePropietario== "") {
      swal({
        title: "Error",
        text: "Debe ingresar una contraseña... ",
        timer: 1050,
        icon: "error",
        button : false,
        });
      document.FormTwo.pass_prop.focus();
      return false;
    }

    
    //console.log(formData.append("accion2", "Registrar"));
    if ( !(rutPropietario && fechaPropietario && nomPropietario &&
        apePropietario && mailPropietario && telefonoPropietario &&
        sexPropietario && clavePropietario && numBienRaiz == "" )){

        var formData = new FormData(document.getElementById("FormTwo"));
        formData.append('accion2', 'Registrar');

      $.ajax({
        type: "POST",
        url: "funciones/procesa_prop.php",
        contentType: false,
        cache: false,
        processData:false,
        data: formData,
        beforeSend: function() {
          swal({
            title: "Cargando...",
            text: "Espere un momento",
            icon: "img/load_animation.gif",
            button: false,
            timer: 6560
          });
        },
        success: function(data) {
          if (nomPropietario == ""){
             dffsdf
          }
          if (data == 2 || data == 3) {
            console.log("el usuario ya está registrado, debe iniciar sesion");
            swal({
              title: "Error",
              text: "El usuario ya está registrado, debe iniciar sesion...",
              timer: 1750,
              icon: "error",
              button: false
            });
            document.getElementById("rut_prop").value = "";
            document.getElementById("fecha_nac_prop").value = "";
            document.getElementById("nom_prop").value = "";
            document.getElementById("ape_prop").value = "";
            document.getElementById("mail_prop").value = "";
            document.getElementById("telefono_prop").value = "";
            document.getElementById("sexo_prop").value = "";
            document.getElementById("pass_prop").value = "";
            document.getElementById("n_prop").value = "";
            $("#rut_prop").focus();
          } else {
            if (data == 1) {
              console.log("Se registrara el propietario");
              swal({
                title: "Usuario registrado correctamente",
                text: false,
                icon: "success",
                timer : 4500,
                button: false
              });
              window.location.reload();
            }
          }
        }
      });
    }    

    // document.FormTwo.accion2.value = btn;
    // document.FormTwo.submit();
  }


function validar3(btn){
    if(btn=="Iniciar Sesion"){
      var rutUser = $.trim($('#rut_login').val());
      var claveUser = $.trim($('#clave_login').val());
        if (rutUser == "") {
          swal({
            title: "Error",
            text: "Debe ingresar el rut",
            timer: 1050,
            icon: "error",
            button : false,
            });
          document.FormLogin.rut_login.focus();
           return false;
          }
          if (claveUser == "") {
            swal({
              title: "Error",
              text: "Debe ingresar la contraseña",
              timer: 1050,
              icon: "error",
              button : false,
              });
            document.FormLogin.clave_login.focus();
            return false;
          } 
          if (!(rutUser && claveUser =="")) {
           $.ajax({
             type: "POST",
             url: "funciones/procesa_login.php",
             data: {"rut_login": rutUser, "clave_login": claveUser},
             beforeSend:function(){
                swal({
                  title: "Cargando...",
                  text: "Espere un momento",
                  icon: "img/load_animation.gif",
                  button: false,
                  timer: 6560
                });
             },
             success: function (data) {
                if (data ==1) {
                  console.log("el usuario no existe no se deberia ingresar....")
                swal({
                  title: "Error",
                  text: "El usuario no existe o la contraseña está incorrecta...",
                  timer: 1450,
                  icon: "error",
                  button : false,
                  });
                  document.getElementById('rut_login').value="";
                  document.getElementById('clave_login').value="";
                  document.getElementById('rut_login').focus();
               }else{
                console.log("el usuario si existe se deberia ingresar....")
                if (data==4) {
                  location.href = "principal_propietario.php";
                }
                if (data==3) {
                  location.href = "principal_gestor.php";

                }
                if (data==2) {
                  location.href = "principal_admin.php";
                }
               }
             }
           });
          }
        
    }
}


